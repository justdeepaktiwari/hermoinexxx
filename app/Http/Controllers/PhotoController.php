<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(Request $req){
        return view("admin.photos.index");
    }
}
