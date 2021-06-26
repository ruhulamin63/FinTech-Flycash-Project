<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\Communication;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(UserRequest $req){
        //dd($req); //this line for debug for this code
        
        $user = Communication::where('email',$req->email)
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
