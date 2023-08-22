<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController,AccountsController,QuestionsController};

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

Auth::routes(['verify' => true]);

Route::get('/eula', [HomeController::class,'eula'])->name('eula');

Route::get('/signUp/confirm',[AccountsController::class,'signUp'])->name('signup');

Route::post('/signUp/confirm',[AccountsController::class,'signUp'])->name('signup');

Route::get('/email', [AccountsController::class,'confirmEmail'])->name('email');

Route::get('verification/resend', [AccountsController::class,'resendVerificationEmail'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('resend.email');

Route::get('/email/verify/{id}/{hash}', [AccountsController::class,'emailVerification'])

    ->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/signin',[AccountsController::class,'login'] )->name('signin');

Route::post('/signin',[AccountsController::class,'login'] )->name('signin');

Route::get('/reset', [AccountsController::class,'resetPass'])->name('reset');

Route::post('/resetSent', [AccountsController::class,'resetSent'])->name('resetSent');

Route::get('/resetSent', [AccountsController::class,'resetSent'])->name('resetSent');

Route::get('/resetEmail', [AccountsController::class,'resetEmail'])->name('resetpass.email');

Route::get('/newPassword', [AccountsController::class,'newpass'])->name('new.password');

Route::post('/newPassword', [AccountsController::class,'newpass'])->name('new.password');

Route::post('/index', [HomeController::class,'index']);

Route::get('/index', [HomeController::class,'index'])->name('homeAth');

Route::get('/q1', [QuestionsController::class,'q1'])->name('q1');

Route::post('/q1', [QuestionsController::class,'q1'])->name('q1');

Route::get('/q2', [QuestionsController::class,'q2'])->name('q2');

Route::post('/q2', [QuestionsController::class,'q2'])->name('q2');

Route::get('/q3', [QuestionsController::class,'q3'])->name('q3');

Route::post('/q3', [QuestionsController::class,'q3'])->name('q3');

Route::get('/q4', [QuestionsController::class,'q4'])->name('q4');

Route::post('/q4', [QuestionsController::class,'q4'])->name('q4');

Route::get('/q5', [QuestionsController::class,'q5'])->name('q5');

Route::post('/q5', [QuestionsController::class,'q5'])->name('q5');

Route::get('/q6', [QuestionsController::class,'q6'])->name('q6');

Route::post('/q6', [QuestionsController::class,'q6'])->name('q6');

Route::get('/q7', [QuestionsController::class,'q7'])->name('q7');

Route::post('/q7', [QuestionsController::class,'q7'])->name('q7');

Route::get('/q8', [QuestionsController::class,'q8'])->name('q8');

Route::post('/q8', [QuestionsController::class,'q8'])->name('q8');

Route::get('/q9', [QuestionsController::class,'q9'])->name('q9');

Route::post('/q9', [QuestionsController::class,'q9'])->name('q9');

Route::get('/q10', [QuestionsController::class,'q10'])->name('q10');

Route::post('/q10', [QuestionsController::class,'q10'])->name('q10');

Route::get('/q11', [QuestionsController::class,'q11'])->name('q11');

Route::post('/q11', [QuestionsController::class,'q11'])->name('q11');

Route::get('/q12', [QuestionsController::class,'q12'])->name('q12');

Route::post('/q12', [QuestionsController::class,'q12'])->name('q12');

Route::get('/q13', [QuestionsController::class,'q13'])->name('q13');

Route::post('/q13', [QuestionsController::class,'q13'])->name('q13');

Route::get('/q14', [QuestionsController::class,'q14'])->name('q14');

Route::post('/q14', [QuestionsController::class,'q14'])->name('q14');

Route::get('/q15', [QuestionsController::class,'q15'])->name('q15');

Route::post('/q15', [QuestionsController::class,'q15'])->name('q15');

Route::get('/compiled', [HomeController::class,'compiled'])->name('compiled');

Route::post('/compiled', [HomeController::class,'compiled'])->name('compiled');
