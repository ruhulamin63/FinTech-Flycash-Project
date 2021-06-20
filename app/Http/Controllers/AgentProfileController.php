<?php

namespace App\Http\Controllers;

class AgentProfileController extends Controller
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
    public function edit()
    {
        return view('pages.agent.edit');
    }
}
