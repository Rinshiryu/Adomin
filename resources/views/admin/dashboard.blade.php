@extends('layouts.app')

@section('content')
<div class="p-6 space-y-6">

    <!-- PAGE TITLE -->
    <div>
        <h1 class="text-2xl font-bold text-gray-800">Dashboard Admin</h1>
        <p class="text-sm text-gray-500">Ringkasan tiket masukan mahasiswa</p>
    </div>

    <!-- STATS CARDS -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-sm text-gray-500">Open</p>
            <h2 class="text-3xl font-bold text-blue-600">
                {{ $openCount }}
            </h2>
        </div>

        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-sm text-gray-500">In Progress</p>
            <h2 class="text-3xl font-bold text-yellow-600">
                {{ $in_progressCount }}
            </h2>
        </div>

        <div class="bg-white rounded-xl shadow p-5">
            <p class="text-sm text-gray-500">Closed</p>
            <h2 class="text-3xl font-bold text-green-600">
                {{ $closedCount }}
            </h2>
        </div>

    </div>

    <!-- TICKET LIST -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

        @forelse ($tickets as $ticket)
            <div class="bg-white rounded-xl shadow-md p-5 flex flex-col justify-between">

                <!-- HEADER -->
                <div class="mb-3">
                    <h2 class="font-semibold text-lg text-gray-800 line-clamp-1">
                        {{ $ticket->judul }}
                    </h2>
                    <p class="text-sm text-gray-500">
                        Dari {{ $ticket->user->name }}
                    </p>
                </div>

                <!-- PREVIEW -->
                <p class="text-sm text-gray-600 line-clamp-3 mb-4">
                    {{ $ticket->isi }}
                </p>

                <!-- FOOTER -->
                <div class="flex items-center justify-between">

                    <!-- STATUS -->
                    @if ($ticket->status === 'open')
                        <span class="px-3 py-1 text-xs rounded-full bg-blue-100 text-blue-700">
                            Open
                        </span>

                    @elseif ($ticket->status === 'in_progress')
                        <span class="px-3 py-1 text-xs rounded-full bg-yellow-100 text-yellow-700">
                            In Progress
                        </span>

                    @elseif ($ticket->status === 'closed')
                        <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                            Closed
                        </span>
                    @endif

                    <a href="{{ route('tickets.show', $ticket->id) }}"
                       class="text-sm font-medium text-indigo-600 hover:underline">
                        Detail →
                    </a>
                </div>

            </div>
        @empty
            <div class="col-span-full text-center text-gray-500">
                Belum ada tiket
            </div>
        @endforelse

    </div>

</div>
@endsection
