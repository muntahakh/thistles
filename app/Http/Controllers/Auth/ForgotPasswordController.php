<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
 use SendsPasswordResetEmails;

    public function resetPass(){
        return view('auth.passwords.reset');
    }

    public function sendResetLink(Request $request){


        $user = User::where('email', $request->email)->first();

        // dd($user);
        if($user){
            $user->sendResetLinkEmail();
            return view('auth/passwords/resetSent', ['userEmail' => $request->email]);
        } else {
            return back()->withErrors(['email' => 'We couldn\'t find a user with that email address.']);
        }
}
}
