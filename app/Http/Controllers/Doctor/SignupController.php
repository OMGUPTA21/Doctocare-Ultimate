<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DoctorSignup;
use Illuminate\Support\Facades\Auth;
use Session;
use Crypt;
class SignupController extends Controller
{
    public function index(){
        return view ('doctor.signup');
    }


    public function store(Request $request){
        $request->validate(
            [
                'email'=>'required',
                'pass'=>'required',
                'cpass'=>'required|same:pass'
            ]
        );

        $docsign = new DoctorSignup;
        $docsign->email = $request['email'];
        $docsign->password =Crypt::encrypt( $request['pass']);
        $docsign->save();
        return view('Doctor.login');


    }
    public function login(Request $request){
        $user =  DoctorSignup::where('email', $request['email'])->get();
        if(Crypt::decrypt($user[0]->password)==$request['pass'])
        {
            $request->session()->put('user',$user[0]->name);
            return view("Doctor.dashboard");
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
