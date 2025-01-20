<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebApp</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="flex">
        <div class="w-1/4 bg-gray-200 h-screen p-4">
            <ul>
                <li><a href="/screen/1">Screen 1</a></li>
                <li><a href="/screen/2">Screen 2</a></li>
                <li><a href="/screen/3">Screen 3</a></li>
            </ul>
        </div>
        <div class="w-3/4 p-4">
            @yield('content')
        </div>
    </div>
</body>
</html>
