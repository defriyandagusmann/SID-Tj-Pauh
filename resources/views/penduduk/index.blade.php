<x-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold">Penduduk List</h1>
    </x-slot:header>
    <div class="flex justify-between mt-6 lg:w-[80%] sm:w-[90%] w-full">
        <div class="flex items-center justify-between mb-4">
            <form action="{{ route('penduduk.index') }}" method="GET" class="flex items-center gap-2">
                <input type="text" name="search" placeholder="Cari berdasarkan NIK / Nama / Alamat" class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200" value="{{ request('search') }}">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200">
                    Search
                </button>
            </form>
        </div>
        <div class="flex justify-end mb-4">
            <a href="{{ route('penduduk.create') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200">
                Create Penduduk
            </a>
        </div>
    </div>
    <div class="overflow-x-auto rounded border border-gray-300 shadow-sm mt-4 lg:w-[80%] sm:w-[90%] w-full">
        <table class="min-w-full divide-y-2 divide-gray-200">
          <thead class="text-center">
            <tr class="*:font-medium *:text-gray-900">
              <th class="px-3 py-2 whitespace-nowrap">NIK</th>
              <th class="px-3 py-2 whitespace-nowrap">Nama</th>
              <th class="px-3 py-2 whitespace-nowrap">Alamat</th>
              <th class="px-3 py-2 whitespace-nowrap">Details</th>
            </tr>
          </thead>

          <tbody class="divide-y divide-gray-200">
            @foreach ($penduduks as $penduduk)
                <tr class="*:text-gray-900 *:first:font-medium">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $penduduk->nik }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $penduduk->nama }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $penduduk->alamat }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">
                        <div class="inline-flex gap-2">
                            <button
                              class="rounded border border-gray-200 px-3 py-2 font-medium cursor-pointer bg-green-500 transition-colors hover:bg-gray-50 hover:text-green-500   disabled:pointer-events-auto disabled:opacity-50" href="{{ route('penduduk.show', $penduduk->id) }}"
                            >
                                <a href="{{ route('penduduk.show', $penduduk->id) }}" class="hover:text-green-500">
                                    View
                                </a>
                            </button>

                            <button
                              class="rounded border border-gray-200 px-3 py-2 font-medium cursor-pointer bg-blue-500 transition-colors hover:bg-white hover:text-blue-500   disabled:pointer-events-auto disabled:opacity-50"
                            >
                                <a href="{{ route('penduduk.edit', $penduduk->id) }}" class="hover:text-blue-500">
                                    Edit
                                </a>
                            </button>

                            <form action="{{ route('penduduk.destroy', $penduduk->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                  class="rounded border border-gray-200 px-3 py-2 font-medium cursor-pointer bg-red-500 transition-colors hover:bg-white hover:text-red-500   disabled:pointer-events-auto disabled:opacity-50"
                                >
                                    Delete
                                </button>
                            </form>
                          </div>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
        <div class="p-4">
            {{ $penduduks->links() }}
        </div>
    </div>
</x-layout>
