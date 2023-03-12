<?php

namespace App\Http\Controllers;

use App\Models\backup_videos;
use App\Models\PurchaseOffer;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // Auth::logout();
        // $this->middleware('auth');
        
        // if (Auth::user()->hasAnyRole("role:super-admin|admin")) {
        //     # code...
        // }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $purchase_offer = PurchaseOffer::get();
        
        $foot_fetish = Video::whereHas("rel_category.category", function ($query){
                $query->where("name", "like", "%Feet%");
                $query->orWhere("name", "like", "%Fetish%");
            })->inRandomOrder()->limit(1)->first();
        
        $bdsm_video = Video::whereHas("rel_category.category", function ($query){
                $query->where("name", "like", "%BDSM%");
            })->inRandomOrder()->limit(1)->first();

        $cum_cluster = Video::whereHas("rel_category.category", function ($query){
                $query->where("name", "like", "%Cum Shot%");
                $query->orWhere("name", "like", "%Creampie%");
            })->orWhereHas("rel_tag.tag", function ($query){
                $query->where("name", "like", "%cum-on-pussy%");
                $query->orWhere("name", "like", "%cum-on-tits%");
                $query->orWhere("name", "like", "%cum-in-pussy%");
                $query->orWhere("name", "like", "%cum-inside%");
                $query->orWhere("name", "like", "%cumshot%");
            })->inRandomOrder()->limit(9)->get();
        // dd($foot_fetish);
        return view('welcome', compact("purchase_offer", "foot_fetish", "bdsm_video", "cum_cluster"));
    }


    public function debugAmount()
    {
        return;
        $video = Video::get();

        foreach ($video as $vid_value) {
            $folder = explode("/", $vid_value->video_url);
            $folder = $folder[count($folder)-2];

            $getID3 = new \getID3;
            $file = $getID3->analyze(public_path("uploads/".$folder."/".$folder.".mp4"));
            
            if(isset($file["error"])){
                continue;
            }

            Video::where("id", $vid_value->id)->update(["video_duration" => $file['playtime_string']]);
            // dd($file['playtime_string']);
        }
        // $getID3 = new \getID3;
        // $file = $getID3->analyze($video_path);
        // $duration = date('H:i:s.v', $file['playtime_seconds']);

        return;

        $path = public_path("uploads");
    //     $backup_path = public_path("renamedvideo");

        $file_array_dir = array_diff(scandir($path), array('..', '.', 'products', 'photos'));
        
        $file_array = array_filter($file_array_dir, function($item) use($path){
            return is_dir($path.'/' . $item);
        });

        foreach ($file_array as $key => $value) {
            $output = 
            shell_exec('cd ./uploads/'.$value.'; ffmpeg -i '.$value.'.mp4 -ss 00:01:20 -t 00:00:30 -c:v copy -c:a copy poster.mp4');
            echo "<pre>$output</pre>";
            
            // $uniq_folder = uniqid();
           
            // if (!file_exists($path.'/hermoinexxx____'.$uniq_folder)) {
            //     mkdir($path.'/hermoinexxx____'.$uniq_folder, 0777, true);
            // }

            // copy($path."/".$value, $backup_path."/".$value);

            // rename($path."/".$value, $path.'/hermoinexxx____'.$uniq_folder."/hermoinexxx____".$uniq_folder.".mp4");

            // backup_videos::updateOrCreate(["old_name" => $value],["new_name" => "hermoinexxx____".$uniq_folder.".mp4"]);
        }
    }
}
