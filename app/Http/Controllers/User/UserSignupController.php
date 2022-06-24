<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Register;
use Session;
use Crypt;
class UserSignupController extends Controller
{
    public function register(Request $request){

        $request->validate(
            [
                'name' => 'required',
                'email'=>'required',
                'password'=>'required',
                'cpassword'=>'required|same:password'
            ]
            );

        $register = new Register;
        $register->name = $request['name'];
        $register->email = $request['email'];
        $register->password =Crypt::encrypt( $request['password']);
        $register->save();
        //$register->session()->put('register', $register->name = $request['name']);
        return view('welcome');

    }
    public function login(Request $request){

        $user = Register::where('email', $request['email'])->get();
        if(Crypt::decrypt($user[0]->password)==$request['password'])
        {
            $request->session()->put('user',$user[0]->name);
            return view('user.dashboard');
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    // public function destroy(){

    //     Auth::logout();
    //     // $request->session()->invalidate();
    //     // $request->session()->regenerateToken();
    //     return view('welcome');

    // }

}
