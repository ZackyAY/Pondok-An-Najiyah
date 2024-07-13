@extends('layouts.adminLayout')

@section('content')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 mt-20 ml-5">
        <div>
            <a href="#"
                class="flex items-center max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div
                    class="flex-shrink-0 w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center text-3xl font-bold text-gray-800">
                    100
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold mb-2">Pendaftar</h3>
                    <p class="text-gray-600">Jumlah pendaftar saat ini</p>
                </div>
            </a>
        </div>

        <div>
            <a href="#"
                class="flex items-center max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div
                    class="flex-shrink-0 w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center text-3xl font-bold text-gray-800">
                    100
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold mb-2">Berita</h3>
                    <p class="text-gray-600">Jumlah berita terbaru</p>
                </div>
            </a>
        </div>

        <div>
            <a href="#"
                class="flex items-center max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <div
                    class="flex-shrink-0 w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center text-3xl font-bold text-gray-800">
                    100
                </div>
                <div class="ml-4">
                    <h3 class="text-xl font-semibold mb-2">Acara</h3>
                    <p class="text-gray-600">Jumlah acara yang akan datang</p>
                </div>
            </a>
        </div>
    </div>
@endsection