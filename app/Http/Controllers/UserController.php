<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function getQuestion(){
    	return view('user.question');
    }

    public function postQuestion(Request $r){
    	
    	$reply = $r->question;
       
    	return redirect('info')->with('reply',$reply);

    }

    public function getInfo(){
        return view('user.info');
    }
}
