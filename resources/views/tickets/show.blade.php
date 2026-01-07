@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto p-6">

    {{-- Judul --}}
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">
            {{ $ticket->judul }}
        </h1>

        {{-- Badge Status --}}
        <span class="
            px-3 py-1 rounded text-sm font-semibold
            @if($ticket->status === 'open') bg-red-100 text-red-700
            @elseif($ticket->status === 'in_progress') bg-yellow-100 text-yellow-700
            @else bg-green-100 text-green-700
            @endif
        ">
            {{ strtoupper(str_replace('_', ' ', $ticket->status)) }}
        </span>
    </div>

    {{-- Info Pengirim --}}
    <div class="text-sm text-gray-500 mb-4">
        Dikirim oleh:
        <span class="font-semibold">{{ $ticket->user->name }}</span>
        • {{ $ticket->created_at->format('d M Y, H:i') }}
    </div>

    {{-- Isi Ticket --}}
    <div class="bg-white shadow rounded p-4 mb-6">
        <p class="text-gray-800 whitespace-pre-line">
            {{ $ticket->isi }}
        </p>
    </div>

    {{-- ADMIN ONLY: UPDATE STATUS --}}
    @if(auth()->user()->role === 'admin')
        <div class="bg-gray-100 p-4 rounded shadow">
            <h2 class="font-bold mb-3">Kelola Status Ticket</h2>

            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-2 mb-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('tickets.updateStatus', $ticket->id) }}">
                @csrf
                @method('PATCH')

                <label class="block mb-2 text-sm font-medium">
                    Status Ticket
                </label>

                <select name="status" class="w-full border rounded p-2 mb-4">
                    <option value="open" {{ $ticket->status === 'open' ? 'selected' : '' }}>
                        Open
                    </option>
                    <option value="in_progress" {{ $ticket->status === 'in_progress' ? 'selected' : '' }}>
                        Sedang Dikerjakan
                    </option>
                    <option value="closed" {{ $ticket->status === 'closed' ? 'selected' : '' }}>
                        Closed
                    </option>
                </select>

                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                    Update Status
                </button>
            </form>
        </div>
    @endif

    {{-- Tombol Kembali --}}
    <div class="mt-6">
        <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">
            ← Kembali ke Dashboard
        </a>
    </div>

</div>
@endsection
