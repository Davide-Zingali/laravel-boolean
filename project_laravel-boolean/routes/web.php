<?php

use Illuminate\Support\Facades\Route;

Route::get('/ex1', function () {
    return 'Hello Users';
});

Route::get('/ex2', function () {
    return view('helloYou', [
        'name' => 'Davide'
    ]);
});

Route::get('/ex3', function () {
    return view('helloYou', [
        'name' => 'Pippo'
    ]);
});

Route::get('/ex4', 'MainController@holaTodo');
Route::get('/ex5', 'MainController@holaTu');
Route::get('/ex6', 'MainController@holaTu2');