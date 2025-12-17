@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-6 py-6">

    <!-- HEADER -->
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Dashboard Admin</h1>
        <p class="text-sm text-gray-500">
            Kelola tiket masukan & saran dari mahasiswa
        </p>
    </div>

    <!-- STAT CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-sm text-gray-500">Total Ticket</p>
            <h2 class="text-3xl font-bold text-indigo-600">{{ $total }}</h2>
        </div>

        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-sm text-gray-500">Ticket Open</p>
            <h2 class="text-3xl font-bold text-yellow-500">{{ $open }}</h2>
        </div>

        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-sm text-gray-500">Ticket Closed</p>
            <h2 class="text-3xl font-bold text-green-600">{{ $closed }}</h2>
        </div>
    </div>

    <!-- TICKET LIST -->
    <div class="bg-white rounded-xl shadow">
        <div class="p-5 border-b">
            <h2 class="text-lg font-semibold text-gray-700">Daftar Ticket</h2>
        </div>

        <div class="divide-y">
            @forelse ($tickets as $ticket)
                <div class="p-5 flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                    <!-- LEFT -->
                    <div>
                        <h3 class="font-semibold text-gray-800">
                            {{ $ticket->judul }}
                        </h3>

                        <p class="text-sm text-gray-500">
                            Dari: <span class="font-medium">{{ $ticket->user->name }}</span>
                        </p>

                        <p class="text-sm text-gray-600 mt-2">
                            {{ Str::limit($ticket->isi, 80) }}
                        </p>
                    </div>

                    <!-- RIGHT -->
                    <div class="flex items-center gap-3">
                        <!-- STATUS -->
                        @if ($ticket->status === 'open')
                            <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                                OPEN
                            </span>
                        @else
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                                CLOSED
                            </span>
                        @endif

                        <!-- BUTTON -->
                        <a href="#"
                           class="text-sm text-indigo-600 hover:underline">
                            Detail
                        </a>
                    </div>

                </div>
            @empty
                <div class="p-6 text-center text-gray-500">
                    Belum ada ticket masuk
                </div>
            @endforelse
        </div>
    </div>

</div>
@endsection
