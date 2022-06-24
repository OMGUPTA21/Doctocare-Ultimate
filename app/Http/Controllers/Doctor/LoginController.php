<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorSignup;
use Session;
use Crypt;
class LoginController extends Controller
{
    public function index(){
        return view ('doctor.login');
    }
    
}
