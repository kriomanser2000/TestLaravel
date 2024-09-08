<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Details</title>
</head>
<body>
    <h1>{{ $news->header }}</h1>
    <p>{{ $news->short_text }}</p>
    <p>{{ $news->full_text }}</p>
    @if (news->image)
    <img src="data:image/jpeg;base64,{{ base64_encode($news->image) }}" alt="news img">
    @endif
    <a href="{{ route('news.edit', $news->id) }}">
        <button>Edit News</button>
    </a>
</body>
</html>