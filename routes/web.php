<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.home_page')->with('content', ['View products' => '/store', 'Element 2'=> '/', 'Element 3'=> '/', 'Element 4'=> '/', 'Element 5'=> '/']);
});
Route::get('/store', function () {
    return view('main.store');
});
