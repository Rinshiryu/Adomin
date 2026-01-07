<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Mahasiswa - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">

    {{-- Navbar Mahasiswa --}}
    <nav class="bg-blue-600 text-white px-6 py-4 flex justify-between">
        <div class="font-bold">Sistem Ticket Mahasiswa</div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="hover:underline">Logout</button>
        </form>
    </nav>

    {{-- Content --}}
    <main class="p-6 max-w-3xl mx-auto">
        @yield('content')
    </main>

</body>
</html>
