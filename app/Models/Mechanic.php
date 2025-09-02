<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    
    // has one through relationship
    // public function carOwner( ) {
    //    return $this->hasOneThrough(
    //     Owner::class, Car::class,
    //     'mechanic_id',// optional if foreing id is like this
    //     'car_id',
    //     'id',
    //     'id'
    //    );
    // }
  // ############
    public function carOwner( ) {
        return $this->hasManyThrough(
         Owner::class, Car::class,
         'mechanic_id',// optional if foreing id is like this
         'car_id',
         'id',
         'id'
        );
     }
}
