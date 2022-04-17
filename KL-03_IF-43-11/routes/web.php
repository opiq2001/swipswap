<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;




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

//Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginprocess',[LoginController::class, 'loginprocess'])->name('loginprocess');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

//Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    if(session()->has("email")){
        return view('home.home');
    }
    return redirect('/login');
    //return view('home.home');
});

Route::get('/beli/dana', function () {
    return view('menu.dana');
});

Route::get('/beli/gopay', function () {
    return view('menu.gopay');
});

Route::get('/beli/epayment', function () {
    return view('menu.epayment');
});

Route::get('/beli/evoucher', function () {
    return view('menu.evoucher');
});

Route::get('/login', function () {
    if(session()->has("email")){
        return redirect('/home');
    }
    return view('User.login');
});

Route::get('/logout', function () {
    if(session()->has("email")){
        session()->pull("email");
    }
    return view('User.login');
});

