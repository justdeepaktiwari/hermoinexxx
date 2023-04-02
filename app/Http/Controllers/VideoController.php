<?php

namespace App\Http\Controllers;

use App\Models\AdsSection;
use App\Models\Category;
use App\Models\Product;
use App\Models\RelCategory;
use App\Models\RelTag;
use App\Models\Tag;
use App\Models\Video;
use App\Models\UserSubscrption;
use App\Models\SearchHistory;
use App\Models\User;
use App\Models\WatchLaterVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use File;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{
    protected  $can_access;

    public function __construct()
    {
    }

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
        $file = $getID3->analyze(public_path("uploads/" . $request->video_url));

        if (isset($file["error"])) {
            $create_video["video_duration"] = "4:16";
        } else {
            $create_video["video_duration"] = $file['playtime_string'];
        }

        $folder = explode("/", $request->video_url);
        if (isset($folder[1])) {
            $ext = explode(".", $folder[1]);
            $ext = $ext[count($ext) - 1];

            $output =
                shell_exec('cd ./uploads/' . $folder[0] . '; ffmpeg -i ' . $folder[1] . ' -ss 00:01:20 -t 00:00:30 -c:v copy -c:a copy poster.' . $ext);
            echo "<pre>$output</pre>";
        }

        if (isset($create_video["categories_id"])) {
            $create_video["categories_id"] = json_encode($create_video["categories_id"]);
        }

        if (isset($create_video["tags_id"])) {
            $create_video["tags_id"] = json_encode($create_video["tags_id"]);
        }


        $video = Video::create($create_video);


        if (isset($create_video["categories_id"])) {
            $create_video["categories_id"] = json_decode($create_video["categories_id"]);
            foreach ($create_video["categories_id"] as $categories_id) {
                RelCategory::create(["video_id" => $video->id, "category_id" => $categories_id]);
            }
        }

        if (isset($create_video["tags_id"])) {
            $create_video["tags_id"] = json_decode($create_video["tags_id"]);
            foreach ($create_video["tags_id"] as $tags_id) {
                RelTag::create(["video_id" => $video->id, "tag_id" => $tags_id]);
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

        if (isset($update["categories_id"])) {
            $update["categories_id"] = json_encode($update["categories_id"]);
        }

        if (isset($update["tags_id"])) {
            $update["tags_id"] = json_encode($update["tags_id"]);
        }

        $video->update($update);

        RelCategory::where("video_id", $video->id)->delete();

        if (isset($update["categories_id"])) {
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
            $fileName = $month . "-" . $request->name;
        } elseif ($request->has("file")) {
            $fileName = $month . "-" . $_FILES["file"]["name"];
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

            if (isset($ext[count($ext) - 1])) {
                $ext = $ext[count($ext) - 1];
            } else {
                die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Select correct file."}, "id" : "id"}');
            }

            $path = public_path("uploads");
            $uniq_folder = uniqid();

            if (!file_exists($path . '/hermoinexxx____' . $uniq_folder)) {
                mkdir($path . '/hermoinexxx____' . $uniq_folder, 0777, true);
            }

            rename("{$filePath}.part", $path . '/hermoinexxx____' . $uniq_folder . "/hermoinexxx____" . $uniq_folder . "." . $ext);
            die('{"jsonrpc" : "2.0", "result" : {"status": 200, "message": "The file has been uploaded successfully!", "name": "hermoinexxx____' . $uniq_folder . '/hermoinexxx____' . $uniq_folder . '.' . $ext . '"}}');
        }


        die('{"jsonrpc" : "2.0", "result" : {"status": 200, "message": "The file has been uploaded successfully!"}}');
    }

    public function ViewVideo()
    {
        return view("video");
    }
    /**
     * User Video Section
     */

    public function UserVideo(Request $request)
    {
        $premium_video = Video::where("subscription_type_id", 1)
            ->inRandomOrder()
            ->limit(4)->get();

        $trending_searches = SearchHistory::select("search", \DB::raw("count(search) as count"))->orderBy("count", "DESC")->groupBy("search")->limit(5)->get();

        $recent_search = SearchHistory::where(function ($query) {
            if (Auth::check()) {
                $query->where("user_id", auth()->user()->id);
            } else {
                $query->where("user_id", 0);
            }
        })->orderBy('id', 'desc')->get();

        $random_products_video = Product::where("product_image", "like", "%.mp4%")
            ->inRandomOrder()->limit(1)->first();

        $random_products_photo = Product::where("product_image", "like", "%.png%")
            ->orWhere("product_image", "like", "%.jpg%")
            ->orWhere("product_image", "like", "%.jpeg%")
            ->orWhere("product_image", "like", "%.gif%")
            ->inRandomOrder()->limit(1)->first();

        $new_video = Video::orderBy("id", "desc")
            ->whereIn("subscription_type_id", $this->canAccess())
            ->paginate(10);

        $recomended_video = Video::whereIn("subscription_type_id", $this->canAccess())
            ->inRandomOrder()
            ->limit(4)->get();

        $watched_vid_id = $this->savedWatchLaterVideo();
        $watched_later = Video::whereIn("subscription_type_id", $this->canAccess())
            ->where(function ($query) use ($watched_vid_id) {
                if ($watched_vid_id) {
                    $query->whereIn("id", json_decode($watched_vid_id->video_ids));
                }
            })
            ->orderBy("id", "desc")
            ->inRandomOrder()
            ->limit(4)->get();

        $sidebar_recomonded_video = $this->recomndedVideoFoSideBar();
        $sidebar_topcategories_video = $this->topCatVideoFoSideBar();
        $sidebar_models_near = $this->nearModelFoSideBar();
        $sidebar_active_models  = $this->activeModelFoSideBar();
        
        $ads_video_list = AdsSection::where("ads_for", "video-list")->inRandomOrder()->first();

        return view("videos.index", compact('new_video', 'watched_later', 'recomended_video', 'trending_searches', 'recent_search', 'random_products_video', 'random_products_photo', 'premium_video', 'sidebar_recomonded_video', 'sidebar_topcategories_video', 'sidebar_models_near', 'sidebar_active_models', 'ads_video_list'));
    }

    public function UserVideoDetail(Request $request)
    {
        $video_tag = Tag::inRandomOrder()->get();

        $video_detail = Video::where("id", $request->video)->whereIn("subscription_type_id", $this->canAccess())->first();

        if (!$video_detail) {
            return abort(403);
        }
        Video::where("id", $request->video)->update(["video_views_count" => \DB::raw('video_views_count+1')]);
        $this->watchLater($video_detail->id);

        $related_category = $video_detail->categories_id;
        $related_tag = $video_detail->tags_id;

        $related_video = Video::orderBy("id", "desc")->where(function ($query) use ($related_category, $related_tag) {
            if ($related_tag) {

                $related_tag = json_decode($related_tag);
                $tag_count = count($related_tag);
                if ($tag_count) {
                    $query->whereJsonContains("tags_id", $related_tag[0]);
                    for ($i = 1; $i < $tag_count; $i++) {
                        $query->orWhereJsonContains("tags_id", $related_tag[$i]);
                    }
                }
            }

            if ($related_category) {
                $related_category = json_decode($related_category);
                $category_count = count($related_category);
                if ($category_count) {
                    $query->whereJsonContains("categories_id", $related_category[0]);
                    for ($j = 1; $j < $category_count; $j++) {
                        $query->orWhereJsonContains("categories_id", $related_category[$j]);
                    }
                }
            }
        })->whereIn("subscription_type_id", $this->canAccess())->limit(8)->get();

        $related_video_count = Video::orderBy("id", "desc")->where(function ($query) use ($related_category, $related_tag) {
            if ($related_tag) {

                $related_tag = json_decode($related_tag);
                $tag_count = count($related_tag);
                if ($tag_count) {
                    $query->whereJsonContains("tags_id", $related_tag[0]);
                    for ($i = 1; $i < $tag_count; $i++) {
                        $query->orWhereJsonContains("tags_id", $related_tag[$i]);
                    }
                }
            }

            if ($related_category) {
                $related_category = json_decode($related_category);
                $category_count = count($related_category);
                if ($category_count) {
                    $query->whereJsonContains("categories_id", $related_category[0]);
                    for ($j = 1; $j < $category_count; $j++) {
                        $query->orWhereJsonContains("categories_id", $related_category[$j]);
                    }
                }
            }
        })->whereIn("subscription_type_id", $this->canAccess())->count();

        if ($related_tag) {
            $related_tag = json_decode($related_tag);
        } else {
            $related_tag = [];
        }

        $trending_searches = SearchHistory::select("search", \DB::raw("count(search) as count"))->orderBy("count", "DESC")->groupBy("search")->limit(5)->get();

        $related_search = SearchHistory::whereHas("relatedSearch", function ($query) use ($related_tag) {
            $query->whereIn("id", $related_tag);
        })->select("search", \DB::raw("count(search) as count"))
            ->orderBy("count", "DESC")->groupBy("search")
            ->limit(8)->get();

        $recent_search = SearchHistory::where(function ($query) {
            if (Auth::check()) {
                $query->where("user_id", auth()->user()->id);
            } else {
                $query->where("user_id", 0);
            }
        })->orderBy('id', 'desc')->get();

        $random_products_photo = Product::where("product_image", "like", "%.png%")
            ->orWhere("product_image", "like", "%.jpg%")
            ->orWhere("product_image", "like", "%.jpeg%")
            ->orWhere("product_image", "like", "%.gif%")
            ->inRandomOrder()->limit(1)->first();

        if (!$video_detail) {
            return abort(404);
        }
        $sidebar_recomonded_video = $this->recomndedVideoFoSideBar();
        $sidebar_topcategories_video = $this->topCatVideoFoSideBar();
        $sidebar_models_near = $this->nearModelFoSideBar();
        $sidebar_active_models  = $this->activeModelFoSideBar();
        

        $ads_video_detail = AdsSection::where("ads_for", "video-detail")->inRandomOrder()->first();

        return view("videos.video-detail", compact('video_detail', 'related_video', 'trending_searches', 'recent_search', 'random_products_photo', 'video_tag', 'related_tag', 'related_category', 'related_video_count', 'related_search', 'sidebar_recomonded_video','sidebar_topcategories_video', 'sidebar_models_near', 'sidebar_active_models', 'ads_video_detail'));
    }

    public function searchQuery(Request $request)
    {
        $search = $request->search;

        $video_search = Video::where(function ($query) use ($search) {
            $query->where("video_title", "like", "%$search%")->orWhere("video_detail", "like", "%$search%");
            $query->orWhereHas("rel_tag.tag", function (Builder $query) use ($search) {
                $query->where("name", "like", "%$search%");
            });
        })->whereIn("subscription_type_id", $this->canAccess())->limit(8)->pluck("video_title")->toArray();

        return response()->json($video_search, 200);
    }

    public function VideoSearch(Request $request)
    {
        $search = $request->search;
        $delete = $request->delete;

        if ($delete) {
            $is_deleted = SearchHistory::where(function ($query) {
                if (Auth::check()) {
                    $query->where("user_id", auth()->user()->id);
                } else {
                    $query->where("user_id", 0);
                }
            })->where("search", "like", "%$delete%")->delete();
            return response()->json(["success"], 200);
        }

        if ($search && Auth::check()) {
            $count = SearchHistory::where(function ($query) {
                if (Auth::check()) {
                    $query->where("user_id", auth()->user()->id);
                } else {
                    $query->where("user_id", 0);
                }
            })->count();

            if ($count >= 5) {
                SearchHistory::where(function ($query) {
                    if (Auth::check()) {
                        $query->where("user_id", auth()->user()->id);
                    } else {
                        $query->where("user_id", 0);
                    }
                })->orderBy('id', 'desc')->first()->update(["search" => $search]);
            } else {
                SearchHistory::updateOrCreate(["user_id" => auth()->user()->id, "search" => $search], ["user_id" => auth()->user()->id, "search" => $search]);
            }
        }

        $trending_searches = SearchHistory::select("search", \DB::raw("count(search) as count"))->orderBy("count", "DESC")->groupBy("search")->limit(5)->get();

        $recent_search = SearchHistory::where(function ($query) {
            if (Auth::check()) {
                $query->where("user_id", auth()->user()->id);
            } else {
                $query->where("user_id", 0);
            }
        })->orderBy('id', 'desc')->get();

        $new_video = Video::orderBy("id", "desc")
            ->where(function ($query) use ($search) {
                if ($search) {
                    $query->where("video_title", "like", "%$search%")->orWhere("video_detail", "like", "%$search%");
                    $query->orWhereHas("rel_tag.tag", function (Builder $query) use ($search) {
                        $query->where("name", "like", "%$search%");
                    });
                }
            })->whereIn("subscription_type_id", $this->canAccess())->paginate(15);
        
        $sidebar_recomonded_video = $this->recomndedVideoFoSideBar();
        $sidebar_topcategories_video = $this->topCatVideoFoSideBar();
        $sidebar_models_near = $this->nearModelFoSideBar();
        $sidebar_active_models  = $this->activeModelFoSideBar();

        return view("videos.search-video", compact("new_video", "search", "trending_searches", "recent_search", "sidebar_recomonded_video",'sidebar_topcategories_video', 'sidebar_models_near', 'sidebar_active_models'));
    }


    public function loadMoreVideo(Request $request)
    {

        $related_tag = $request->rel_tag;
        $related_category = $request->rel_cat;
        $related_video_count = $request->related_video_count;

        $related_video = Video::orderBy("id", "desc")->where(function ($query) use ($related_category, $related_tag) {
            if ($related_tag) {

                $related_tag = json_decode($related_tag);
                $tag_count = count($related_tag);
                if ($tag_count) {
                    $query->whereJsonContains("tags_id", $related_tag[0]);
                    for ($i = 1; $i < $tag_count; $i++) {
                        $query->orWhereJsonContains("tags_id", $related_tag[$i]);
                    }
                }
            }

            if ($related_category) {
                $related_category = json_decode($related_category);
                $category_count = count($related_category);

                if ($category_count) {
                    $query->whereJsonContains("categories_id", $related_category[0]);
                    for ($j = 1; $j < $category_count; $j++) {
                        $query->orWhereJsonContains("categories_id", $related_category[$j]);
                    }
                }
            }
        })->whereIn("subscription_type_id", $this->canAccess())->skip(8)->limit($related_video_count)->get();

        $res_video = "";
        foreach ($related_video as $video) {
            $type = explode(".", $video->video_url);
            $type = isset($type[count($type) - 1]) ? $type[count($type) - 1] : "mp4";
            $folder = isset($video->video_url) ? explode("/", $video->video_url) : "";

            if (isset($folder[count($folder) - 2])) {
                $folder = $folder[count($folder) - 2];
            }

            $res_video .=
                '<a class="col-md-3 col-12 video-hover mb-2 text-decoration-none text-white" href="' . route("user-videos.video-detail", $video->id) . '" role="button">
                    <div class="position-relative" style="height: 160px;">
                        <video class="video" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" playsinline muted loop>
                            <source src="' . asset("uploads/" . $folder . "/poster." . $type) . '" type="video/' . $type . '">
                        </video>
                        <span class="position-absolute bottom-0 end-0 bg-dark text-white px-2 z-index-9">' . ($video->video_duration ?? "4:19") . '</span>
                        <span class="position-absolute top-0 end-0 text-white bg-dark z-index-9 onhover-show p-1  fw-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                            </svg>
                        </span>
                    </div>
                    <div class="mt-2">' . $video->video_title . '</div>
                    <div class="d-flex justify-content-between">
                        <span class="small text-muted">' . ($video->video_views_count ?? 200) . ' views</span><span class="mt-1 small text-muted">77%</span>
                    </div>
                </a>';
        }
        return response($res_video, 200);
    }

    public function canAccess()
    {
        $array_subs_id = [];
        $can_access = UserSubscrption::where(function ($query) {
            if (Auth::check()) {
                $query->where("id", auth()->user()->subscription_id);
            } else {
                $query->where("id", 4);
            }
        })->get();

        foreach ($can_access as $access_value) {
            if ($access_value->can_access) {
                $array_subs_id = json_decode($access_value->can_access);
            }
        }

        return $array_subs_id;
    }

    public function watchLater($video_id)
    {
        $request_ip = request()->ip();


        if (auth()->check()) {
            $video_saved = WatchLaterVideo::where(function ($query) use ($request_ip) {
                $query->where("user_id", auth()->user()->id);
            })->first();

            if (isset($video_saved->video_ids)) {
                $video_ids = json_decode($video_saved->video_ids);
            } else {
                $video_ids = [];
            }

            if (!in_array($video_id, $video_ids)) {
                $video_ids[] = $video_id;
            }

            WatchLaterVideo::updateOrCreate([
                "user_id" => auth()->user()->id
            ], [
                "video_ids" => json_encode($video_ids)
            ]);
        } else {
            $video_saved = WatchLaterVideo::where(function ($query) use ($request_ip) {
                $query->where("ip_address", $request_ip);
            })->first();

            if (isset($video_saved->video_ids)) {
                $video_ids = json_decode($video_saved->video_ids);
            } else {
                $video_ids = [];
            }

            if (!in_array($video_id, $video_ids)) {
                $video_ids[] = $video_id;
            }

            WatchLaterVideo::updateOrCreate([
                "ip_address" => $request_ip
            ], [
                "video_ids" => json_encode($video_ids)
            ]);
        }
    }

    public function savedWatchLaterVideo()
    {
        $request_ip = request()->ip();
        return WatchLaterVideo::where(function ($query) use ($request_ip) {
            if (auth()->check()) {
                $query->where("user_id", auth()->user()->id);
            } else {
                $query->where("ip_address", $request_ip);
            }
        })->first();
    }

    /**
     * Categories Video
     */
    protected $video_categories = [
        "recommended",
        "most-viewed",
        "top-rated",
        "trending-now",
        "most-favorited",
        "newest",
        "longest", 
        "top-categories"
    ];

    public function CategoriesVideo($video_for)
    {
        if (in_array($video_for, $this->video_categories)) {
            $videos = Video::select("*")->where(function ($query) use ($video_for) {
                if ($video_for == "recommended") {
                    $query->where("tags_id", "");
                }
            })
            ->whereIn("subscription_type_id", $this->canAccess())
            ->orderBy($this->orderByForCat($video_for), "DESC")->paginate(8);


            $random_products_photo = Product::where("product_image", "like", "%.png%")
                ->orWhere("product_image", "like", "%.jpg%")
                ->orWhere("product_image", "like", "%.jpeg%")
                ->orWhere("product_image", "like", "%.gif%")
                ->inRandomOrder()->limit(1)->first();


            $new_video = Video::orderBy("id", "desc")
                ->whereIn("subscription_type_id", $this->canAccess())
                ->limit(10)->get();

            $categories_for = $video_for;


            $trending_searches = SearchHistory::select("search", \DB::raw("count(search) as count"))->orderBy("count", "DESC")->groupBy("search")->limit(5)->get();

            $recent_search = SearchHistory::where(function ($query) {
                if (Auth::check()) {
                    $query->where("user_id", auth()->user()->id);
                } else {
                    $query->where("user_id", 0);
                }
            })->orderBy('id', 'desc')->get();

            $sidebar_recomonded_video = $this->recomndedVideoFoSideBar();
            $sidebar_topcategories_video = $this->topCatVideoFoSideBar();
            $sidebar_models_near = $this->nearModelFoSideBar();
            $sidebar_active_models  = $this->activeModelFoSideBar();

            return view("videos.video-categories", compact("videos", "categories_for", "random_products_photo", "new_video", "trending_searches", "recent_search", "sidebar_recomonded_video", 'sidebar_topcategories_video', 'sidebar_models_near', 'sidebar_active_models'));
        } else {
            return abort(404);
        }
    }


    public function orderByForCat($video_for)
    {
        if ($video_for == "top-rated") {
            return "video_views_count";
        } else if ($video_for == "most-viewed") {
            return "video_views_count";
        } else if ($video_for == "trending-now") {
            return "video_views_count";
        } else if ($video_for == "most-favorited") {
            return "video_views_count";
        } else if ($video_for == "newest") {
            return "id";
        } else if ($video_for == "longest") {
            return "video_duration";
        } else if($video_for == "top-categories"){
            return "video_duration";
        } else {
            return "id";
        }
    }


    public function recomndedVideoFoSideBar()
    {
        return Video::whereIn("subscription_type_id", $this->canAccess())
        ->inRandomOrder()
        ->limit(6)->get();
    }

    public function topCatVideoFoSideBar()
    {
        return Video::whereIn("subscription_type_id", $this->canAccess())
        ->where(function($query){
            $query->whereNotNull("categories_id")->orWhere("categories_id", "");
        })
        ->inRandomOrder()
        ->limit(3)->get();
    }


    public function nearModelFoSideBar()
    {
        return User::where("is_partner", 1)
        ->inRandomOrder()
        ->limit(3)->get();
    }

    
    public function activeModelFoSideBar()
    {
        return User::where("is_partner", 1)
        ->where("active_status", 1)
        ->inRandomOrder()
        ->limit(3)->get();
    }
}
