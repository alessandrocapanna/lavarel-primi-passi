<?php

use Illuminate\Support\Facades\Route;

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
    return view('home-page');
})->name('home-page');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/domande', function () {
  $faqsBefore = config('domande.faqsBefore');
  $faqsAfter = config('domande.faqsAfter');
    return view('domande', [
      'faqsListBefore' => $faqsBefore,
      'faqsListAfter' => $faqsAfter
    ]);
})->name('domande');
