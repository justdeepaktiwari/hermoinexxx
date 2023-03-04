<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\RelCategory;
use App\Models\RelTag;
use App\Models\Tag;
use App\Models\Video;
use App\Models\UserSubscrption;
use App\Models\SearchHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;

class VideoController extends Controller
{
    public function index(Request $req)
    {
        $list_videos = Video::with("subscription")
                        ->with("rel_category.category")
                        ->with("rel_tag.tag")
                        ->paginate(10);

        return view("admin.videos.index", compact("list_videos"));
    }

    public function create()
    {
        $subscription = UserSubscrption::get();
        $category = Category::get();
        $tags = Tag::get();
        return view('admin.videos.create', compact('subscription', 'category', 'tags'));
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

        $create_video["video_url"] = asset("uploads/" . $request->video_url);

        $getID3 = new \getID3;
        $file = $getID3->analyze(public_path("uploads/".$request->video_url));

        if(isset($file["error"])){
            $create_video["video_duration"] = "4:16";
        }else{
            $create_video["video_duration"] = $file['playtime_string'];
        }

        $folder = explode("/", $request->video_url);
        if(isset($folder[1])){
            $ext = explode(".", $folder[1]);
            $ext = $ext[count($ext)-1];

            $output = 
            shell_exec('cd ./uploads/'.$folder[0].'; ffmpeg -i '.$folder[1].' -ss 00:01:20 -t 00:00:30 -c:v copy -c:a copy poster.'.$ext);
            echo "<pre>$output</pre>";
        }

        if(isset($create_video["categories_id"])){
            $create_video["categories_id"] = json_encode($create_video["categories_id"]);
        }

        if (isset($create_video["tags_id"])) {
            $create_video["tags_id"] = json_encode($create_video["tags_id"]);
        }


        $video = Video::create($create_video);

        
        if(isset($create_video["categories_id"])){
            $create_video["categories_id"] = json_decode($create_video["categories_id"]);
            foreach ($create_video["categories_id"] as $categories_id) {
                RelCategory::create(["video_id" => $video->id , "category_id" => $categories_id]);
            }
        }

        if (isset($create_video["tags_id"])) {
            $create_video["tags_id"] = json_decode($create_video["tags_id"]);
            foreach ($create_video["tags_id"] as $tags_id) {
                RelTag::create(["video_id" => $video->id , "tag_id" => $tags_id]);
            }
        }

        return redirect()->route('videos.index')
            ->with('success', 'Video created successfully.');
    }


    public function show(Video $Video)
    {
        return view('admin.videos.show', compact('Video'));
    }


    public function edit($id)
    {
        $video = Video::with("rel_category.category")
        ->with("rel_tag.tag")->where("id", $id)->first();
        
        $subscription = UserSubscrption::get();
        $category = Category::get();
        $tags = Tag::get();
        return view('admin.videos.edit', compact('video', "subscription", "category", "tags"));
    }


    public function update(Request $request, Video $video)
    {
        request()->validate([
            'video_title' => 'required',
            'subscription_type_id' => 'required',
            'video_detail' => 'required',
        ]);

        $update = $request->all();

        if(isset($update["categories_id"])){
            $update["categories_id"] = json_encode($update["categories_id"]);
        }

        if (isset($update["tags_id"])) {
            $update["tags_id"] = json_encode($update["tags_id"]);
        }

        $video->update($update);

        RelCategory::where("video_id", $video->id)->delete();

        if(isset($update["categories_id"])){
            $update["categories_id"] = json_decode($update["categories_id"]);

            foreach ($update["categories_id"] as $categories_id) {
                RelCategory::create(["video_id" => $video->id, "category_id" => $categories_id]);
            }
        }

        RelTag::where("video_id", $video->id)->delete();
        if (isset($update["tags_id"])) {
            $update["tags_id"] = json_decode($update["tags_id"]);

            foreach ($update["tags_id"] as $tags_id) {
                RelTag::create(["video_id" => $video->id, "tag_id" => $tags_id]);
            }
        }

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

        if (!$chunks || $chunk == $chunks - 1) {

            $ext = explode(".", $filePath);

            if(isset($ext[count($ext)-1])){
                $ext = $ext[count($ext)-1];
            }else{
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Select correct file."}, "id" : "id"}');
            }

            $path = public_path("uploads");
            $uniq_folder = uniqid();

            if (!file_exists($path.'/hermoinexxx____'.$uniq_folder)) {
                mkdir($path.'/hermoinexxx____'.$uniq_folder, 0777, true);
            }
            
            rename("{$filePath}.part", $path.'/hermoinexxx____'.$uniq_folder."/hermoinexxx____".$uniq_folder.".".$ext);
            die('{"jsonrpc" : "2.0", "result" : {"status": 200, "message": "The file has been uploaded successfully!", "name": "hermoinexxx____'.$uniq_folder.'/hermoinexxx____'.$uniq_folder.'.'.$ext.'"}}');
        }

    
        die('{"jsonrpc" : "2.0", "result" : {"status": 200, "message": "The file has been uploaded successfully!"}}');
    }

