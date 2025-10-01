<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PlanoController;


Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'dashboard'],function(){
  Route::get("/",function(){
  return view('admin.dashboard'); 
  });

  Route::get("/users",[UsersController::class,'getUsers']);
  Route::get("/planos",[PlanoController::class,'getPlanos']);
   Route::POST("/planos",[PlanoController::class,'createPlanos']);
 
 
});