<?php

namespace App\Http\Controllers;

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
        $real_amount_360 = $off_amount_360 = "100";
        $real_amount_90 = $off_amount_90 = "100";
        $real_amount_30 = $off_amount_30 = "100";

        return view('welcome', compact("real_amount_360", "real_amount_90", "real_amount_30", "off_amount_360", "off_amount_90", "off_amount_30"));
    }
}
