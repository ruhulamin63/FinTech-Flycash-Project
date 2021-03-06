<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\RegRequest;
use App\Models\Officer;

class RegisterController extends Controller
{
    public function index(){

        return view('register.register');
    }

    public function insert(RegRequest $req){

        $users = new Officer;
       
       $users->name = $req->name;
       $users->email = $req->email;
       $users->password = $req->password;
       $users->phone = $req->phone;
       $users->nid = $req->nid;
       $users->dob = $req->dob;
       $users->image='null';
       $users->type = $req->type;
       $users->save();

       return back()->with('register',"Register Successfully");
   }
}
