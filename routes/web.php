<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/hello', function () {
    return '<h1>hello world</h1>';
});*/
