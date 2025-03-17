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

          <table id="example" class="cell-border compact stripe " style="width:100%">
            <thead>
              <tr>
                <th rowspan="2" >Program Kerja</th>
                <th rowspan="2">Rencana Kerja
                </th>
                <th rowspan="2">Target</th>
                <th colspan="4" style="text-align: center;" data-dt-order="disable">Januari</th>
                <th rowspan="2" width=5% data-dt-order="disable" style="text-align: center;">Hasil dicapai</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Achieve</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Keterangan</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Persentase</th>
                <th rowspan="2" width="15%" style="text-align: center; ">Aksi</th>
                <th></th>
              </tr>
              <tr>
                <th data-dt-order="disable">W1</th>
                <th data-dt-order="disable">W2</th>
                <th data-dt-order="disable">W3</th>
                <th data-dt-order="disable">W4</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($protechs as $protech)
                <tr>
                  <td class="break-words">{{ $protech->proker }}</td>
                  <td class="break-words">{{ $protech->renker }}</td>
                  <td class="break-words">{{ $protech->target }}</td>
                  <td>{{ $protech->janw1 == 'OK' ? '✔️' : $protech->janw1 }}</td>
                  <td>{{ $protech->janw2 == 'OK' ? '✔️' : $protech->janw2 }}</td>
                  <td>{{ $protech->janw3 == 'OK' ? '✔️' : $protech->janw3 }}</td>
                  <td>{{ $protech->janw4 == 'OK' ? '✔️' : $protech->janw4 }}</td>
                  <td class="whitespace-nowrap px-4 py-2" style="text-align: center;">
                    @if ($protech->hasil)
                      <div>
                        <a protechef="{{ Storage::url($protech->hasil) }}" 
                          class="text-sm font-medium text-blue-600 dark:text-blue-500 hover:underline"
                          download="{{ Str::afterLast($protech->hasil, '/') }}">
                          Sudah Upload
                        </a>
                      </div>
                    @else
                      <span class="text-sm font-medium text-gray-900 dark:text-white">Belum ada file PDF
                        diupload.</span>
                    @endif
                  </td>
                  <td style="text-align: center;">{{ $protech->achieve }}</td>
                  <td class="break-words" style="text-align: center;">{{ $protech->ket }}</td>
                  <td style="text-align: center;">{{ $protech->persen }}</td>
                  <td style="text-align: center; padding: 1.5rem 1.5rem 1.5rem 1.5rem;">
                    @role('user')
                      @if (empty($protech->hasil))
                        <a protechef="{{ route('dashboard.protech.edit', $protech->id) }}"
                          class="text-white bg-blue-700 hover:bg-blue-800 
                          focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2
                           dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Input
                          Hasil</a>
                      @else
                        <button disabled
                          class="text-white bg-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Input
                          Hasil</button>
                      @endif
                    @endrole
                    @role('admin')
                      <a protechef="{{ route('dashboard.protech.edit', $protech->id) }}"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Input
                        Data</a>
                    @endrole

                  </td>
                  <td></td>

                </tr>
              @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
