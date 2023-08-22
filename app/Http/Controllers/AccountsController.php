<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class AccountsController extends Controller
{
    use RegistersUsers;

    public function confirmEmail()
    {
        return view('auth/passwords/email');
    }

    public function signUp(Request $request)
    {
        $user = new User;
        $user -> email = $request -> email;
        $user -> password = $request -> password;
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
            'accept_agreement' =>  'required|accepted',
        ]);
        $accept_agreement = $request->has('accept_agreement');
        $user->accept_agreement = $accept_agreement;

        //$user->save();
        $user = User::find(1);
        // dd($user);
        $user->sendEmailVerificationNotification();

        return view('auth/passwords/confirm', ['userEmail' => $user -> email]);
    }

    public function resendVerificationEmail(Request $request){
        if($request->user()->hasVerifiedEmail()){
            return redirect()->route('signin');
        }
        $request->user()->sendEmailVerificationNotification();
        return back()->with('success' , " We sent your confirmation email again! ");
    }

    public function emailVerification(EmailVerificationRequest $request) {
       // dd('check');
        $request->fulfill();

        return redirect()->route('signin');
    }

    public function login() {
        return view('auth/login');
    }

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
