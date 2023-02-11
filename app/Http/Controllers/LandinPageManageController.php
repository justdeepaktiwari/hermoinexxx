<?php

namespace App\Http\Controllers;

use App\Models\LandinPageManage;
use Illuminate\Http\Request;

class LandinPageManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.landingpage.index");
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
     * @param  \App\Models\LandinPageManage  $landinPageManage
     * @return \Illuminate\Http\Response
     */
    public function show(LandinPageManage $landinPageManage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LandinPageManage  $landinPageManage
     * @return \Illuminate\Http\Response
     */
    public function edit(LandinPageManage $landinPageManage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LandinPageManage  $landinPageManage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LandinPageManage $landinPageManage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LandinPageManage  $landinPageManage
     * @return \Illuminate\Http\Response
     */
    public function destroy(LandinPageManage $landinPageManage)
    {
        //
    }
}
