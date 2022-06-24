<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Category;
use App\Models\Schedules;

class DoctorProfileController extends Controller
{
    public function index($id2){
        // $doc = Doctor::where('doctor_id',$id2)->with('category')->get();
        $doctor = Doctor::find($id2);
        $cat = $doctor->category;
        // $schedule = Schedules::find($id2);
        $data = compact('doctor','cat');
        // $category = Category::where('category_id',$id)->get();
        // $data2 = compact('category');
        return view('user.doc_profile')->with($data);
    }
}
