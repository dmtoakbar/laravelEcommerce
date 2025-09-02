<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mechanic;

class MechanicController extends Controller
{
    public function index(Request $req) {
       $mechanic = Mechanic::with('carOwner')->get();
       dd($mechanic);
        return view("orm_practice.mechanic" );
    }

}
