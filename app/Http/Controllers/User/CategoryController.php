<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $category = Category::all();
        $data= compact('category');
        return view('user.category')->with($data);
    }

    public function store(Request $request){


        $category = new Category;
        $category->category_name =$request['category_name'];
        $category->cat_description = $request['cat_description'];
        if($request->hasfile('cat_image')){
            $file = $request->file('cat_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'-cat.'.$extension;
            $file->move('uploads/category/',$filename);
            $category->cat_image = $filename;
        }
        $category->save();

        return view('admin.addCategory');
    }
}

