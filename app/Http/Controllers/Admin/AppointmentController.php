<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorSignup;
use App\Models\Doctor;
use App\Models\Appointments;

class AppointmentController extends Controller
{
    public function index(){
        // $app = Appointments::find($id)->all();
        // $data = compact('app');
        return view('admin.appointments');
    }
}
