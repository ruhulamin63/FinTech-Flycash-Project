<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function tran()
    {
        return view('transection.tran');
    }
}