<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

Route::get('/addNew', [NewsController::class, 'create']);

Route::post('/addNew', [NewsController::class, 'store']);