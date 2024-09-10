<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <h1>Результати пошуку</h1>
    @if($news->isEmpty())
    <p>Нічого не знайдено</p>
    @else
    @foreach($news as $item)
    <div>
            <h2>{{ $item->summary }}</h2>
            <p>{{ $item->short_text }}</p>
        </div>
    @endforeach
    @endif
</body>
</html>