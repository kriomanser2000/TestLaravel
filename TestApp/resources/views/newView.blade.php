<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Details</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <h1>{{ $news->summary }}</h1>
    <p>{{ $news->full_text }}</p>
    @if(Auth::check())
    <h2>Залиште коментар</h2>
    <form id="commentForm" method="post">
        @csrf
        <textarea name="comment" id="commentText" placeholder="Your comment" required></textarea>
        <button type="submit">Add Comment</button>
    </form>
    @else
    <p>Ви повинні <a href="{{ route('login') }}">log in</a> щоб залишити коментар.</p>
    @endif
    <h2>Коментарі</h2>
    <div id="commentsSection">
        @if($comments->isEmpty())
        <p>Коментарів поки немає.</p>
        @else
        @foreach($comments as $comment)
        <div class="comment">
            <strong>{{ $comment->user->name }}</strong>
            <p>{{ $comment->comment }}</p>
            <small>{{ $comment->created_at }}</small>
        </div>
        @endforeach
        @endif
    </div>
    <script>
        $(document).ready(function() 
        {
            $('#commentForm').on('submit', function(e) 
            {
                e.preventDefault();
                var comment = $('#commentText').val();
                var newsId = {{ $news->id }};
                $.ajax({
                    url: "{{ route('addComment', $news->id) }}",
                    method: 'POST',
                    data: 
                    {
                        _token: $('input[name="_token"]').val(),
                        comment: comment,
                        news_id: newsId
                    },
                    success: function(response) 
                    {
                        $('#commentsSection').append(
                            '<div class="comment">' +
                            '<strong>' + response.user_name + '</strong>' +
                            '<p>' + response.comment + '</p>' +
                            '<small>' + response.created_at + '</small>' +
                            '</div>'
                        );
                        $('#commentText').val('');
                    },
                    error: function(xhr) 
                    {
                        alert('Something went wrong. Please try again.');
                    }
                });
            });
        });
    </script>
    @endsection
</body>
</html>