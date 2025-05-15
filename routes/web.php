<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('GodplanWelcome');
});

Route::put('/login',function(){
    return view('LoginPage');
});