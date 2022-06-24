<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AddCategoryController extends Controller
{
    public function index(){

        $category = Category::all();
        $data = compact('category');
        return view('admin.addCategory')->with($data);
    }
}
