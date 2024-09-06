<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function()
{
    $viewName = 'home';
    return view($viewName, compact('viewName'));
});

Route::get('/tables', function()
{
    return view('tables');
});