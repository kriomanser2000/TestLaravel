<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
    <a href="{{ route('news.create') }}">
        <button>Add New</button>
    </a>
    @if($news->isEmpty())
        <p>No news available.</p>
    @else
        <ul>
            @foreach ($news as $item)
                <li>
                    <a href="{{ route('news.show', $item->id) }}">
                        <h3>{{ $item->header }}</h3>
                        <p>{{ $item->short_text }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>