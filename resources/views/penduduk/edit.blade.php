<x-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold">Edit Penduduk</h1>
    </x-slot:header>
    <div class="mt-6 lg:w-[80%] sm:w-[90%] w-full">
        <form action="{{ route('penduduk.update', $penduduk->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col  gap-6">
                <div>
                    <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                    <input type="text" name="nik" id="nik" value="{{ old('nik', $penduduk->nik) }}" required class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('nik')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama', $penduduk->nama) }}" required class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('nama')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
                    <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $penduduk->alamat) }}" required class="p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('alamat')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="cursor-pointer mt-4 inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200">
                Update
            </button>
            <a href="{{ route('penduduk.index') }}" class="ml-4 inline-flex items-center px-4 py-2 bg-gray-300 text-gray-800 font-semibold rounded-md hover:bg-gray-400 focus:outline-none focus:ring focus:ring-gray-200">
                Cancel
            </a>
        </form>
</x-layout>
