<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;


class AccountsController extends Controller
{

    public function signUp(Request $request)
    {
        return Redirect::route('confirm');
    }

    public function confirm()
    {
        return view('auth/passwords/confirm');
    }

    public function confirmEmail()
    {
        return view('auth/passwords/email');
    }

    public function login() {
        return view('auth/login');
    }

    // public function verify(Request $request)
    // {
    // // Perform verification logic
    // // If verification successful
    //     return redirect()->route('confirm.success');
    // }

    public function confirmSuccess()
    {
        return view('auth/passwords/confirmSuccess');
    }

    public function resetPass(){
        return view('auth/passwords/reset');
    }

    public function resetSent(){
        return view('auth/passwords/resetSent');
    }

    public function resetEmail() {
        return view('auth/passwords/resetEmail');
    }

    public function newPass() {
        return view('auth/passwords/newpassword');
    }

}
