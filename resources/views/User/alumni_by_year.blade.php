@extends('layouts.userLayout')
@section('title' )
    An-Najiyah
@endsection
@section('content')
<div class="mt-32 text-center">
        <h1 class="text-4xl sm:text-3xl font-bold text-gray-800 dark:text-gray-200" data-aos="zoom-out-down"
            data-aos-duration="2000">
            ALUMNI {{ $tahun }} AN-NAJIYAH
        </h1>
        
        <h1 class="text-2xl sm:text-2xl font-bold text-gray-800 dark:text-gray-200 mt-14" data-aos="zoom-out-up" data-aos-duration="2000">
            <div class="relative">
                <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="px-3 bg-blue-500 text-white font-bold">Alumni Tahun {{ $tahun }}</span>
                </div>
            </div>
        </h1>

        <div class="flex justify-start mt-4 ml-2" data-aos="zoom-out-up" data-aos-duration="2000">
            <label for="entries" class="text-gray-600 mr-2">Tampilkan Entri:</label>
            <select id="entries" name="entries" class="border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring focus:ring-blue-200">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
            <div class="relative">
        <input type="text" class="border border-gray-300 rounded-md px-2 py-1 focus:outline-none focus:ring focus:ring-blue-200" placeholder="Cari..." />
        <div class="absolute inset-y-0 right-0 flex items-center pr-3">
            <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a4 4 0 1 0-8 0 4 4 0 0 0 8 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.5 17.5l2.5 2.5" />
            </svg>
        </div>
    </div>
        </div>
        <div class="mt-8 ml-2 mr-2 table-fixed" data-aos="zoom-out-up" data-aos-duration="2000">    
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100 dark:bg-gray-800">
                    <th class="border border-gray-300 px-4 py-2">NISN</th>
                    <th class="border border-gray-300 px-4 py-2">NAMA</th>
                    <th class="border border-gray-300 px-4 py-2">ASAL KELAS</th>
                    <th class="border border-gray-300 px-4 py-2">LAMPIRAN FOTO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                    <td class="border border-gray-300 px-4 py-2">1234567890</td>
                    <td class="border border-gray-300 px-4 py-2">Dummy1</td>
                    <td class="border border-gray-300 px-4 py-2">Laki-laki</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">2</td>
                    <td class="border border-gray-300 px-4 py-2">0987654321</td>
                    <td class="border border-gray-300 px-4 py-2">Dummy2</td>
                    <td class="border border-gray-300 px-4 py-2">Perempuan</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">3</td>
                    <td class="border border-gray-300 px-4 py-2">1357924680</td>
                    <td class="border border-gray-300 px-4 py-2">Dummy3</td>
                    <td class="border border-gray-300 px-4 py-2">Laki-laki</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection


