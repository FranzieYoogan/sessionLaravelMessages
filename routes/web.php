<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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


Route::get('/account', function () {
    return view('account');
});


Route::get('/messages', function () {
    return view('messages');
});

Route::get('/messageus', function () {
    return view('messageus');
});



Route::post('/account', [Controller::class, 'login']);


Route::post('/messages', [Controller::class, 'showMessages']);

Route::post('/messageus', [Controller::class, 'sendMessage']);

Route::get('/messages', [Controller::class, 'showMessages']);

Route::get('/logout', [Controller::class, 'logout']);