<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\RegRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){

        return view('register.register');
    }

    public function insert(Request $req){

        $users = new User;
       
       $users->name = $req->email;
       $users->email = $req->email;
       $users->password = $req->password;
       $users->phone = $req->phone;
       $users->nid = $req->nid;
       $users->dob = $req->dob;
       $users->type = $req->type;
       $users->save();

       return redirect('/login');
   }
}
