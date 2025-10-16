<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <h1>Student List</h1>
    <ul>
    <li>
        {{ $students[0]['name'] }} 
        The id is {{ $students[0]['id'] }}. 
    </li>
    <li>
        {{ $students[1]['name'] }} 
        The id is {{ $students[1]['id'] }}
    </li>
    <li>
        {{ $students[2]['name'] }} 
        The id is {{ $students[2]['id'] }}
    </li>
</ul>

</body>
</html>