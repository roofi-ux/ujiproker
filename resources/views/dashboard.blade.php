<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

<<<<<<< HEAD
          <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-6 gap-3">
            <a href="{{ route('dashboard.hr.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Human Resource</h5>
            </a>

            <a href="{{ route('dashboard.ga.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">General Affair</h5>
            </a>

            <a href="{{ route('dashboard.finance.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Finance</h5>
            </a>

            <a href="{{ route('dashboard.mkt.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Marketing</h5>
            </a>

            <a href="{{ route('dashboard.cnc.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Sales</h5>
            </a>

            <a href="{{ route('dashboard.protech.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Protech</h5>
            </a>

            <a href="{{ route('dashboard.prd.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Production</h5>
            </a>

            <a href="{{ route('dashboard.bdrnd.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Bussiness Development
                Research & Development
              </h5>
            </a>

            <a href="{{ route('dashboard.qcs.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Quality Control Surabaya
              </h5>
            </a>

            <a href="{{ route('dashboard.qcp.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Quality Control Pasuruan
              </h5>
            </a>

            <a href="{{ route('dashboard.mt.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Sales Management Trainee
              </h5>
            </a>

            <a href="{{ route('dashboard.qa.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Quality Assurance</h5>
            </a>

            <a href="{{ route('dashboard.purchase.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Procurement</h5>
            </a>

            <a href="{{ route('dashboard.ecm.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">E-commerce</h5>
            </a>

            <a href="{{ route('dashboard.farm.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Farm
              </h5>
            </a>

            <a href="{{ route('dashboard.wrhs.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Warehouse</h5>
            </a>

            <a href="{{ route('dashboard.export.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Sales Export</h5>
=======
          <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-4">
            <!-- Divisi 1 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Human Resource</h5>
            </a>

            <!-- Divisi 2 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">General Affair</h5>
            </a>

            <!-- Divisi 3 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Finance</h5>
            </a>

            <!-- Divisi 4 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Marketing</h5>
            </a>

            <!-- Divisi 5 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Sales</h5>
            </a>

            <!-- Divisi 6 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Technology</h5>
            </a>

            <!-- Divisi 7 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Production</h5>
            </a>

            <!-- Divisi 8 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Research & Development</h5>
            </a>

            <!-- Divisi 9 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Legal</h5>
            </a>

            <!-- Divisi 10 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">IT Department</h5>
            </a>

            <!-- Divisi 11 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Customer Service</h5>
            </a>

            <!-- Divisi 12 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Public Relations</h5>
            </a>

            <!-- Divisi 13 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Internal Audit</h5>
            </a>

            <!-- Divisi 14 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Security</h5>
            </a>

            <!-- Divisi 15 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Training & Development</h5>
            </a>

            <!-- Divisi 16 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Procurement</h5>
            </a>

            <!-- Divisi 17 -->
            <a href="#"
              class="block p-6 bg-gray-800 border border-gray-700 shadow-md text-center hover:bg-gray-700 transition duration-200">
              <h5 class="mb-2 text-lg font-semibold tracking-tight text-gray-300">Logistics</h5>
>>>>>>> test-commit
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
