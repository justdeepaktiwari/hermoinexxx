<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\UserSubscrption;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(Request $req){
        $list_photos = Photo::with("subscription")->paginate(15);
        return view("admin.photos.index", compact("list_photos"));
    }

    public function create()
    {
        $subscription = UserSubscrption::get();
        return view('admin.photos.create', compact('subscription'));
    }
   
    
    public function store(Request $request)
    {
        
        request()->validate([
            'photo_title' => 'required',
            'subscription_type_id' => 'required',
            'photo_detail' => 'required',
            'photo_url' => 'required',
        ],[
            "photo_url.required" => "The Photo field required"
        ]);
    
        $create_photo = $request->all();
        unset($create_photo["_token"]);

        if($request->hasFile('photo_url')){

            $file = $request->file('photo_url');
            
            $extension = $file->getClientOriginalExtension();
            $randomstr = md5(date("Ymdhisu"));

            $filename = $randomstr.".".$extension;

            $path = public_path().'/uploads/';
            $file->move($path, $filename);
            $create_photo["photo_url"] = asset("uploads/".$filename);
        }
        
        Photo::create($create_photo);
    
        return redirect()->route('photos.index')
                        ->with('success','Photo created successfully.');
    }
    
    
    public function show(Photo $photo)
    {
        return view('admin.photos.show',compact('Video'));
    }
    
    
    public function edit(Photo $photo)
    {
        return view('admin.photos.edit',compact('Video'));
    }
    
    
    public function update(Request $request, Photo $photo)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $photo->update($request->all());
    
        return redirect()->route('photos.index')
                        ->with('success','Photo updated successfully');
    }
    
    public function destroy(Photo $photo)
    {
        $photo->delete();
    
        return redirect()->back()
                        ->with('success','Photo deleted successfully');
    }


    public function UploadPhoto(Request $request)
    {

        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");


        $path = public_path("uploads/thumbnail");
        // dd($path);
        $cleanupTargetDir = true;
        $maxFileAge = 5 * 3600;

        // Create target dir 
        if (!File::exists($path)) {
            File::makeDirectory($path, $mode = 0777, true, true);
        }
        
        // Get a file name
        $month = Date("m");
        
        if (isset($request->name)) {
            $fileName = $month."-".$request->name;
        } elseif ($request->has("file")) {
            $fileName = $month."-".$_FILES["file"]["name"];
        } else {
            $fileName = uniqid("file_");
        }

        $filePath = $path . DIRECTORY_SEPARATOR . $fileName;

        // Chunking might be enabled
        $chunk = isset($request->chunk) ? intval($request->chunk) : 0;
        $chunks = isset($request->chunks) ? intval($request->chunks) : 0;

        // Remove old temp files
        if ($cleanupTargetDir) {
            if (!is_dir($path) || !$dir = opendir($path)) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
            }

            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $path . DIRECTORY_SEPARATOR . $file;

                // If temp file is current file proceed to the next 
                if ($tmpfilePath == "{$filePath}.part") {
                    continue;
                }

                // Remove temp file if it is older than the max age and is not the current file 
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
                    // @unlink($tmpfilePath);
                    File::delete($tmpfilePath);
                }
            }
            closedir($dir);
        }


        // Open temp file 
        if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
            die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

        if (!empty($_FILES)) {
            if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
            }

            // Read binary input stream and append it to temp file 
            if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        } else {
            if (!$in = @fopen("php://input", "rb")) {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
            }
        }

        while ($buff = fread($in, 4096)) {
            fwrite($out, $buff);
        }

        @fclose($out);
        @fclose($in);

        // Check if file has been uploaded 
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off  
            rename("{$filePath}.part", $filePath);
        }

        // Return Success JSON-RPC response 
        die('{"jsonrpc" : "2.0", "result" : {"status": 200, "message": "The file has been uploaded successfully!"}}');
    }
}
