<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News in Table</title>
</head>
<style>

</style>
<body>
    <form action="{{ route('news.store') }}" method="post">   
        <input type="hidden" name="_token" value="token_value">
        <label for="header">Header (max 50 characters): </label>
        <input type="text" id="header" name="header" value="{{ old('header') }}" required maxlength="50"><br>
        <label for="short_text">Short Text (max 150 characters): </label>
        <input type="text" id="short_text" name="short_text" value="{{ old('short_text') }}" required maxlength="150"><br>
        <label for="article">Article (max 5000 characters): </label>
        <textarea id="article" name="article" required maxlength="5000">{{ old('article') }}</textarea><br>
    </form>
</body>
</html>