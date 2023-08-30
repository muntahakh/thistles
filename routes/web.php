<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,AccountsController,QuestionsController};
use App\Http\Controllers\Auth\{ForgotPasswordController,ResetPasswordController,VerificationController};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home',[HomeController::class,'home'])->name('home'); #->middleware('guest.access');

Auth::routes(['verify' => true]);

Route::get('/eula', [HomeController::class,'eula'])->name('eula');

Route::get('/register',[AccountsController::class,'register'])->name('register');

Route::get('/signUp/confirm',[AccountsController::class,'signUp'])->name('signup');

Route::post('/signUp/confirm',[AccountsController::class,'signUp'])->name('signup');

Route::get('verification/resend', [AccountsController::class,'resendVerificationEmail'])
    ->name('resend.email');

Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verifyEmail'])
    ->name('verification.verify');

Route::get('/signUp/confirm/{userEmail}', function ($userEmail) {
    return view('auth.passwords.confirm', ['userEmail' => $userEmail]);
})->name('confirm');

Route::get('/signin',[AccountsController::class,'signin'] )->name('signin');

Route::get('/reset', [ForgotPasswordController::class,'resetPass'])->name('reset');

Route::get('/pass/reset/{id}/{hash}', [AccountsController::class,'pass_reset'])
    ->name('pass.reset');

Route::post('/pass/reset/newpassword', [AccountsController::class,'post_pass_reset'])
    ->name('post.pass.reset');

Route::get('/pass/reset/newpassword', [AccountsController::class,'post_pass_reset'])
    ->name('post.pass.reset');

Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

Route::get('/password/email', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email.get');

Route::get('/password/email/resend', [AccountsController::class,'resendPassEmail'])->name('resendpass.email');

Route::post('/index', [AccountsController::class,'login'])->name('homeAth1');

 Route::get('/index', [HomeController::class,'index'])->name('index');

Route::post('/update-profile-image{id}', [AccountsController::class, 'updateProfileImage'])->name('updateProfileImage');

Route::get('/logout', [AccountsController::class,'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

Route::get('/q1', [QuestionsController::class,'q1'])->name('q1');

Route::post('/q1/{id}', [QuestionsController::class,'bgInfo'])->name('backgroundinfo');

Route::post('/q2', [QuestionsController::class,'documents']);

Route::get('/q2', [QuestionsController::class,'q2'])->name('documents');

Route::get('/q3', [QuestionsController::class,'q3'])->name('q3');

Route::post('/q3', [QuestionsController::class,'short_term_goals'])->name('short_term_goals');

Route::get('/q4', [QuestionsController::class,'q4'])->name('q4');

Route::post('/q4', [QuestionsController::class,'long_term_goals'])->name('long_term_goals');

Route::get('/q5', [QuestionsController::class,'q5'])->name('q5');

Route::post('/q5', [QuestionsController::class,'metadata'])->name('metadata');

Route::get('/q6', [QuestionsController::class,'q6'])->name('q6');

Route::get('/q7', [QuestionsController::class,'q7'])->name('q7');

Route::get('/q8', [QuestionsController::class,'q8'])->name('q8');

Route::get('/q9', [QuestionsController::class,'q9'])->name('q9');

Route::get('/q10', [QuestionsController::class,'q10'])->name('q10');

Route::get('/q11', [QuestionsController::class,'q11'])->name('q11');

Route::get('/q12', [QuestionsController::class,'q12'])->name('q12');

Route::get('/q13', [QuestionsController::class,'q13'])->name('q13');

Route::get('/q14', [QuestionsController::class,'q14'])->name('q14');

Route::get('/q15', [QuestionsController::class,'q15'])->name('q15');

Route::get('/save_progress/{qno}', [AccountsController::class,'saveProgress'])->name('save_progress');

Route::get('/start_documentation', [AccountsController::class,'start_documentation'])->name('start_documentation');

Route::get('/compiled', [HomeController::class,'compiled'])->name('compiled');

Route::post('/compiled', [HomeController::class,'compiled'])->name('compiled');
});


Route::get('/upload-filee', function(){
    return view('upload-file');
});
