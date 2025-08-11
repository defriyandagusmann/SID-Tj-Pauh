<x-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold">Edit Penduduk</h1>
    </x-slot:header>
    <div class="mt-6 lg:w-[80%] sm:w-[90%] w-full">
        <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                <div>
                    <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                    <input type="text" name="nik" id="nik" value="{{ old('nik', $penduduk->nik) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama', $penduduk->nama) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $penduduk->alamat) }}" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
            </div>
            <button type="submit" class="mt-4 inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200">
                Update
            </button>
        </form>
</x-layout>
