<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test_app;
use App\Http\Controllers\authController;


//public
Route::post('/register',[authController::class,'register']);
Route::post('/login',[authController::class,'login']);
Route::get('/product',[test_app::class,'index']);
Route::get('/product/{id}',[test_app::class,'show']);
Route::get('/product/search/{name}',[test_app::class,'search']);


//protected
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::post('/product',[test_app::class,'store']);
    Route::put('/product/{id}',[test_app::class,'update']);
    Route::delete('/product/{id}',[test_app::class,'destroy']);
    Route::post('/logout',[authController::class,'logout']);



});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
