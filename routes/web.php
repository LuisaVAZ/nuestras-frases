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

// Route::get('/', function () {
//     return view('welcome');

// });


//Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('phrase', PhraseController::class);

Route::get('/phrases.index', [PhraseController::class, 'index']);

Route::post('/phrase', [PhraseController::class, 'store'])->name('testing');