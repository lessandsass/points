<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Points</title>

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <nav class="p-6 bg-white flex justify-between">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Dashboard</a></li>
        </ul>
    </nav>

    @yield('content')
</body>
</html>