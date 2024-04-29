<?php

use App\Http\Middleware\IsBasharUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TestingController;

    Route::get('/', function () {
        return view('welcome');
    });



    // CREATE FIRST ROUTE

    // POST Request
    Route::post('/NAME-HERE',function (){

    });

    // GET Request
//    Route::get('/hello',function (){
//    return view('hello');
//
//    });


    // GET Request
    Route::get('/hello',function (){
        $country = 'syria';
        $hobbies = ['art','design','coding'];
        return view('hello',['name' => 'Bashar'])->with('age', '22')->with('country', $country)->with('hobbies',$hobbies);

    });


// GET Request
    Route::get('/my-booking', [BookingController::class, 'myBooking'])->name('myBooking');

    Route::get('/my-testing/{name}', TestingController::class . '@myTesting')->middleware(IsBasharUser::class);


    Route::get('/sayhello/{name}',TestingController::class . '@sayWelcome')->middleware(IsBasharUser::class);

    Route::get('/login', TestingController::class . '@login');
