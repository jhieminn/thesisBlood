<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-red-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-red-600 text-white p-4 flex justify-between">
        <h1 class="text-lg font-bold">Blood Bank System</h1>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-white text-red-600 px-3 py-1 rounded-lg hover:bg-gray-200">
                Logout
            </button>
        </form>
    </nav>

    <!-- Main Content -->
    <div class="p-6">
        @yield('content')
    </div>

</body>
</html>
