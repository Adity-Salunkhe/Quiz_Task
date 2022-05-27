<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('mainpage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/startQuiz', [App\Http\Controllers\Controller::class, 'start'])->name('start');
// Route::post('/startQuiz', [App\Http\Controllers\Controller::class, 'started'])->name('startQuiz');

Route::get('/question1', [App\Http\Controllers\Controller::class, 'q1'])->name('q1');
Route::post('/question1', [App\Http\Controllers\Controller::class, 'q_1'])->name('ques');

// Route::get('/answerDesk', function () {
//     return view('answerDesk');
// });

// Route::get('/questions', function () {
//     return view('questions');
// });
// Route::any('questions', function () {
//     return view('questions');
// });
Route::any('/start', function () {
    return view('start');
});
Route::any('/endpage', function () {
    return view('endpage');
});
Route::any('/startpage', function () {
    return view('startpage');
});
Route::any('submitans',[App\Http\Controllers\Question::class,'submitans']);
Route::any('previous',[App\Http\Controllers\Question::class,'previous']);
Route::any('startquiz',[App\Http\Controllers\Question::class,'startquiz']);
Route::any('add',[App\Http\Controllers\Question::class,'add']);
Route::any('delete',[App\Http\Controllers\Question::class,'delete']);
Route::any('update',[App\Http\Controllers\Question::class,'update']);
Route::any('questions',[App\Http\Controllers\Question::class,'show']);
Route::any('/mainpage', [App\Http\Controllers\Question::class,'main']);
Route::any('/endpage', [App\Http\Controllers\Question::class,'result']);

