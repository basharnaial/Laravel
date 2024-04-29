<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/hello", function(){
    return "hello api";
});
Route::post("/hello", function(Request $request){
    $name = $request->input("name");
    return response()->json(["message" => "hello $name"]);
});
Route::delete("/hello", function(){
    //    return $request->all();
    return response()->json(["data" => "delete request for hello endpoint"]);
});
Route::put("/hello", function(){
    return response()->json(["data" => "put request for hello endpoint"]);
});
Route::patch("/hello", function(){
    return response()->json(["data" => "patch request for hello endpoint"]);
});



Route::post('/createRandomUser', UserController::class.'@createRandomUser');

Route::post('/createArticle', ArticleController::class.'@createArticle');
Route::get('/getArticles', ArticleController::class.'@getArticle');

Route::get('/getArticle/{id}', ArticleController::class.'@getArticle');

Route::delete('/deleteArticle/{id}', ArticleController::class.'@deleteArticle');
Route::put('/updateArticle/{id}', ArticleController::class.'@updateArticle');