    public function ViewVideo()
    {
        return view("video");
    }

    public function UserVideo(Request $request)
    {
        $can_access = UserSubscrption::where("id", auth()->user()->subscription_id)->get();
        $trending_searches = SearchHistory::select("search", \DB::raw("count(search) as count"))->orderBy("count", "DESC")->groupBy("search")->limit(5)->get();
        $recent_search = SearchHistory::where("user_id", auth()->user()->id)->orderBy('id','desc')->get();
        
        $random_products_video = Product::where("product_image", "like", "%.mp4%")
                                    ->inRandomOrder()->limit(1)->first();

        $random_products_photo = Product::where("product_image", "like", "%.png%")
                                    ->orWhere("product_image", "like", "%.jpg%")
                                    ->orWhere("product_image", "like", "%.jpeg%")
                                    ->inRandomOrder()->limit(1)->first();
        $array_subs_id = [];
        foreach ($can_access as $access_value) {
            if($access_value->can_access){
                $array_subs_id = json_decode($access_value->can_access);
            }
        }

        $new_video = Video::orderBy("id", "desc")
                    ->whereIn("subscription_type_id",$array_subs_id)
                    ->paginate(10);

        $recomended_video = Video::whereIn("subscription_type_id",$array_subs_id)
                            ->inRandomOrder()
                            ->limit(4)->get();

        $max_watched = Video::whereIn("subscription_type_id",$array_subs_id)
                        ->orderBy("id", "desc")
                        ->inRandomOrder()
                        ->limit(8)->get();

        return view("videos.index", compact('new_video', 'max_watched', 'recomended_video', 'trending_searches', 'recent_search', 'random_products_video', 'random_products_photo'));
    }

    public function UserVideoDetail(Request $request)
    {

        $video_detail = Video::where("id", $request->video)->first();
        $related_video = Video::orderBy("id", "desc")->paginate(8);
        $trending_searches = SearchHistory::select("search", \DB::raw("count(search) as count"))->orderBy("count", "DESC")->groupBy("search")->limit(5)->get();
        
        $recent_search = SearchHistory::where("user_id", auth()->user()->id)->orderBy('id','desc')->get();

        $random_products_photo = Product::where("product_image", "like", "%.png%")
        ->orWhere("product_image", "like", "%.jpg%")
        ->orWhere("product_image", "like", "%.jpeg%")
        ->inRandomOrder()->limit(1)->first();

        if (!$video_detail) {
           return abort(404); 
        }

        return view("videos.video-detail", compact('video_detail', 'related_video', 'trending_searches', 'recent_search', 'random_products_photo'));
    }

    public function searchQuery(Request $request)
    {
        $search = $request->search;

        $video_search = Video::where(function($query) use($search){
            $query->where("video_title", "like", "%$search%")->orWhere("video_detail", "like", "%$search%");
        })->limit(8)->pluck("video_title")->toArray();

        return response()->json($video_search, 200);
    }

    public function VideoSearch(Request $request)
    {
        $search = $request->search;
        $delete = $request->delete;

        if($delete){
            $is_deleted = SearchHistory::where("user_id", auth()->user()->id)->where("search", "like", "%$delete%")->delete();
            return response()->json(["success"], 200);
        }

        if($search){
            $count = SearchHistory::where("user_id", auth()->user()->id)->count();
            if($count >= 5){
                SearchHistory::where("user_id", auth()->user()->id)->orderBy('id','desc')->first()->update(["search" => $search]);
            }else{
                SearchHistory::updateOrCreate(["user_id" => auth()->user()->id , "search" => $search],["user_id" => auth()->user()->id , "search" => $search]);
            }
        }
        
        $trending_searches = SearchHistory::select("search", \DB::raw("count(search) as count"))->orderBy("count", "DESC")->groupBy("search")->limit(5)->get();
        $recent_search = SearchHistory::where("user_id", auth()->user()->id)->orderBy('id','desc')->get();
        $new_video = Video::orderBy("id", "desc")
        ->where(function($query) use($search){
            if($search){
                $query->where("video_title", "like", "%$search%")->orWhere("video_detail", "like", "%$search%");
            }
        })->paginate(12);

        return view("videos.search-video", compact("new_video", "search", "trending_searches", "recent_search"));
    }
}
