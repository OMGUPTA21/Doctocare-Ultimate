<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Category;

class ViewDoctorController extends Controller
{
    public function index(){

        $doctor = Doctor::all()->where('status',1);
        // $cat = $doctor->category;
        $data = compact('doctor');
        return view('admin.doctors')->with($data);
    }
}
