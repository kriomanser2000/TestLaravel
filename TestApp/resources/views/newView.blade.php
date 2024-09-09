<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Details</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <h1>{{ $news->summary }}</h1>
    <p>{{ $news->full_text }}</p>
    @if(Auth::check())
    <h2>Залиште коментар</h2>
    <form action="{{ route('addComment', $news->id) }}" method="post">
        @csrf
        <textarea name="comment" placeholder="Your comment: " id="" required></textarea>
        <button type="submit">Add Comm</button>
    </form>
    @else
    <p>Ви повинні <a href="{{ route('login') }}">log in</a> щоб залишити коментар.</p>
    @endif
    <h2>Коментарі</h2>
    @if($comments->isEmpty())
    <p>Коментарів поки немає.</p>
    @else
    @foreach($comments as $comment)
    <div>
        <strong>{{ $comment->user->name }}</strong>
        <p>{{ $comment->comment }}</p>
        <small>{{ $comment->created_at }}</small>
    </div>
    @endforeach
    @endif
    @endsection
</body>
</html>