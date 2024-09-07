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
    <form action="/addNew" method="post">   
        <input type="hidden" name="_token" value="token_value">
        <label for="summary">Summary: </label>
        <input type="text" id="summary" name="summary" required>
        <label for="short_description">Description: </label>
        <textarea name="short_description" id="short_description" required></textarea>
        <label for="full_text">Full Text: </label>
        <textarea name="full_text" id="full_text" required></textarea>
        <button type="submit">Add</button>
    </form>
</body>
</html>