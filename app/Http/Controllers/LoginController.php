<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\RegRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function index(){

        return view('login.login');
    }

    public function verify(Request $req){
        //dd($req); //this line for debug for this code
    
        $user = User::where('email',$req->email)
            ->where('password',$req->password)
            ->first();
            
        if($user){
            $req->session()->put('email',$req->email);
            return redirect('/home');
        }else{
            return redirect('/login');
        } 
    }
}
