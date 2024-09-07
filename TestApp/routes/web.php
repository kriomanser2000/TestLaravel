<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewController;

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

Route::get('/addNew', [NewsController::class, 'create'])->name('news.create');

Route::post('/addNew', [NewsController::class, 'store'])->name('news.store');

Route::get('/addNew', [NewController::class, 'create'])->name('news.create');

Route::get('/', [NewController::class, 'index'])->name('news.index');

Route::get('/tables', function()
{
    $news = \App\Models\News::all();
    return view('tables', ['news' => $news]);
});