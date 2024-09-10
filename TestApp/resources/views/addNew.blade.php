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
    <form action="{{ isset($news) ? route('news.update', $news->id) : '/addNew' }}" method="post" enctype="multipart/form-data">
        <label for="summary">Summary: </label>
        <input type="text" id="summary" name="summary" value="{{ $news->summary ?? '' }}" required>
        <label for="short_description">Description: </label>
        <textarea name="short_description" id="short_description" required>{{ $news->short_description ?? '' }}</textarea>
        <label for="full_text">Full Text: </label>
        <textarea name="full_text" id="full_text" required>{{ $news->full_text ?? '' }}</textarea>
        <label for="image">Upload Image: </label>
        <input type="file" id="image" name="image" accept="image/*">
        <select name="category_id" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <button type="submit">{{ isset($news) ? 'Update' : 'Add' }}</button>
    </form>
</body>
</html>