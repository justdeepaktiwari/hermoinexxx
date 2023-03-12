<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CategoryAndTagController extends Controller
{

    public function index()
    {
        $categories = Category::get();
        $tags = Tag::get();

        return view("admin.categories.index", compact("categories", "tags"));
    }
    
    public function categoryCreate()
    {
        return view("admin.categories.create-category");
    }

    public function categoryStore(Request $request)
    {
        Category::create($request->all());
        return redirect()->route("category-tag.index")->with("Success", "Category created successfully");
    }

    public function categoryEdit($id)
    {
        $category = Category::where("id", $id)->first();
        // dd($category);
        return view("admin.categories.edit-category", compact('category'));
    }

    public function categoryUpdate($id, Request $request)
    {
        $category = new Category;
        $category->where("id", $id)->update(["name"=>$request->name]);

        return redirect()->route("category-tag.index")->with("Success", "Updated data successfully");
    }

    public function categoryDestroy(Category $category, Request $request)
    {
        $category->where("id", $request->id)->delete();
        return back()->with("Success", "Category Deleted SuccessFully");
    }

    public function tagCreate()
    {
        return view("admin.categories.create-tag");
    }

    public function tagStore(Request $request)
    {
        Tag::create($request->all());
        return redirect()->route("category-tag.index")->with("Success", "Category created successfully");
    }

    public function tagEdit($id)
    {
        $tag = Tag::where("id", $id)->first();
        return view("admin.categories.edit-tag", compact('tag'));
    }

    public function tagUpdate($id, Request $request)
    {
        $tag = new Tag;
        $tag->where("id", $id)->update(["name"=>$request->name]);

        return redirect()->route("category-tag.index")->with("Success", "Updated data successfully");
    }

    public function tagDestroy(Tag $tag, Request $request)
    {
        $tag->where("id", $request->id)->delete();
        return back()->with("Success", "Category Deleted SuccessFully");
    }
}
