<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li><a href="" class="p-2">Home</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-2">Dashboard</a></li>
            <li><a href="" class="p-2">Posts</a></li>
        </ul>
        <ul class="flex items-center">
            @auth
            <li><a href="" class="p-2">Innocent Mabuza</a></li>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">Logout</button>
            </form>
            @endauth
            @guest
            <li><a href="{{ route('login') }}" class="p-2">Login</a></li>
            <li><a href="{{ route('register') }}" class="p-2">Register</a></li>
            @endguest
        </ul>
    </nav>
    @yield('content')
</body>

</html>