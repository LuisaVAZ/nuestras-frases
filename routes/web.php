<?php

use App\Http\Controllers\PhraseController;
//use App\Http\Controllers\PhrasesController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\PhrasesController;



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

Route::get('/', function () {
     return view('welcome');
});

//Route::get('/', [PhrasesController::class,'index'])->name('home');

Route::resource('phrase', PhraseController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
