<x-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold">Create Penduduk</h1>
    </x-slot:header>
    <form action="{{ route('penduduk.store') }}" method="POST" class="space-y-8 divide-y divide-gray-200">
        @csrf
        <div class="space-y-3 mx-auto max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-full">
                <label for="nik" class="block text-sm/6 font-medium text-gray-900">NIK</label>
                <div class="mt-2">
                  <input id="nik" type="text" name="nik" autocomplete="nik" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" value="{{ old('nik') }}" />
                    @error('nik')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              </div>

              <div class="sm:col-span-4">
                <label for="nama" class="block text-sm/6 font-medium text-gray-900">Nama address</label>
                <div class="mt-2">
                  <input id="nama" type="nama" name="nama" autocomplete="given_name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" value="{{ old('nama') }}" />
                    @error('nama')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="alamat" class="block text-sm/6 font-medium text-gray-900">Alamat</label>
                <div class="mt-2">
                  <input id="alamat" type="address" name="alamat" autocomplete="address" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" value="{{ old('alamat') }}"/>
                    @error('alamat')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="sm:col-span-4">
                <label for="wilayah_id" class="block text-sm/6 font-medium text-gray-900">Wilayah</label>
                <select name="wilayah_id" id="wilayah_id"  class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-teal-500 focus:border-teal-500 border-gray-300" value="{{ old('wilayah_id') }}">
                    <option value="">-- Pilih wilayah --</option>
                    @foreach ($wilayahs as $wilayah)
                    <option value="{{ $wilayah->id }}">{{ $wilayah->dusun }}</option>
                    @endforeach
                </select>
                @error('mentor_id')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
              </div>
        </div>

        <div class="mt-1 mb-6 flex items-center justify-center gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <button type="submit" class="rounded-md bg-teal-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-teal-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-teal-600">Save</button>
        </div>
      </form>

</x-layout>
