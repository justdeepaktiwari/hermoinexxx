<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    //

    public function index(Request $req){
        return view("admin.dashboard.index");
    }

}
