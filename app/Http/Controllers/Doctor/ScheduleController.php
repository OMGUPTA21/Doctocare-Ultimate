<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedules;
use App\Models\DoctorSignup;

class ScheduleController extends Controller
{
    public function index(Request $request,$id){
        // $doc = DoctorSignup::find($id);
        $schedule = new Schedules;
        $schedule->doctor_id = $id;
        $schedule->timing = $request['schedule'];
        // $doc->schedule()->save($schedule);
        $schedule->save();
        return view('Doctor.dashboard');
    }
}
