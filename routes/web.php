<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Doctor\LoginController;
use App\Http\Controllers\Doctor\SignupController;
use App\Http\Controllers\Doctor\Dashboard;
use App\Http\Controllers\Doctor\CreateProfile;
use App\Http\Controllers\Doctor\DoctorsController;
use App\Http\Controllers\Doctor\DoctorsProfileController;
use App\Http\Controllers\Doctor\ScheduleController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\DoctorProfileController;
use App\Http\Controllers\User\UserSignupController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AddCategoryController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ViewDoctorController;
use App\Http\Controllers\Admin\ViewUserController;
use App\Http\Controllers\Common\AppointmnetBookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/doctor_login', [LoginController::class, 'index']);
Route::get('/doctor_signup', [SignupController::class, 'index']);

Route::post('/doc/signup', [SignupController::class, 'store']);
// Route::post('/doc/login',[SignupController::class,'login']);

Route::get('/doctor/dashboard/{id}', [Dashboard::class, 'index'])->name('doctor.dashboard');
Route::post('/register/{id}', [CreateProfile::class, 'store']);
Route::get('/create_profile', [CreateProfile::class, 'index']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/doctor/schedule/{id}',[ScheduleController::class, 'index']);

Route::get('/view_doctors/{id}', [DoctorsController::class, 'index']);
Route::get('/profile/{id}/{id2}', [DoctorProfileController::class, 'index']);
Route::post('/doctor/appointment/{id}/{uid}',[AppointmnetBookController::class,'store'])->name('doctor.appointment');
Route::post('/doctor/appointment/update/{id}',[AppointmnetBookController::class,'update'])->name('doctor.appointment.edit');

Route::get('/admin/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/add_category',[AddCategoryController::class,'index'])->name('admin.add_category');
Route::get('/admin/appoiontments',[AppointmentController::class,'index'])->name('admin.appoiontments');
Route::get('/admin/view_doctors',[ViewDoctorController::class,'index'])->name('admin.view_doctors');
Route::get('/admin/view_user',[ViewUserController::class,'index'])->name('admin.view_user');
Route::get('/', [WelcomeController::class, 'index']);
Route::post('/user/register',[UserSignupController::class,'register']);
Route::post('/user/login',[UserSignupController::class,'login']);
Route::post('/logout',[UserSignupController::class,'logout'])->name('logout');
Route::get('/abcd', function(){
    return view ('user.dashboard');
});
Route::post('doc/logout',[SignupController::class,'logout'])->name('doc.logout');






// Route::group(['middleware'=>'web'],function(){

// });


