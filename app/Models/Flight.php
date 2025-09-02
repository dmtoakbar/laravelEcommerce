<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    // when table is difffent from model name (like my_flights nor flights)
    protected $table="my_flights";
    
    // when inseting mass row at a time 
    protected $guarded=['primary_id']; // ['id'] if this primary id



    //  when inseting mass row at a time 
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    // when primary id is defferent (not ['id'])
    protected $primaryKey="primary_id";
    public $incrementing = 'false'; // primary key  will not be auto incremented
    
    public $timestamps=false;// auto on created and on updated filled will not work
    //const CREATED_AT='creation_date';// if we want change at_created name field
    const UPDATED_AT = null;// when you don't want to use created_at and update_at column
    
    protected $attributes = [ 
    //'name' => 'default name',
    'email' => 'admin@admin.com',
    'password' => 4892983423249
    ];

        
}
