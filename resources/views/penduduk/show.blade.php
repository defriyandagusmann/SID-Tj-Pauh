<x-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold">Penduduk Details</h1>
    </x-slot:header>
    <div class="flow-root lg:w-[80%] sm:w-[90%] w-full mt-6">
        <dl class="-my-3 divide-y divide-gray-200 text-sm *:even:bg-gray-50">
          <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">NIK</dt>

            <dd class="text-gray-700 sm:col-span-2">{{ $penduduk->nik }}</dd>
          </div>

          <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Nama</dt>

            <dd class="text-gray-700 sm:col-span-2">{{ $penduduk->nama }}</dd>
          </div>

          <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Alamat</dt>

            <dd class="text-gray-700 sm:col-span-2">{{ $penduduk->alamat }}</dd>
          </div>

          <div class="grid grid-cols-1 gap-1 p-3 sm:grid-cols-3 sm:gap-4">
            <dt class="font-medium text-gray-900">Dusun</dt>

            <dd class="text-gray-700 sm:col-span-2">{{ $penduduk->wilayah->dusun }}</dd>
          </div>
        </dl>
      </div>
</x-layout>
