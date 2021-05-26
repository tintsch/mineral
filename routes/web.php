<?php

use Illuminate\Support\Facades\Route;
use App\Models\Mineral;
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

Route::get('minerals', function () {
    $minerals = Mineral::all();
    return view('welcome', [
        'minerals' => $minerals
    ]);
});


Route::get('minerals/{mineral}', function ($mineralNumber) {

    $mineral = Mineral::find($mineralNumber);

    return view('mineral', [
        'mineral' => $mineral
    ]);
}) -> whereNumber('mineral');

