<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('user/store', [UserController::class, 'store']); //create

Route::get('user/list', [UserCOntroller::class, 'index']); //read

Route::get('user/update', [UserCOntroller::class, 'update']); //update
Route::get('user/delete', [UserCOntroller::class, 'delete']); //delete





