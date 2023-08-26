<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Hash;

class AccountsController extends Controller
{
    use RegistersUsers;

    public function confirmEmail()
    {
        return view('emails/custom_verify_email');
    }

    public function signUp(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
            'accept_agreement' =>  'required|accepted',
        ]);
        $accept_agreement = $request->has('accept_agreement');
        $user->accept_agreement = $accept_agreement;

        $user->save();

        $user->sendEmailVerificationNotification();

        return view('auth/passwords/confirm', ['userEmail' => $user -> email]);
    }

    public function resendVerificationEmail(Request $request){

        $user = User::whereNull('email_verified_at')->first();
        if($user){
            $user->sendEmailVerificationNotification();
            return back()->with('success' , " We sent your confirmation email again! ");
        }
        else{
            return redirect()->route('signin');
        }
    }

    public function resendPassEmail(Request $request){

        $userEmail = $request->userEmail;
        $user = User::where('email', $userEmail)->first();
        $user->sendResetLinkEmail();
        return back()->with('success' , " We sent your confirmation email again! ");
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

    public function pass_reset(Request $request , $id, $token)  {
        $user  = User::findOrFail($id);
        if($user->verification_token  == $token){

            return view('auth.passwords.newpassword',compact('user'));
        }
        else {
            return redirect()->route('signup')->with('error', 'URL is broken or Expired.');
        }
    }

    public function post_pass_reset(Request $request)  {
        $user  = User::findOrFail($request->userId);

        if($user->verification_token  == $request->token){

            if($request->password == $request->cnpassword){
                $user->password  = Hash::make($request->password);
                $user->save();

                return redirect()->route('signin');
            }
            else{
                return back()->with('error' , 'Passwords did not matched');
            }
        }
        else {
            return redirect()->route('signin')->with('error', 'URL is broken or Expired.');
        }
    }

    public function signin(){
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // dd(Auth::attempt($credentials));
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->email_verified_at !== 'null') {
                return view('homeAth');
            }
            else {
                return redirect()->route('signin')->with('error', 'Email not verified');
            }
        }
        else {
            return redirect()->route('signin')->with('error', 'Invalid ID or password');
        }
     }

     public function updateProfileImage(Request $request, $id){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5000',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('\Images'), $imageName);

            $user = User::where('id', $id)->update(['image' => $imageName]);


        }
         return redirect()->route('index');
        //  return redirect('/index');

     }

     public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
