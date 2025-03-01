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

          <table id="example" class="display" style="width:100%">
            <thead>
              <tr>
                <th rowspan="2" width="10%">Program Kerja</th>
                <th rowspan="2" width="10%">Rencana Kerja</th>
                <th rowspan="2" width="5%">Target</th>
                <th colspan="4" style="text-align: center;" width="10%" data-dt-order="disable">Januari</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Hasil dicapai</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Approval</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Persentase</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Aksi</th>

                <th></th>
              </tr>
              <tr>
                <th colspan="1" data-dt-order="disable">W1</th>
                <th colspan="1" data-dt-order="disable">W2</th>
                <th colspan="1" data-dt-order="disable">W3</th>
                <th colspan="1" data-dt-order="disable">W4</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>testtest</td>
                <td>OK</td>
                <td>OK</td>
                <td>OK</td>
                <td>OK</td>
                <td style="text-align: center;">hasil</td>
                <td style="text-align: center;">approve</td>
                <td style="text-align: center;">presen</td>
                <td style="text-align: center"><button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Input
                    Hasil</button>
                </td>
                <td>

                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
