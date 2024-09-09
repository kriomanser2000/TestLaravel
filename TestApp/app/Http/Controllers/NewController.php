<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

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
    public function addComment(Request $request, $newsId)
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        $validated = $request->validate([
            'comment'=>'required|max:500',
        ]);
        Comment::create([
            'id_user'=>Auth::id(),
            'id_news'=>$newsId,
            'comment'=>$validated['comment'],
            'created_at'=>now(),
        ]);
        return redirect()->route('news.view', $newsId)->with('success', 'Comment added.');
    }
    public function viewNews($id)
    {
        $news = News::findOrFail($id);
        $comments = Comment::where('id_news', $id)->with('user')->get();
        return view('newView', compact('news', 'comments'));
    }
    public function storeComment(Request $request, $id)
    {
        if (!Auth::check()) 
        {
            return response()->json(['message'=>'Unauthorized'], 401);
        }
        $request->validate([
            'comment'=>'required|max:500',
        ]);
        $comment = new Comment();
        $comment->id_user = Auth::id();
        $comment->news_id = $id;
        $comment->comment = $request->input('comment');
        $comment->created_at = now();
        $comment->save();
        return response()->json([
            'user_name'=>Auth::user()->name,
            'comment'=>$comment->comment,
            'created_at'=>$comment->created_at->format('Y-m-d H:i:s'),
        ]);
    }
}
