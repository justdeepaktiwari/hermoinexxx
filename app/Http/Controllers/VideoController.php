<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(Request $req){
        
        $list_videos = Video::with("subscription")->paginate(15);
        // dd($list_videos);
        return view("admin.videos.index", compact("list_videos"));
    }

    public function create()
    {
        return view('admin.videos.create');
    }
   
    
    public function store(Request $request)
    {
        
        request()->validate([
            'video_title' => 'required',
            'subscription_type_id' => 'required',
            'video_detail' => 'required',
            'video_url' => 'required',
        ],[
            "video_url.required" => "The video field required"
        ]);
    
        $create_video = $request->all();
        unset($create_video["_token"]);

        if($request->hasFile('video_url')){

            $file = $request->file('video_url');
            
            $extension = $file->getClientOriginalExtension();
            $randomstr = md5(date("Ymdhisu"));

            $filename = $randomstr.".".$extension;

            $path = public_path().'/uploads/';
            $file->move($path, $filename);
            $create_video["video_url"] = asset("uploads/".$filename);
        }
        
        Video::create($create_video);
    
        return redirect()->route('videos.index')
                        ->with('success','Video created successfully.');
    }
    
    
    public function show(Video $Video)
    {
        return view('admin.videos.show',compact('Video'));
    }
    
    
    public function edit(Video $Video)
    {
        return view('admin.videos.edit',compact('Video'));
    }
    
    
    public function update(Request $request, Video $Video)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $Video->update($request->all());
    
        return redirect()->route('videos.index')
                        ->with('success','Video updated successfully');
    }
    
    public function destroy(Video $Video)
    {
        $Video->delete();
    
        return redirect()->route('videos.index')
                        ->with('success','Video deleted successfully');
    }
}
