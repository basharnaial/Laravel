<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    function myTesting(Request $request){
        return $request->all();
    }

    function sayHello(Request $request, $n){
        $isAuthenticated = true;
        if($n === "bashar"){
            $isAuthenticated = true;
        }else{
            $isAuthenticated = false;
        }
        if($isAuthenticated){
            return response()->json(["data" => ["name" => $n]]);
        }else{
              return redirect('/login');
              // return back();
        }
    }
    function sayWelcome(Request $request, $n){

        return "You're Authorized";
//        $isAuthenticated = true;
//        if($n === "bashar"){
//            $isAuthenticated = true;
//        }else{
//            $isAuthenticated = false;
//        }
//        if($isAuthenticated){
//            return response()->json(["data" => ["name" => $n]]);
//        }else{
//            return response()->json(["error" => "Not Authenticated"], 401);
            // return redirect('/login');
         // return back();
//        }
    }


    function login(){
    return "<h1> login page </h1>";
    }


//    private function isLoggedIn($n){
//                $isAuthenticated = true;
//        if($n === "bashar"){
//            $isAuthenticated = true;
//        }else{
//    $isAuthenticated = false;
//}
//
//}


}
