<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserdetailsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function details()
    {
        return view('userdetails.details');
    }
}
