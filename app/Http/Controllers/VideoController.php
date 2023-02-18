<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\UserSubscrption;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class VideoController extends Controller
{
    public function index(Request $req)
    {

        $list_videos = Video::with("subscription")->paginate(10);
        // dd($list_videos);
        return view("admin.videos.index", compact("list_videos"));
    }

    public function create()
    {
        $subscription = UserSubscrption::get();
        return view('admin.videos.create', compact('subscription'));
    }


    public function store(Request $request)
    {

        request()->validate([
            'video_title' => 'required',
            'subscription_type_id' => 'required',
            'video_detail' => 'required',
        ]);

        $create_video = $request->all();
        unset($create_video["_token"]);

        $create_video["video_url"] = asset("uploads/" . date("m")."-".$request->video_url);
        Video::create($create_video);

        return redirect()->route('videos.index')
            ->with('success', 'Video created successfully.');
    }


    public function show(Video $Video)
    {
        return view('admin.videos.show', compact('Video'));
    }


    public function edit(Video $video)
    {
        $subscription = UserSubscrption::get();
        return view('admin.videos.edit', compact('video', "subscription"));
    }


    public function update(Request $request, Video $video)
    {
        request()->validate([
            'video_title' => 'required',
            'subscription_type_id' => 'required',
            'video_detail' => 'required',
        ]);

        $video->update($request->all());

        return redirect()->route('videos.index')
            ->with('success', 'Video updated successfully');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('videos.index')
            ->with('success', 'Video deleted successfully');
    }

    public function UploadVideo(Request $request)
    {

        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");


        $path = public_path("uploads");
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

    public function ViewVideo()
    {
        return view("video");
    }

    public function UserVideo(Request $request)
    {
        $new_video = Video::orderBy("id", "desc")->paginate(10);

        $recomended_video = Video::limit(4)->get();

        $max_watched = Video::orderBy("id", "desc")->limit(8)->get();
        
        return view("videos.index", compact('new_video', 'max_watched', 'recomended_video'));
    }

    public function UserVideoDetail(Request $request)
    {
        $video_detail = Video::where("id", $request->video)->first();
        $related_video = Video::orderBy("id", "desc")->paginate(8);
        // dd($video_detail);
        if (!$video_detail) {
           return abort(404); 
        }
        return view("videos.video-detail", compact('video_detail', 'related_video'));
    }
}
