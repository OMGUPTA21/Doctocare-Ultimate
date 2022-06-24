<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctor_profiles';
    protected $primarykey = 'id';

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
