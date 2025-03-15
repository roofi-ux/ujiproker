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
                <th rowspan="2" width="7%">Program Kerja</th>
                <th rowspan="2" width="7%">Rencana Kerja</th>
                <th rowspan="2" width="15%">Target</th>
                <th colspan="4" style="text-align: center;" width="10%" data-dt-order="disable">Januari</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Hasil dicapai</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Achievement</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Persentase</th>
                <th rowspan="2" width="5%" data-dt-order="disable" style="text-align: center;">Keterangan</th>
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
              @foreach ($prds as $prd)
                <tr>
                  <td>{{ $prd->proker }}</td>
                  <td>{{ $prd->renker }}</td>
                  <td>{{ $prd->target }}</td>
                  <td>{{ $prd->janw1 == 'OK' ? '✔️' : $prd->janw1 }}</td>
                  <td>{{ $prd->janw2 == 'OK' ? '✔️' : $prd->janw2 }}</td>
                  <td>{{ $prd->janw3 == 'OK' ? '✔️' : $prd->janw3 }}</td>
                  <td>{{ $prd->janw4 == 'OK' ? '✔️' : $prd->janw4 }}</td>
                  <td class=" whitespace-normal break-words" style="max-width: 100px;">{{ $prd->hasil }}</td>
                  <td style="text-align: center;">{{ $prd->achieve }}</td>
                  <td style="text-align: center;">{{ $prd->ket }}</td>
                  <td style="text-align: center;">{{ $prd->persen }}</td>
                  <td style="text-align: center">
                    @role('user')
                      @if (empty($prd->hasil))
                        <a href="{{ route('dashboard.prd.edit', $prd->id) }}"
                          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Input
                          Hasil</a>
                      @else
                        <button disabled
                          class="text-white bg-gray-500 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Input Hasil
                        </button>
                      @endif
                    @endrole
                    @role('admin')
                      <a href="{{ route('dashboard.prd.edit', $prd->id) }}"
                        class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">Input
                        Data</a>
                    @endrole

                  </td>
                  <td></td>

                </tr>

            </tbody>
            {{-- <div id="modal" tabindex="-1" aria-hidden="true"
              class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
              <div class="bg-white p-6 rounded-lg w-1/2">
                <h2 class="text-2xl font-semibold text-bla ck mb-4">Edit Data PRD</h2>
                <form action="{{ route('dashboard.prd.update', $pr->id) }}" method="POST">
                  @csrf
                  @method('PUT')

                  <div class="mb-4">
                    <label for="hasil" class="block text-gray-700 font-semibold mb-2">Hasil</label>
                    <input type="text" name="hasil" id="hasil"
                      class="w-full text-black border rounded-md py-2 px-3" value="{{ $pr->hasil }}">
                  </div>

                  <div class="mb-4">
                    <label for="aproval" class="block text-gray-700 font-semibold mb-2">Aproval</label>
                    <input type="text" name="aproval" id="aproval"
                      class="w-full text-black border rounded-md py-2 px-3" value="{{ $pr->aproval }}">
                  </div>

                  <div class="mb-4">
                    <label for="ket" class="block text-gray-700 font-semibold mb-2">Keterangan</label>
                    <input type="text" name="ket" id="ket"
                      class="w-full border text-black rounded-md py-2 px-3" value="{{ $pr->ket }}">
                  </div>

                  <div class="mb-4">
                    <label for="persen" class="block text-gray-700 font-semibold mb-2">Persentase</label>
                    <input type="text" name="persen" id="persen"
                      class="w-full text-black border rounded-md py-2 px-3" value="{{ $pr->persen }}">
                  </div>

                  <div class="flex justify-end">
                    <button type="submit"
                      class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Simpan</button>
                    <button type="button"
                      class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded ml-2"
                      onclick="document.getElementById('modal').style.display='none'">Tutup</button>
                  </div>
                </form>
              </div>
            </div> --}}

            <!-- Main modal -->

            {{-- <script>
              document.addEventListener('DOMContentLoaded', function() => {
                const modal = document.getElementById('modal');
                const editButtons = document.querySelectorAll('.edit-btn');
                // Edit
                document.querySelectorAll('.edit-btn').forEach(button => {
                  button.addEventListener('click', (event) => {
                    event.preventDefault();
                    const id = button.dataset.id;
                    fetch(`/dashboard/prd/${id}/edit`)
                      .then(response => response.json()) // Mengubah response.text() menjadi response.json()
                      .then(data => {
                        if (data.html) {
                          modal.querySelector('.bg-white').innerHTML = data.html;
                          modal.classList.remove('hidden');
                        } else {
                          console.error('Error:', data.error);
                        }
                      })
                      .catch(error => {
                        console.error('Error fetch:', error);
                      });
                  });
                });

                // ... (create and delete scripts) ...
              });
            </script> --}}

            {{-- <div id="edit-prd-modal-{{ $pr->id }}" tabindex="-1" aria-hidden="true"
              class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
              <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                  <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Edit Data PRDS
                    </h3>
                    <button type="button"
                      class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                      data-modal-toggle="edit-prd-modal-{{ $pr->id }}">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                  </div>
                  <div class="p-4 md:p-5">
                    <form class="space-y-4" action="{{ route('dashboard.prd.update', $pr->id) }}" method="POST">
                      @csrf
                      @method('PUT')
                      <div>
                        <label for="proker"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Proker</label>
                        <textarea name="proker" id="proker" rows="4"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Program Kerja">{{ $pr->proker }}</textarea>
                      </div>
                      <div>
                        <label for="renker"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Renker</label>
                        <textarea name="renker" id="renker" rows="4"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Rencana Kerja">{{ $pr->renker }}</textarea>
                      </div>
                      <div>
                        <label for="target"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target</label>
                        <textarea name="target" id="target" rows="4"
                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Target">{{ $pr->target }}</textarea>
                      </div>
                      <div>
                        <label for="Janw1"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Janw1</label>
                        <input type="text" name="Janw1" id="Janw1"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Januari Minggu 1" value="{{ $pr->Janw1 }}">
                      </div>
                      <div>
                        <label for="Janw2"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Janw2</label>
                        <input type="text" name="Janw2" id="Janw2"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Januari Minggu 2" value="{{ $pr->Janw2 }}">
                      </div>
                      <div>
                        <label for="Janw3"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Janw3</label>
                        <input type="text" name="Janw3" id="Janw3"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Januari Minggu 3" value="{{ $pr->Janw3 }}">
                      </div>
                      <div>
                        <label for="Janw4"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Janw4</label>
                        <input type="text" name="Janw4" id="Janw4"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Januari Minggu 4" value="{{ $pr->Janw4 }}">
                      </div>
                      <div>
                        <label for="hasil"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil</label>
                        <input type="text" name="hasil" id="hasil"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Hasil" value="{{ $pr->hasil }}">
                      </div>
                      <div>
                        <label for="aproval"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aproval</label>
                        <input type="text" name="aproval" id="aproval"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Aproval" value="{{ $pr->aproval }}">
                      </div>
                      <div>
                        <label for="ket"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <input type="text" name="ket" id="ket"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Keterangan" value="{{ $pr->ket }}">
                      </div>
                      <div>
                        <label for="persen"
                          class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Persen</label>
                        <input type="text" name="persen" id="persen"
                          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                          placeholder="Persentase" value="{{ $pr->persen }}">
                      </div>

                      <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                        Data</button>
                    </form>
                  </div>
                </div>
              </div>
            </div> --}}
          </table>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
