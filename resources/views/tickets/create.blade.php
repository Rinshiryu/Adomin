@extends('layouts.mahasiswa')

@section('title', 'Buat Ticket')

@section('content')
<div class="bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">Buat Ticket</h1>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-2 mb-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('tickets.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block font-medium">Judul</label>
            <input type="text" name="judul"
                   class="w-full border rounded p-2"
                   required>
        </div>

        <div class="mb-4">
            <label class="block font-medium">Isi Ticket</label>
            <textarea name="isi"
                      class="w-full border rounded p-2"
                      rows="5"
                      required></textarea>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Kirim Ticket
        </button>
    </form>
</div>
@endsection
