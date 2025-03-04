<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <div class="container mx-auto py-6">
            <h1 class="text-2xl font-bold mb-4">Edit Data PRDS</h1>

            <div class="mb-4">
              <a href="{{ route('dashboard.prd.index') }}"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                Kembali
              </a>
            </div>
            @if (is_object($prd))
              {{-- {{ dd($prd) }} --}}
            @else
              {{-- Handle the error or provide a default object --}}
              <?php $prd = (object) ['id' => '', 'proker' => '', 'renker' => '', 'target' => '', 'Janw1' => '', 'Janw2' => '', 'Janw3' => '', 'Janw4' => '', 'hasil' => '', 'aproval' => '', 'ket' => '', 'persen' => '']; ?>
            @endif

            <div class="text-gray-900 shadow-md rounded-lg p-6">
              <form class="space-y-4" action="{{ route('dashboard.prd.update', $prd->id ?? '') }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                  <label for="proker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program
                    Kerja</label>
                  <textarea name="proker" id="proker" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Program Kerja">{{ $prd->proker }}</textarea>
                </div>
                <div>
                  <label for="renker" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rencana
                    Kerja</label>
                  <textarea name="renker" id="renker" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Rencana Kerja">{{ $prd->renker }}</textarea>
                </div>
                <div>
                  <label for="target"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Target</label>
                  <textarea name="target" id="target" rows="4"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Target">{{ $prd->target }}</textarea>
                </div>
                <div>
                  <label for="Janw1"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Janaw1</label>
                  <input type="text" name="Janw1" id="Janw1"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Januari Minggu 1" value="{{ $prd->janw1 }}">
                </div>
                <div>
                  <label for="Janw2"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Janw2</label>
                  <input type="text" name="Janw2" id="Janw2"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Januari Minggu 2" value="{{ $prd->janw2 }}">
                </div>
                <div>
                  <label for="Janw3"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Janw3</label>
                  <input type="text" name="Janw3" id="Janw3"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Januari Minggu 3" value="{{ $prd->janw3 }}">
                </div>
                <div>
                  <label for="Janw4"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Janw4</label>
                  <input type="text" name="Janw4" id="Janw4"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Januari Minggu 4" value="{{ $prd->janw4 }}">
                </div>
                <div>
                  <label for="hasil"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil</label>
                  <input type="text" name="hasil" id="hasil"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Hasil" value="{{ $prd->hasil }}">
                </div>
                <div>
                  <label for="aproval"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Approval</label>
                  <select name="aproval" id="aproval"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="approve" {{ $prd->aproval == 'approve' ? 'selected' : '' }}>Approve</option>
                    <option value="not_approve" {{ $prd->aproval == 'not_approve' ? 'selected' : '' }}>Not Approve
                    </option>
                  </select>
                </div>
                <div>
                  <label for="ket"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                  <input type="text" name="ket" id="ket"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Keterangan" value="{{ $prd->ket }}">
                </div>
                <div>
                  <label for="persen"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Persentase</label>
                  <input type="text" name="persen" id="persen"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Persentase" value="{{ $prd->persen }}">
                </div>

                <button type="submit"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                  Data</button>
              </form>
            </div>
          </div>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
