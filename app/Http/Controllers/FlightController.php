<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use App\Models\User;
use App\Models\Student;
use App\Models\Result;

class FlightController extends Controller
{
  function flight() {

    
       //$flight = Flight::all();

      // #####################
       // ad select query is used as foreign key 

    //    $flight = Flight::addSelect(['any_name' => User::select('name')->whereColumn('email', 'users.email')])->get();
    //    dd($flight);

    //#########
    // findOrFail and firstOrFail method they throw not found if data is not found
    //$flight = Flight::findOrFail(2);// it is better for edit form
    //$flight = Flight::where('primary_id', 2)->firstOrFail();// it work  same  as findorfail

    //#####3####firstOrcreate method#########3
    //$flight = Flight::firstOrCreate(['name'=> 'amit']);// we provide some condion if data is present then it give us ortherwise it will create it
    // $flight = Flight::firstOrCreate(['name'=> 'amit'],['email'=> 'ami2@gmail.com', 'password'=>889]);
     
    //    dd($flight);

    //########################## aggregates function in laravel (sum, min, max, count, avg)
    //  $flight = Flight::where('name', 'amit')->count();
    // $flight = Flight::max('primary_id');
    // $flight = Flight::sum('primary_id'); 
    // $flight = Flight::avg('primary_id');
    //  dd($flight);
    //###########################3 isdirty and isclean method ######################3
    // $flight = Flight::create([
    //     'name'=>'kumar verma',
    //     'email'=>'kumarverma@kumarverma.com',
    //     'password'=>321321
    // ]);
    // $flight->name = 'verma check';
    // //dd( $flight->isDirty()); // it will check anyvalue is changed if change then it print 1 or true 
    // dd( $flight->isDirty('email'));// check particular field
    // // isClean is just opposite of isDirty method

       // ##########################################

/*
       // chunk and cursor method is used when we want to huage amount of data from server
$flight = Flight::chunk(1000, function ($data) {
    foreach($data as $getData){
        echo $getData;
    }
} );// first parameter is indicating number of data or row
             exit();

             */



             // chursor method
              /*
             foreach(Flight::where('primary_id', '<', '5')->cursor() as $data) {
                echo $data;
             }
             exit();
             */

             // addselect query
            

       //######################################


    //$flight = Flight::get();// we can apply condition here
    //$flight = Flight::where('name', 'amit')->get();
       //return $flight;
        // return view('orm_practice.flight', ['flight'=>$flight]);

        // find method to retrieve  single row data and in this we pass id directley
        /*
        $flight = Flight::find(1);
        // dd method to print data
        dd($flight);
        */

        // first method return first row if condition is satisfied
        //$flight = Flight::first();// it will print first 
        // $flight = Flight::where('email', 'dmtoakbar@gmail.com')->first();

        // $flight = Flight::firstWhere('email', 'dmtoakbar@gmail.com');// work same as above
        // // dd method to print data
        // dd($flight);

        //return view("orm_practice.flight", compact('flight'));

        //********************** {{ learning relationship by using results and students table }}  ************
        // #################### one to one relation ###################
        //$student = Student::find(1);
        //dd($student);
        
        //dd($student->result);// to access result table data in one to one relation
        // $student = Student::get();
        // //dd($student);
        // dd($student[0]->result);
        // $student = Student::with('result')->get();
        // dd($student);
       // getting data from inverse relation ship
    //    $result=Result::get();
    //    dd($result[0]->student);
    // 3#3###3#3##3  one to many relationship ##3###3
    $student = Student::find(2);
     dd($student->result);




    }

    function store(Request $req) {

        // this is called save method
        /*
        $flight = new Flight;
        $flight->primary_id=2;
        $flight->name=$req->name;
        $flight->email=$req->email;
        $flight->password=$req->password;
        $flight->save();
         */
        // this is called create method and it is use mass data insertion and if id is not uuto incremened then it should have nullable or default value

        $data = array(
         'primary_id'=>90,
         'name'=>$req->name,
         'email'=>$req->email,
         'password'=>$req->password
        );
        Flight::create($data);
        return redirect()->back();
    }

    function delete(Request $req) {
        $id = $req->id;
         $flight = Flight::find($id)->delete();
        // $flight = Flight::destroy($id);
        //$flight = Flight::destroy(2, 5);// to delete multiple row

        return redirect()->back();
    }

    function edit(Request $req) {
        $id = $req->id;
        $flight = Flight::find($id);
        return view("orm_practice.flightedit", compact('flight'));
    }

    function update(Request $req) {
        $id = $req->id;
        // print($id);
        // $data = array(
        //     'name'=>$req->name,
        //     'email'=>$req->email,
        //     'password'=>$req->password
        //    );
        // Flight::where('primary_id', $id)->update($data);

        // save method

        $flight = Flight::find($id);
        $flight->name=$req->name;
        $flight->email=$req->email;
        $flight->password=$req->password;
        $flight->save();
        return redirect()->route('flight');
    }



    // add and update by one method

    // show form
    function showForm(Request $req) {
        $id = $req->id;
        $flight = new Flight;
        if($id){
           $flight = Flight::find($id);
        }
       return view('orm_practice.create_update_one', compact('flight'));
   }
    function addAndUpdate(Request $req) {
         $id = $req->id;
         $flight = new Flight;
         if($id){
            $flight = Flight::find($id);
         }
         $data = array(
                //'primary_id'=>$id// for only upsert method , 
                'name'=>$req->name,
                'email'=>$req->email,
                'password'=>$req->password
        );
        Flight::updateOrCreate(['primary_id'=> $id], $data);
        //Flight::upsert($data, ['primary_id'], ['name'])// give data and a unique or primary column , after column that will change applied on that column
        return redirect()->route('flight');
    }




}
