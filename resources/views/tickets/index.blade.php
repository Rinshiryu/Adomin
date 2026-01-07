@extends('layouts.app')

@section('content')
<h2 class="text-xl font-semibold mb-6">Ticket Mahasiswa</h2>

@if($tickets->isEmpty())
    <p class="text-gray-500">Belum ada ticket masuk.</p>
@else

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

@foreach ($tickets as $ticket)
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-5 border">

        <!-- HEADER -->
        <div class="flex justify-between items-start mb-3">
            <h3 class="font-semibold text-lg">
                {{ $ticket->judul }}
            </h3>

            <span class="text-xs px-3 py-1 rounded-full
                {{ $ticket->status === 'open'
                    ? 'bg-yellow-100 text-yellow-800'
                    : 'bg-green-100 text-green-800' }}">
                {{ ucfirst($ticket->status) }}
            </span>
        </div>

        <!-- USER -->
        <p class="text-sm text-gray-500 mb-2">
            Dikirim oleh: <span class="font-medium">{{ $ticket->user->name }}</span>
        </p>

        <!-- PREVIEW -->
        <p class="text-gray-700 text-sm line-clamp-3 mb-4">
            {{ $ticket->isi }}
        </p>

        <!-- ACTION -->
        <a href="{{ route('tickets.show', $ticket->id) }}"
           class="inline-block text-sm bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
            Lihat Detail
        </a>

    </div>
@endforeach

</div>

@endif
@endsection
