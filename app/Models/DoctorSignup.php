<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorSignup extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $primaryKey = 'id';

    public function schedule(){
        return $this->hasmany(Schedule::class);
    }
    public function doctor(){
        return $this->hasone(Doctor::class);
    }
    public function users(){
        return $this->belongsToMany(Register::class,'appointments');
    }
    
}

