<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointments;

class AppointmnetBookController extends Controller
{
    public function index(){

    }
    public function store(Request $request,$id,$uid){
        $appointment = new Appointments;
        $appointment->doctor_id = $id;
        $appointment->user_id = $uid;
        $appointment->patient_name = $request['name'];
        $appointment->age = $request['age'];
        $appointment->visiting_time = $request['time'];
        $appointment->fees = $request['fees'];
        $appointment->save();

        return view('user.dashboard');
    }
    public function update(Request $request,$id){
        $status = Appointments::where('id',$id)->get();
        $status->status = $request['checked'];
        $status->save();
        return view('user.dashboard');
    }
}
