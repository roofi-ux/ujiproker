<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-12xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">
          <table id="export-table">

            <thead>

              <tr>
                <th>
                  <span class="flex items-center">
                    Program Kerja
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
                <th>
                  <span class="flex items-center">
                    Rencana Kerja
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
                <th>
                  <span class="flex items-center">
                    Target
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
                <th colspan="2">
                  <span class="flex items-center">
                    Januari
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
                <th>
                  <span class="flex items-center">
                    Akun Instagram
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
                <th>
                  <span class="flex items-center">
                    Nama Event
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
                <th>
                  <span class="flex items-center">
                    Area / Wilayah
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
                <th>
                  <span class="flex items-center">
                    Kategori Event
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
                <th data-type="date" data-format="dd-mm-yyyy">
                  <span class="flex items-center">
                    Tanggal
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
                <th>
                  <span class="flex items-center">
                    Aksi
                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                      height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                    </svg>
                  </span>
                </th>
              </tr>
              <tr>
                <th colspan="3" data-dt-order="disable">HR info</th>
                <th colspan="2">Direct</th>
              </tr>
            </thead>
            <tbody>
              {{-- @if ($data->isEmpty())
                            <tr>
                              <td colspan="6" align="center">Tidak ada data.</td>
                            </tr>
                          @else
                            @foreach ($data as $item)
                              <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                                <td>{{ $loop->iteration }}</td>
                                <td class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <td>{{ $item->nama }}</td>
                                </td>
                                <td>{{ $item->nomor }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nama_ig }}</td>
                                <td>{{ $item->event }}</td>
                                <td>{{ $item->area }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->tanggal }}</td>
                                {{-- <td class="px-6 py-4">
                                  <!-- Modal toggle -->
                                  <a href="#" type="button" data-modal-show="editUserModal"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit user</a>
                                </td> --}}
              {{-- <td> --}}
              {{-- <a href="{{ route('user_sosial_media.edit', $item) }}">Edit</a>
                            <form action="{{ route('user_sosial_media.destroy', $item) }}" method="POST"
                              style="display: inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                          </td>
                          </tr>
                          @endforeach
                          @endif --}}

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
