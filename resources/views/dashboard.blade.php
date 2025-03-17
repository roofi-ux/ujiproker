<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-12xl mx-auto sm:px-6 lg:px-6">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

          <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 gap-2">
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
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Technology</h5>
            </a>

            <a href="{{ route('dashboard.prd.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Production</h5>
            </a>

            <a href="{{ route('dashboard.bdrnd.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Research & Development
              </h5>
            </a>

            <a href="{{ route('dashboard.qcs.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">QCS</h5>
            </a>

            <a href="{{ route('dashboard.qcp.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">QCP</h5>
            </a>

            <a href="{{ route('dashboard.mt.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">mt</h5>
            </a>

            <a href="{{ route('dashboard.qa.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">qa</h5>
            </a>

            <a href="{{ route('dashboard.purchase.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">purchase</h5>
            </a>

            <a href="{{ route('dashboard.ecm.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">ecm</h5>
            </a>

            <a href="{{ route('dashboard.farm.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">farm
              </h5>
            </a>

            <a href="{{ route('dashboard.wrhs.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Wrhs</h5>
            </a>

            <a href="{{ route('dashboard.export.index') }}"
              class="block max-w-xs p-4 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
              <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Export</h5>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</x-app-layout>
