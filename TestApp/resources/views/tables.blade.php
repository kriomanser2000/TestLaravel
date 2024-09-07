<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db Tables</title>
</head>
<body>
    <h1>Table here</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Summary</th>
            <th>Short Desription</th>
            <th>Full Text</th>
        </tr>
        @foreach($news as $item)
        <tr>
            <td>{{ $item->id }}</td>    
            <td>{{ $item->summary }}</td>
            <td>{{ $item->short_description }}</td>
            <td>{{ $item->full_text }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>