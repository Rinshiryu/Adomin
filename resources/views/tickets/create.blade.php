<x-app-layout>
    <div class="min-h-screen bg-gray-100 flex justify-center pt-10">

        <div class="bg-white w-full max-w-lg p-6 rounded-xl shadow-lg">

            <h2 class="text-xl font-bold mb-4 text-center">
                Kirim Tiket Masukan Mahasiswa
            </h2>

            @if (session('success'))
                <div class="mb-4 text-green-600 text-center font-medium">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('tickets.store') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Judul Tiket
                    </label>
                    <input type="text" name="judul"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:ring focus:ring-indigo-200"
                        required>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">
                        Isi Pesan
                    </label>
                    <textarea name="isi" rows="4"
                        class="w-full border border-gray-300 rounded px-3 py-2 focus:ring focus:ring-indigo-200"
                        required></textarea>
                </div>

                <button type="submit"
                    class="w-full bg-blue-600 text-white py-3 rounded-lg font-bold text-lg shadow-md hover:bg-blue-700">
                    Kirim Tiket
                </button>
            </form>

        </div>

    </div>
</x-app-layout>