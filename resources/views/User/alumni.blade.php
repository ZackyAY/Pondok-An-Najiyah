@extends('layouts.userLayout')
@section('title')
    Alumni An-Najiyah
@endsection
@section('content')
<div class="mt-32 text-center">
    <h1 class="text-4xl sm:text-3xl font-bold text-gray-800 dark:text-gray-200" data-aos="zoom-out-down"
        data-aos-duration="2000">
        ALUMNI AN-NAJIYAH
    </h1>
    
    <h1 class="text-2xl sm:text-2xl font-bold text-gray-800 dark:text-gray-200 mt-14" data-aos="zoom-out-up" data-aos-duration="2000">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="px-3 bg-blue-500 text-slate-300 font-bold">ALUMNI BERDASARKAN TAHUN</span>
            </div>
        </div>
    </h1>

    <div class="flex flex-col mt-10 px-80" data-aos="zoom-out-up" data-aos-duration="2000">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="alumniTable" class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="bg-blue-100 text-blue-700 uppercase text-xs font-semibold tracking-wider">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left hover:bg-blue-300 active:bg-blue-500 transition duration-200">
                            Alumni (Lulus) Tahun
                        </th>
                        <th scope="col" class="px-6 py-3 text-left hover:bg-blue-300 active:bg-blue-500 transition duration-200">
                            Tahun Pelajaran Saat Lulus
                        </th>
                        <th scope="col" class="px-6 py-3 text-left hover:bg-blue-300 active:bg-blue-500 transition duration-200">
                            Link/Url
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @for ($year = 2023, $i = 0; $year >= 1998; $year--, $i++)
                        <tr class="{{ $i % 2 == 0 ? 'bg-white' : 'bg-gray-50' }} border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">{{ $year }}</td>
                            <td class="px-6 py-4">TP.{{ $year - 1 }}-{{ $year }}</td>
                            <td class="px-6 py-4">
                                @if ($year == 2023)
                                    <a href="{{ route('alumni.2023') }}" class="font-medium text-blue-600 hover:text-blue-800" target="_blank">klik di sini</a>
                                @else
                                    <span class="font-medium text-gray-600">n/a (belum tersedia)</span>
                                @endif
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#alumniTable').DataTable({
                "pageLength": 5,
                "lengthMenu": [5, 10, 25, 50], 
                "searching": true, 
                "order": [[0, 'desc']],
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ entri",
                    "search": "Cari:",
                    "info": "Menampilkan _START_ hingga _END_ dari _TOTAL_ entri",
                    "infoEmpty": "Tidak ada entri",
                    "infoFiltered": "(difilter dari _MAX_ entri total)",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>
@endsection
