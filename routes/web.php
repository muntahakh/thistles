<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{Controller,HomeController,AccountsController,QuestionsController};
use App\Http\Controllers\Auth\{ForgotPasswordController,ResetPasswordController,VerificationController};
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('test',[Controller::class,'backUrl']);

Route::get('/next/{head_sq}/question/{question_sq}',[QuestionsController::class,'getQuestions']);




Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/auth/callback', [AccountsController::class,'signinWithGoogle']);

Auth::routes(['verify' => true]);

Route::get('/eula', [HomeController::class,'eula'])->name('eula');

Route::get('/register',[AccountsController::class,'register'])->name('register')->middleware('guest');

Route::get('/signUp/confirm',[AccountsController::class,'signUp'])->name('signup')->middleware('guest');

Route::post('/signUp/confirm',[AccountsController::class,'signUp'])->name('signup')->middleware('guest');

Route::get('verification/resend', [AccountsController::class,'resendVerificationEmail'])
    ->name('resend.email');

Route::get('/email/verify/{id}/{hash}', [VerificationController::class,'verifyEmail'])
    ->name('verification.verify');

Route::get('/signUp/confirm/{userEmail}', function ($userEmail) {
    return view('auth.passwords.confirm', ['userEmail' => $userEmail]);
})->name('confirm');

Route::get('/signin',[AccountsController::class,'signin'] )->name('signin')->middleware('guest');

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

Route::get('/introPages', function(){
    return view('introPage');
})->name('intro.page');

Route::get('/getQuestions',[QuestionsController::class,'getQuestions'])->name('start_documentation');

Route::get('/next/{head_sq}/question/{question_sq}',[QuestionsController::class,'Questions'])->name('questions');

Route::get('/heading/{head_sq}/question/{question_sq}',[QuestionsController::class,'QuestionsLoop'])->name('questions_loop');

Route::post('/questions/submit/', [QuestionsController::class,'submitAnswers'])->name('questions.submit');

Route::get('/getschedule', [QuestionsController::class,'getSchedule'])->name('get.schedule');

Route::post('/addschedule/', [QuestionsController::class,'addSchedule'])->name('add.schedule');

Route::get('/addSupport/{day}/{dayKey}', [QuestionsController::class,'addSupportDay'])->name('add.support');

Route::post('/getSupport/day', [QuestionsController::class,'getSupportDay'])->name('get.support');

Route::get('/showSchedule/{dayKey}', [QuestionsController::class,'showSchedule'])->name('show.schedule');

Route::get('/deleteSchedule/{id}', [QuestionsController::class,'deleteSchedule'])->name('delete.schedule');

Route::get('skipSection/', [QuestionsController::class,'skipSection'])->name('skip.section');

Route::get('optionsModification/{questionId}/{head_sq}/{question_sq}', [QuestionsController::class,'optionsModification'])->name('options.modification');

Route::get('questionModifications/{questionId}/{headingId}/{head_sq}/{question_sq}', [QuestionsController::class,'questionsModifications'])->name('questions.modifications');

Route::get('replacementModifications/{questionId}/{headingId}/{head_sq}/{question_sq}', [QuestionsController::class,'ReplacementModifications'])->name('replacement.modifications');

Route::get('costSequence/{questionId}/{headingId}/{head_sq}/{question_sq}', [QuestionsController::class,'questionsAccToCost'])->name('cost.sequence');

Route::post('/saveprogress', [AccountsController::class,'save_progress'])->name('save_progress');

Route::get('/start_documentation', [AccountsController::class,'start_documentation'])->name('save_progress_start');

Route::get('/userDetails',[HomeController::class,'userDetails'])->name('userDetails');

Route::get('/askToChatGPT',[HomeController::class,'ask'])->name('ask');

Route::get('/compiled', [HomeController::class,'compiled'])->name('compiled');

Route::post('/compiled', [HomeController::class,'compiled'])->name('compiled');
});

