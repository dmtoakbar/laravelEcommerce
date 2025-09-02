<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
   // ########## one to one relationship 
    // public function result() { // function name should be same as model name
    //     return $this->hasOne(Result::class);// relationship 

    // }
    // 3######### one to many relationship 
    public function result() { // function name should be same as model name
        return $this->hasMany(Result::class);// relationship 

    }

    // public function result() { // when primary id and foreign id colum diffrent (not id and student_id)
    //     return $this->hasMany(Result::class, 'foreign_key', 'local_key');// relationship 

    // }

    
}
