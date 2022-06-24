<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Category;

class CreateProfile extends Controller
{
    public function index(){
        $category = Category::all();
        $data = compact('category');
        return view ('Doctor.addForm')->with($data);
    }

    public function store(Request $request,$id){

        // $request->validate(
        //     [
        //         'name' => 'required',
        //         'email' => 'required|email',
        //         'number' => 'required',
        //         'experience' => 'required',
        //         'category_id' => 'required',
        //         'profile_photo' => 'required',
        //         'addhar_number' => 'required',
        //         'addhar_phpto' => 'required',
        //         'lisence_no' => 'required',
        //         'lisence_photo' => 'required',
        //         'prescription' => 'required',
        //         'fees' => 'required',
        //     ]
        // );

        $doctor = new Doctor;
        $doctor->doctor_id = $id;
        $doctor->name = $request['name'];
        $doctor->email = $request['email'];
        $doctor->number = $request['number'];
        $doctor->experience = $request['experience'];
        $doctor->category_id = $request['category_id'];
        if($request->hasfile('profile_photo')){
            $profile = $request->file('profile_photo');
            $pextension = $profile->getClientOriginalExtension();
            $profilename = time().'-profile.'.$pextension;
            $profile->move('uploads/doctor/profileImage',$profilename);
            $doctor->profile_photo = $profilename;
        }
        $doctor->addhar_number = $request['addhar_number'];
        if($request->hasfile('addhar_photo')){
            $addhar = $request->file('addhar_photo');
            $addharextension = $addhar->getClientOriginalExtension();
            $addharname = time().'-addhar.'.$addharextension;
            $addhar->move('uploads/doctor/addhar',$addharname);
            $doctor->addhar_photo = $addharname;
        }
        $doctor->lisence_no = $request['lisence_no'];
        if($request->hasfile('lisence_photo')){
            $lisence = $request->file('lisence_photo');
            $lisenceextension = $lisence->getClientOriginalExtension();
            $lisencename = time().'-lisence.'.$lisenceextension;
            $lisence->move('uploads/doctor/lisence',$lisencename);
            $doctor->lisence_photo = $lisencename;
        }
        if($request->hasfile('prescription')){
            $prescription = $request->file('prescription');
            $prescriptionextension = $prescription->getClientOriginalExtension();
            $prescriptionname = time().'-prescription.'.$prescriptionextension;
            $prescription->move('uploads/doctor/prescription',$prescriptionname);
            $doctor->prescription = $prescriptionname;
        }
        $doctor->address = $request['address'];
        $doctor->description = $request['description'];
        $doctor->fees = $request['fees'];
        $doctor->save();
        return view ('Doctor.dashboard');
    }
}
