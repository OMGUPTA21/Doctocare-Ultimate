<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorSignup;
use App\Models\Doctor;
use App\Models\Appointments;

class Dashboard extends Controller
{
    public function index($id){

        $app = Appointments::find($id)->all();

        // $profile = $doc->doctor;
        // $schedule = $doc->schedule;
        // $appointments = $doc->users;
        $data = compact('app');
        // $appointment = $doc->;
        return view ('Doctor.dashboard')->with($data);
    }
}
