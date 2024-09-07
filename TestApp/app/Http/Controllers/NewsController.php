<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function create()
    {
        return view('addNew');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'summary' => 'required',
            'short_description' => 'required',
            'full_text' => 'required',
        ]);
        News::create([
            'summary' => $request->input('summary'),
            'short_description' => $request->input('short_description'),
            'full_text' => $request->input('full_text'),
        ]);
        return redirect('/tables');
    }
}
