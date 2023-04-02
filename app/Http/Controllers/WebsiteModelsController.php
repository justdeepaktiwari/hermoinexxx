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
use App\Models\User;
use App\Models\WatchLaterVideo;
use App\Models\WebsiteModels;
use Illuminate\Http\Request;
use Auth;

class WebsiteModelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
        $this->middleware('auth');
     }

    public function index()
    {
        if(auth()->user()->subscription_id == 4){
            return redirect()->route("stripe");
        }

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

        $models = User::orderBy("id", "desc")
            ->where("is_partner", 1)
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

        return view("models.index", compact('models', 'watched_later', 'recomended_video', 'trending_searches', 'recent_search', 'random_products_video', 'random_products_photo', 'premium_video', 'sidebar_recomonded_video', 'sidebar_topcategories_video', 'sidebar_models_near', 'sidebar_active_models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebsiteModels  $websiteModels
     * @return \Illuminate\Http\Response
     */
    public function show(WebsiteModels $websiteModels)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebsiteModels  $websiteModels
     * @return \Illuminate\Http\Response
     */
    public function edit(WebsiteModels $websiteModels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebsiteModels  $websiteModels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WebsiteModels $websiteModels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebsiteModels  $websiteModels
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebsiteModels $websiteModels)
    {
        //
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
}
