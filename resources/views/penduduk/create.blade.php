<x-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold">Create Penduduk</h1>
    </x-slot:header>
    <div class="mt-6 lg:w-[50%] sm:w-[70%] w-full">
        <form action="{{ route('penduduk.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">
                <div>
                    <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                    <input type="text" name="nik" id="nik" value="{{ old('nik') }}"  class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('nik')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('nama')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <input type="text" name="alamat" id="alamat" value="{{ old('alamat') }}" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                    @error('alamat')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <label for="wilayah_id" class="block text-sm font-medium text-gray-700">Dusun</label>
                    <select name="wilayah_id" id="wilayah_id" class="mt-1 p-2 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="">-- Pilih Dusun --</option>
                        @foreach ($wilayahs as $wilayah)
                            <option value="{{ $wilayah->id }}">{{ $wilayah->dusun }}</option>
                        @endforeach
                    </select>
                    @error('wilayah_id')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-6">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Create</button>
                <a href="{{ route('penduduk.index') }}" class="ml-4 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400">Cancel</a>
            </div>
        </form>
</x-layout>
