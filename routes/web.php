<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('login');
});

Route::post('/login', function (Request $request) {
    $username = 'kcumalang';
    $password = 'ritel65100';

    if ($request->username === $username && $request->password === $password) {
        session(['authenticated' => true]);
        return redirect('/dashboard');
    }
    return back()->withErrors(['login' => 'Username atau password salah.'])->withInput();
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
