<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Con;


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
    return view('welcome');
});


Route::get('/login',[Con::class, 'log'])->name('datossesion');
Route::post('/isesion', [Con::class, 'iSesion'])->name('isesion');
Route::post('/sincontrase', [Con::class, 'sinContrase'])->name('sincontrase');
Route::post('/sincorreo', [Con::class, 'sinCorreo'])->name('sincorreo');