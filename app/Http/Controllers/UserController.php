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
       
        // den view info trong folder user, truyen theo bien reply
    	return redirect()->route('user.info', ['reply'=>$reply]);
    }

    // public function getInfo(){
    //     return view('user.info');
    // }

    // show view info va nhan bien reply
    public function show(Request $r){
        $reply = $r->reply;
        return view('user.info',['reply'=>$reply]);
    }

    public function postInfo(Request $r){

        $email = User::where('Email',$r->email)->get();

        if($email->isEmpty()){

            $user = new User;
            $user->Nom = $r->last_name;
            $user->Prenom = $r->first_name;
            $user->Email = $r->email;
            $user->Reply = $r->reply;

            $user->save();
            return redirect('question')->with('notification','success');
        }

        return redirect('user/info')->with('notification','error');
        
    }
}
