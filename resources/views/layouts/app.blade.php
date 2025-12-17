<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

<!-- TOP NAVBAR -->
<header class="bg-indigo-600 text-black shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <!-- LEFT -->
        <div class="flex items-center gap-6">
            <span class="text-xl font-bold">🎫 Ticket System</span>

            <a href="{{ route('dashboard') }}"
               class="hover:underline">
               Dashboard
            </a>

            <a href="#"
               class="hover:underline">
               Data Tiket
            </a>
        </div>

        <!-- RIGHT -->
        <div class="flex items-center gap-4">

            @auth
                <span class="text-sm opacity-90">
                    {{ auth()->user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="bg-red-500 px-3 py-1 rounded hover:bg-red-600 transition">
                        Logout
                    </button>
                </form>
            @endauth

        </div>
    </div>
</header>

<!-- PAGE CONTENT -->
<main class="max-w-7xl mx-auto p-6">
    @yield('content')
</main>

</body>
</html>
