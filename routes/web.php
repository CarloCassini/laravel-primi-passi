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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

    $random = rand(0, 100);

    return view('home', compact('random'));
})->name('home');

Route::get('/joke', function () {

    $lista = [
        'mamma',
        'avvocato',
        'san nicola',
        'don rodrigo'
    ];

    $randomInd1 = rand(0, 3);

    $randomInd2 = rand(0, 3);

    return view('joke', compact('lista', 'randomInd1', 'randomInd2'));
})->name('joke');