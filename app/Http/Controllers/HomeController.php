<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $this->middleware('auth');
      return view('uploads');
    }

    public function homepage()
    {
      return view('index');
    }

    public function logout (){
      $this->middleware('auth');
      Auth::logout();
      return redirect('/');
    }
}
