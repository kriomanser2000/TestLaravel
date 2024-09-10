<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News By Category</title>
</head>
<body>
    <h1>Новини в категорії: {{ $category->name }}</h1>
    @foreach($category->news as $news)
    <div>
        <h2>{{ $news->summary }}</h2>
        <p>{{ $news->short_text }}</p>
    </div>
    <form action="{{ route('news.search') }}" method="get">
        <input type="text" name="query" placeholder="Search news by title">
        <button type="submit">Пошук</button>
    </form>
    @endforeach
</body>
</html>