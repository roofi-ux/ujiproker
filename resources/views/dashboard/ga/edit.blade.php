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
            <h1 class="text-2xl font-bold mb-4">Data Hasil ga</h1>

            <div class="mb-4">
              <a href="{{ route('dashboard.ga.index') }}"
                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                Kembali
              </a>
            </div>
            @if (is_object($ga))
              {{-- {{ dd($ga) }} --}}
            @else
              {{-- Handle the error or provide a default object --}}
              <?php $ga = (object) ['id' => '', 'proker' => '', 'renker' => '', 'target' => '', 'Janw1' => '', 'Janw2' => '', 'Janw3' => '', 'Janw4' => '', 'hasil' => '', 'aproval' => '', 'ket' => '', 'persen' => '']; ?>
            @endif

            <div class="py-12">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                  <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('dashboard.ga.update', $ga->id) }}"
                      enctype="multipart/form-data">
                      @csrf
                      @method('PUT')

                      <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                          <input type="text" name="proker" id="proker"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " value="{{ old('proker', $ga->proker) }}" readonly />
                          <label for="proker"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:end-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Proker</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                          <input type="text" name="renker" id="renker"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " value="{{ old('renker', $ga->renker) }}" readonly />
                          <label for="renker"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:end-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Renker</label>
                        </div>
                      </div>
                      <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                          <input type="text" name="target" id="target"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " value="{{ old('target', $ga->target) }}" readonly />
                          <label for="target"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:end-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Target</label>
                        </div>
                      </div>
                      <div class="grid md:grid-cols-4 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                          <input type="text" name="janw1" id="janw1"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " value="{{ old('janw1', $ga->janw1) }}" readonly />
                          <label for="janw1"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:end-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Januari
                            W1</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                          <input type="text" name="janw2" id="janw2"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " value="{{ old('janw2', $ga->janw2) }}" readonly />
                          <label for="janw2"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:end-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Januari
                            W2</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                          <input type="text" name="janw3" id="janw3"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " value="{{ old('janw3', $ga->janw3) }}" readonly />
                          <label for="janw3"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:end-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Januari
                            W3</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                          <input type="text" name="janw4" id="janw4"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " value="{{ old('janw4', $ga->janw4) }}" readonly />
                          <label for="janw4"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:end-0 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Januari
                            W4</label>
                        </div>
                      </div>

                      <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                          <label for="hasil_pdf"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hasil (PDF)</label>
                          @if (auth()->check() && auth()->user()->hasRole('ga'))
                            <input type="file" name="hasil_pdf" id="hasil_pdf"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Upload File PDF">
                            @error('hasil_pdf')
                              <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                            @enderror
                            @if ($ga->hasil)
                              <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">File PDF Tersimpan:
                                <a href="{{ Storage::url($ga->hasil) }}" target="_blank"
                                  class="underline text-blue-600 dark:text-blue-500 hover:text-blue-800 dark:hover:text-blue-700">{{ Str::afterLast($ga->hasil, '/') }}</a>
                              </p>
                            @endif
                          @else
                            @if ($ga->hasil)
                              <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">File PDF
                                Tersimpan:</p>
                              <a href="{{ Storage::url($ga->hasil) }}" target="_blank"
                                class="underline text-blue-600 dark:text-blue-500 hover:text-blue-800 dark:hover:text-blue-700">{{ Str::afterLast($ga->hasil, '/') }}</a>
                            @else
                              <p class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Belum ada file
                                PDF diupload.</p>
                            @endif
                          @endif
                        </div>

                        <div class="relative z-0 w-full mb-6 group">
                          <label for="persen"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Persentase</label>
                          @if (auth()->check() && auth()->user()->hasRole('admin'))
                            <ul
                              class="items-center w-full text-sm font-medium text-gray-900 bg-gray-50 border border-gray-300 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                              <li>
                                <div class="flex items-center ps-3">
                                  <input id="persen-50-59" type="radio" value="50%-59%" name="persen"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                    {{ old('persen', $ga->persen) == '50%-59%' ? 'checked' : '' }} required>
                                  <label for="persen-50-59"
                                    class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">50%-59%</label>
                                </div>
                              </li>
                              <li>
                                <div class="flex items-center ps-3">
                                  <input id="persen-60-69" type="radio" value="60%-69%" name="persen"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                    {{ old('persen', $ga->persen) == '60%-69%' ? 'checked' : '' }} required>
                                  <label for="persen-60-69"
                                    class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">60%-69%</label>
                                </div>
                              </li>
                              <li>
                                <div class="flex items-center ps-3">
                                  <input id="persen-70-79" type="radio" value="70%-79%" name="persen"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                    {{ old('persen', $ga->persen) == '70%-79%' ? 'checked' : '' }} required>
                                  <label for="persen-70-79"
                                    class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">70%-79%</label>
                                </div>
                              </li>
                              <li>
                                <div class="flex items-center ps-3">
                                  <input id="persen-80-89" type="radio" value="80%-89%" name="persen"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                    {{ old('persen', $ga->persen) == '80%-89%' ? 'checked' : '' }} required>
                                  <label for="persen-80-89"
                                    class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">80%-89%</label>
                                </div>
                              </li>
                              <li>
                                <div class="flex items-center ps-3">
                                  <input id="persen-90-100" type="radio" value="90%-100%" name="persen"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                    {{ old('persen', $ga->persen) == '90%-100%' ? 'checked' : '' }} required>
                                  <label for="persen-90-100"
                                    class="w-full py-2 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">90%-100%</label>
                                </div>
                              </li>
                            </ul>
                          @else
                            <input type="text"
                              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                              value="{{ old('persen', $ga->persen) }}" readonly />
                          @endif
                          @error('persen')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>

                      </div>
                      <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                          <label for="achieve"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Achieve</label>
                          @if (auth()->check() && auth()->user()->hasRole('admin'))
                            <select name="achieve" id="achieve"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              required>
                              <option value="" {{ old('achieve', $ga->achieve) == '' ? 'selected' : '' }}>--
                                Pilih Achieve --</option>
                              <option value="Achieve"
                                {{ old('achieve', $ga->achieve) == 'Achieve' ? 'selected' : '' }}>Achieve</option>
                              <option value="Not Achieve"
                                {{ old('achieve', $ga->achieve) == 'Not Achieve' ? 'selected' : '' }}>Not Achieve
                              </option>
                            </select>
                          @else
                            <input type="text"
                              class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                              value="{{ old('achieve', $ga->achieve) }}" readonly />
                          @endif
                          @error('achieve')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                          <label for="ket"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                          @if (auth()->check() && auth()->user()->hasRole('admin'))
                            <textarea name="ket" id="ket" rows="3"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Keterangan Tambahan (Opsional)">{{ old('ket', $ga->ket) }}</textarea>
                          @else
                            <textarea id="ket" rows="3"
                              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              readonly>{{ old('ket', $ga->ket) }}</textarea>
                          @endif
                          @error('ket')
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                          @enderror
                        </div>
                      </div>

                      <div class="flex justify-end mt-4">

                        <button type="submit"
                          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          input Data</button>

                      </div>
                    </form>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
