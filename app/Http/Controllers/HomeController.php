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
        return view('welcome', compact("purchase_offer"));
    }


    public function debugAmount()
    {
        // dd("KUXBHI");
        return;
        $get_file_name = backup_videos::get();
        foreach ($get_file_name as $key => $get_file_name_val) {
            echo($get_file_name_val->old_name)."<br>";
            $folder = str_replace(".mp4", "", $get_file_name_val->new_name);
            Video::where("video_url", "like", "%$get_file_name_val->old_name%")->update(["video_url" => asset("uploads/".$folder."/".$get_file_name_val->new_name)]);
        }
        dd("deepak");

    //     $path = public_path("uploads");
    //     $backup_path = public_path("renamedvideo");

    //     $file_array_dir = array_diff(scandir($path), array('..', '.'));

    //     $file_array = array_filter($file_array_dir, function($item) use($path){
    //         return !is_dir($path.'/' . $item);
    //     });

    //     foreach ($file_array as $key => $value) {
    //         echo $value."<br>";
    //         $uniq_folder = uniqid();
           
    //         if (!file_exists($path.'/hermoinexxx____'.$uniq_folder)) {
    //             mkdir($path.'/hermoinexxx____'.$uniq_folder, 0777, true);
    //         }

    //         copy($path."/".$value, $backup_path."/".$value);

    //         rename($path."/".$value, $path.'/hermoinexxx____'.$uniq_folder."/hermoinexxx____".$uniq_folder.".mp4");

    //         backup_videos::updateOrCreate(["old_name" => $value],["new_name" => "hermoinexxx____".$uniq_folder.".mp4"]);
    //     }
    }
}
