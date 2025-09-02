<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\PostController;


Route::get('/login', function () {
    return view('login');
});
// Route::get('/register', function () {
//     return view('register');
// });
Route::view('/register', 'register');
Route::post("/login", [UserController::class, 'login']);
Route::post("/register", [UserController::class, 'register']);
Route::get("/", [ProductController::class, 'index'])->name('home');
Route::get("detail/{id}", [ProductController::class, 'detail']);
Route::post("/add_to_cart", [ProductController::class, 'addToCart']);
Route::get('/logout', function() {
    Session::forget('user');
return redirect('login');
});
Route::get('/cartlist', [ProductController::class, 'cartList']);
Route::get('/removecart/{id}', [ProductController::class, 'removeCart']);
Route::get('/ordernow', [ProductController::class, 'orderNow']);
Route::post('/orderplace', [ProductController::class, 'orderPlace']);
Route::get('/myorders', [ProductController::class, 'myOrders']);


// orm practice
Route::get('/flight', [FlightController::class, 'flight'] )->name('flight');
Route::post('/flight', [FlightController::class, 'store'] );
Route::get('/delete/{id?}', [FlightController::class, 'delete'] )->name('flight.delete');// ? it show id is optional
Route::get('/edit/{id?}', [FlightController::class, 'edit'] )->name('flight.edit');// ? it show id is optional
Route::post('/update/{id?}', [FlightController::class, 'update'] )->name('flight.update');

// add and update by one metho
Route::post('flight/add/update/{id?}', [FlightController::class, 'addAndUpdate'])->name('flight.add.update');
Route::get('flight/add/update/{id?}', [FlightController::class, 'showForm'])->name('show.form');

// relationship 
Route::get('relationship/{id?}', [StudentController::class, 'index'])->name('relationship');
Route::get('mechanic/{id?}', [MechanicController::class, 'index'])->name('mechanic');
Route::get('post/{id?}', [PostController::class, 'index'])->name('post');