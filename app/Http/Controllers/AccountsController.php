<?php

namespace App\Http\Controllers;

use App\Models\{User,save_progress,Answers};
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AccountsController extends Controller
{
    use RegistersUsers;

    public function register(){
        if (auth()->check()) {
            return redirect('/userDetails');
        }
        else{
            return view('auth.register');
        }
    }

    public function signinWithGoogle(){
        // $user = Socialite::driver('google')->user();
        $user = Socialite::driver('google')->stateless()->user();
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            $existingUser->update([
                'name' => $user->name,
                'password' => null,
                'accept_agreement' => true,
                'image' => null,
                'url_image' => $user->avatar,
                'authentication_type' => 'google',
            ]);

        $user = $existingUser;

    } else {

        $user = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => null,
            'accept_agreement' => true,
            'image' => null,
            'url_image' => $user->avatar,
            'authentication_type' => 'google',
        ]);
    }

        Auth::login($user);

        return redirect('/userDetails');
    }

    public function confirmEmail()
    {
        return view('emails/custom_verify_email');
    }

    public function signUp(Request $request)
    {
        if (User::where('email', $request->email)->exists()) {
            return redirect()->back()->with('error', 'Email already exists.');
        }

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
        $user->authentication_type = $request->authentication_type;
        $user->accept_agreement = $accept_agreement;

        $user->save();

        $user->sendEmailVerificationNotification();

        return view('auth/passwords/confirm', ['userEmail' => $user->email]);
    }

    public function resendVerificationEmail(Request $request){

        $user = User::whereNull('email_verified_at')->first();

        if($user){
            $user->sendEmailVerificationNotification();

            return redirect()->route('confirm', ['userEmail' => $user->email])->with('success' , " We sent your confirmation email again! ");
        }
        else{
            return redirect()->route('signin');
        }
    }

    public function resendPassEmail(Request $request){

        $userEmail = $request->userEmail;
        $user = User::where('email', $userEmail)->first();
        return redirect()->route('password.email.get', ['email' =>  $request->userEmail ])->with('success' , 'We sent you password reset email again.');

    }

    public function resetSent(){
        return view('auth/passwords/resetSent');
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
            if (strlen($request->password) >= 8) {
                if($request->password == $request->cnpassword){
                    $user->password  = Hash::make($request->password);
                    $user->save();

                    return redirect()->route('signin')->with('success', 'Your password has changed.');
                }
                else{
                    return back()->with('error' , 'Passwords did not matched')->withInput();
                }
            }
            else{
                return back()->with('error' , 'Passwords must be atleast 8 characters')->withInput();
            }
        }
        else {
            return redirect()->route('signin')->with('error', 'URL is broken or Expired.');
        }
    }

    public function signin(){
        if (auth()->check()) {
            return redirect('/userDetails');
        }
        else{
            return view('auth.login');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->email_verified_at !== 'null') {
                return view('userDetails');
            }
            else {
                return redirect()->route('signin')->with('error', 'Please verify your email address.');
            }
        }
        else {
            return redirect()->route('signin')->with('error', 'Invalid ID or password');
        }
     }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function save_progress(Request $request){

        $user = Auth::user();
        $save_progress = save_progress::updateOrCreate(
            ['user_id' => $user->id ],
            [
                'current_route' => $request->currentUrl,
            ]);

        return redirect()->route('index')->with('success', 'Progress saved successfully');
    }

    public function start_documentation(){

        $user = Auth::user();
        $answer = Answers::where('user_id' , $user->id)->get()->toArray();
        $checkUserSaveProgressRoute = save_progress::where('user_id' , $user->id)->first();

        if($checkUserSaveProgressRoute){
            return redirect($checkUserSaveProgressRoute->current_route)->with('success', 'Saved progress loaded.');
        }
        else{
            return redirect()->route('start_documentation');
        }
    }


}
