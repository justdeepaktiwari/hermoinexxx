<?php

namespace App\Http\Controllers;

use App\Models\AdsSection;
use Illuminate\Http\Request;
use File;

class AdsSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_ads = AdsSection::get();
        return view("admin.ads.index", compact("list_ads"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.ads.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = "";
        if($request->hasFile("ads_gif")){
            $file = $request->file('ads_gif');
            
            $extension = $file->getClientOriginalExtension();
            $randomstr = md5(date("Ymdhisu"));

            $filename = $randomstr.".".$extension;

            $path = public_path().'/uploads/ads/';
            
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }

            $file->move($path, $filename);
        }

        AdsSection::create(["ads_gif" => $filename, "ads_for" => $request->ads_for, "ads_redirect_url" => $request->ads_redirect_url]);
        return redirect()->route("ads.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdsSection  $adsSection
     * @return \Illuminate\Http\Response
     */
    public function show(AdsSection $adsSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdsSection  $adsSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ads = AdsSection::where("id", $id)->first();
        return view("admin.ads.edit", compact('ads'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdsSection  $adsSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if($request->hasFile("ads_gif")){
            $file = $request->file('ads_gif');
            
            $extension = $file->getClientOriginalExtension();
            $randomstr = md5(date("Ymdhisu"));

            $filename = $randomstr.".".$extension;

            $path = public_path().'/uploads/ads/';
            
            if (!File::exists($path)) {
                File::makeDirectory($path, $mode = 0777, true, true);
            }
            
            $file->move($path, $filename);
            $input["ads_gif"] = $filename;
        }

        unset($input["_token"]);
        unset($input["_method"]);
        AdsSection::where("id", $id)->update($input);

        return redirect()->route("ads.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdsSection  $adsSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        AdsSection::where("id", $id)->delete();
        return redirect()->back();
    }
}
