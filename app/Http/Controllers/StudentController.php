<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\User;
use App\Models\Student;
use App\Models\Result;


class StudentController extends Controller
{
    

    public function index(Request $req) {
        $student = Student::all();
        return view("orm_practice.relationship", compact('student'));
    }

}
