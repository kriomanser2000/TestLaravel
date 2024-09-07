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
        <input type="text" id="header" name="header" required maxlength="50"><br>
        <label for="short_text">Short Text: </label>
        <input type="text" id="short_text" name="short_text" required maxlength="150"><br>
        <label for="article">Article: </label>
        <textarea id="article" name="article" required maxlength="5000"></textarea><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>