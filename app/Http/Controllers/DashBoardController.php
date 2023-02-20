<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //

    public function index(Request $req){
        $count_video = Video::count();
        $count_partner = User::count();
        $count_product = Product::count();
        $count_photo = Photo::count();
        $count_category = Category::count();
        $count_tag = Tag::count();
    
        return view("admin.dashboard.index", compact('count_video','count_partner','count_product','count_photo','count_category','count_tag'));
    }

}
