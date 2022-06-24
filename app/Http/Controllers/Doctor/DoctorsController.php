<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Category;

class DoctorsController extends Controller
{
    public function index($id){

        $doctor = Category::find($id)->doctor->where('status',1);
        $data = compact('doctor');
        return view ('user.doc_card_profile')->with($data);
    }
}
