<?php

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



Route::domain('blog.tricker.org')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/hello/{name}', function ($name) {
        return "Hello, {$name}!";
    });
});

Route::domain('admin.tricker.org')->group(function () {
    Route::get('/', function () {
        return 'Welcome to Admin dashboard!';
    });
});
