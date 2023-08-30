<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //    $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }

    public function eula()
    {
        return view('eula');
    }

    public function compiled() {
        return view('documentCompiled');
    }

    public function index(){

        if (auth()->check()) {
            return view('homeAth');
        } else {
            return redirect()->route('signin');
        }
    }
}
