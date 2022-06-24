<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $table = 'schedules';
    protected $primarykey = 'id';

    public function doctorsignup(){
        return $this->belongsto(DoctorSignup::class);
    }
}
