<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index(){
        //if we need all data
        $users = User::all();
        return view('user-list', compact('users'));

        //if we need data with filtered
        // $user = User::get();
    }


    public function store(){
        $user = new User();
        $user->name = "User 3";
        $user->email = "user13@gmail.com";
        $user->password = "User@3";
        $user->gender = "Male";
        $user->mobile = 123456789;
        $user->address = "Peshawar";
        $user->is_active = 1;
        $user->save();
        dd("User inserted Successfully.");

    }
}
