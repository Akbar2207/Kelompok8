<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    if (Session::get('login')) {
        return redirect('/dashboard'); 
    }
    return view('login');
});

Route::post('/login', function (Request $request) {

    $email = 'admin@gmail.com';
    $password = '123456';

    if ($request->email == $email && $request->password == $password) {
        Session::put('login', true);
        return redirect('/dashboard'); 
    }

    return back()->with('error', 'Email atau password salah!');
});

Route::get('/logout', function () {
    Session::forget('login');
    return redirect('/');
});

Route::get('/dashboard', function () {

    if (!Session::get('login')) {
        return redirect('/');
    }

    return view('pages.dashboard');
});

Route::get('/users', function () {

    if (!Session::get('login')) {
        return redirect('/');
    }

    return view('pages.users');
});

Route::get('/settings', function () {

    if (!Session::get('login')) {
        return redirect('/');
    }

    return view('pages.settings');
});