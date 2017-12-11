<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getUser(){

    	$user = User::all();
    	return view('user.user',['user'=>$user]);
    }
}
