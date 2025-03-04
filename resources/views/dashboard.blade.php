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
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Keterangan</th>
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
              @foreach ($prd as $pr)
                <tr>
                  <td>{{ $pr->proker }}</td>
                  <td>{{ $pr->renker }}</td>
                  <td>{{ $pr->target }}</td>
                  <td>{{ $pr->janw1 }}</td>
                  <td>{{ $pr->janw2 }}</td>
                  <td>{{ $pr->janw3 }}</td>
                  <td>{{ $pr->janw4 }}</td>
                  <td style="text-align: center;">{{ $pr->hasil }}</td>
                  <td style="text-align: center;">{{ $pr->aproval }}</td>
                  <td style="text-align: center;">{{ $pr->ket }}</td>
                  <td style="text-align: center;">{{ $pr->persen }}</td>
                  <td style="text-align: center">
                    <a href="{{ route('prds.edit', $pr->id) }}"
                      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Input
                      Hasil</a>
                  </td>

                </tr>
              @endforeach
            </tbody>
            <div id="editModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
              <div class="bg-white p-6 rounded-lg w-1/2">
                <h2 class="text-2xl font-semibold mb-4">Edit Data PRD</h2>
                <form action="{{ route('prds.update', $pr->id) }}" method="POST">
                  @csrf
                  @method('PUT')

                  <div class="mb-4">
                    <label for="proker" class="block text-gray-700 font-semibold mb-2">Proker</label>
                    <textarea name="proker" id="proker" class="w-full border rounded-md py-2 px-3">{{ $pr->proker }}</textarea>
                  </div>

                  <div class="mb-4">
                    <label for="renker" class="block text-gray-700 font-semibold mb-2">Renker</label>
                    <textarea name="renker" id="renker" class="w-full border rounded-md py-2 px-3">{{ $pr->renker }}</textarea>
                  </div>

                  <div class="mb-4">
                    <label for="target" class="block text-gray-700 font-semibold mb-2">Target</label>
                    <textarea name="target" id="target" class="w-full border rounded-md py-2 px-3">{{ $pr->target }}</textarea>
                  </div>

                  <div class="mb-4">
                    <label for="janw1" class="block text-gray-700 font-semibold mb-2">Jan W1</label>
                    <input type="text" name="janw1" id="janw1" class="w-full border rounded-md py-2 px-3"
                      value="{{ $pr->janw1 }}">
                  </div>

                  <div class="mb-4">
                    <label for="janw2" class="block text-gray-700 font-semibold mb-2">Jan W2</label>
                    <input type="text" name="janw2" id="janw2" class="w-full border rounded-md py-2 px-3"
                      value="{{ $pr->janw2 }}">
                  </div>

                  <div class="mb-4">
                    <label for="janw3" class="block text-gray-700 font-semibold mb-2">Jan W3</label>
                    <input type="text" name="janw3" id="janw3" class="w-full border rounded-md py-2 px-3"
                      value="{{ $pr->janw3 }}">
                  </div>

                  <div class="mb-4">
                    <label for="janw4" class="block text-gray-700 font-semibold mb-2">Jan W4</label>
                    <input type="text" name="janw4" id="janw4" class="w-full border rounded-md py-2 px-3"
                      value="{{ $pr->janw4 }}">
                  </div>

                  <div class="mb-4">
                    <label for="hasil" class="block text-gray-700 font-semibold mb-2">Hasil</label>
                    <input type="text" name="hasil" id="hasil" class="w-full border rounded-md py-2 px-3"
                      value="{{ $pr->hasil }}">
                  </div>

                  <div class="mb-4">
                    <label for="aproval" class="block text-gray-700 font-semibold mb-2">Aproval</label>
                    <input type="text" name="aproval" id="aproval" class="w-full border rounded-md py-2 px-3"
                      value="{{ $pr->aproval }}">
                  </div>

                  <div class="mb-4">
                    <label for="ket" class="block text-gray-700 font-semibold mb-2">Keterangan</label>
                    <input type="text" name="ket" id="ket" class="w-full border rounded-md py-2 px-3"
                      value="{{ $pr->ket }}">
                  </div>

                  <div class="mb-4">
                    <label for="persen" class="block text-gray-700 font-semibold mb-2">Persentase</label>
                    <input type="text" name="persen" id="persen" class="w-full border rounded-md py-2 px-3"
                      value="{{ $pr->persen }}">
                  </div>

                  <div class="flex justify-end">
                    <button type="submit"
                      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    <button type="button"
                      class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2"
                      onclick="document.getElementById('editModal').style.display='none'">Tutup</button>
                  </div>
                </form>
              </div>
            </div>

            <script>
              document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('editModal').style.display = 'block';
              });
            </script>
          </table>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
