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
    public function update(Request $request, $id)
    {
        $news = News::findOrFall($id);
        $data = $request->validate([
            'summary'=>'required|max:50',
            'short_description'=>'required|max:150',
            'full_text'=>'required|max:5000',
            'image'=>'nullable|image|max:2048',
        ]);
        if($request->hasFile('image'))
        {
            $data['image'] = file_get_contents($request->file('image')->getRealPath());
        }
        $news->update($data);
        return redirect('/');
    }
    public function show($id)
    {
        $news = News::findOrFall($id);
        return view('newView', compact('news'));
    }
}
