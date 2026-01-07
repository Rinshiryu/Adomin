<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-slate-900 text-white flex flex-col">

        <!-- LOGO / TITLE -->
        <div class="px-6 py-4 text-xl font-bold border-b border-slate-700">
            🎫 Adomin
        </div>

        <!-- MENU -->
        <nav class="flex-1 px-4 py-6 space-y-2">
            <a href="{{ route('dashboard') }}"
               class="block px-4 py-2 rounded-md hover:bg-slate-800 transition">
                Dashboard
            </a>

            <a href="{{ route('tickets.index') }}"
            class="block px-4 py-2 rounded-md hover:bg-slate-800 transition">
                Ticket Mahasiswa
            </a>
        </nav>

        <!-- USER + LOGOUT -->
        <div class="px-4 py-4 border-t border-slate-700">
            <div class="text-sm mb-2 text-slate-300">
                {{ auth()->user()->name ?? '' }}
            </div>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button
                    type="submit"
                    class="w-full bg-red-600 py-2 rounded-md hover:bg-red-700 transition text-sm">
                    Logout
                </button>
            </form>
        </div>

    </aside>

    <!-- CONTENT -->
    <main class="flex-1 p-8">
        <div class="bg-white rounded-xl shadow p-6">
            @yield('content')
        </div>
    </main>

</div>

</body>
</html>