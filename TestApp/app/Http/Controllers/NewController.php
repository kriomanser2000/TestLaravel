<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('welcome', compact('news'));
    }
    public function create()
    {
        return view('addNew');
    }
}
