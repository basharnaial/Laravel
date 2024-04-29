<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function createRandomUser(Request $request){
         $user = User::create([
             "name" => "Bashar",
             "email" => "bashar2@etmaam.com.sa",
             "password" => 123456789
         ]);
        return $user;
    }
}
