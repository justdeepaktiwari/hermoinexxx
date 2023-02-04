<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(Request $req){
        $list_photos = Photo::with("subscription")->paginate(15);
        return view("admin.photos.index", compact("list_photos"));
    }

    public function create()
    {
        return view('admin.photos.create');
    }
   
    
    public function store(Request $request)
    {
        
        request()->validate([
            'photo_title' => 'required',
            'subscription_type_id' => 'required',
            'photo_detail' => 'required',
            'photo_url' => 'required',
        ],[
            "photo_url.required" => "The Photo field required"
        ]);
    
        $create_photo = $request->all();
        unset($create_photo["_token"]);

        if($request->hasFile('photo_url')){

            $file = $request->file('photo_url');
            
            $extension = $file->getClientOriginalExtension();
            $randomstr = md5(date("Ymdhisu"));

            $filename = $randomstr.".".$extension;

            $path = public_path().'/uploads/';
            $file->move($path, $filename);
            $create_photo["photo_url"] = asset("uploads/".$filename);
        }
        
        Photo::create($create_photo);
    
        return redirect()->route('photos.index')
                        ->with('success','Photo created successfully.');
    }
    
    
    public function show(Photo $photo)
    {
        return view('admin.photos.show',compact('Video'));
    }
    
    
    public function edit(Photo $photo)
    {
        return view('admin.photos.edit',compact('Video'));
    }
    
    
    public function update(Request $request, Photo $photo)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
    
        $photo->update($request->all());
    
        return redirect()->route('photos.index')
                        ->with('success','Photo updated successfully');
    }
    
    public function destroy(Photo $photo)
    {
        $photo->delete();
    
        return redirect()->route('photos.index')
                        ->with('success','Photo deleted successfully');
    }
}
