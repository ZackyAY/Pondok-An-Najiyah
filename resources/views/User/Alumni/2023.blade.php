@extends('layouts.userLayout')
@section('title', 'Alumni 2023 An-Najiyah')

@section('content')
<div class="mt-32 text-center">
    <h1 class="text-4xl sm:text-3xl font-bold text-gray-800 dark:text-gray-200" data-aos="zoom-out-down"
        data-aos-duration="2000">
        ALUMNI 2023 AN-NAJIYAH
    </h1>
    
    <h1 class="text-2xl sm:text-2xl font-bold text-gray-800 dark:text-gray-200 mt-14" data-aos="zoom-out-up" data-aos-duration="2000">
        <div class="relative">
            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                <div class="w-full border-t border-gray-300 dark:border-gray-700"></div>
            </div>
            <div class="relative flex justify-center">
                <span class="px-3 bg-blue-500 text-slate-300 font-bold">ALUMNI TAHUN 2023</span>
            </div>
        </div>
    </h1>

    <div class="flex flex-col mt-10 px-80" data-aos="zoom-out-up" data-aos-duration="2000">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="alumniTable" class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="bg-blue-100 text-blue-700 uppercase text-xs font-semibold tracking-wider">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left hover:bg-blue-300 active:bg-blue-500 transition duration-200">
                            NIS
                        </th>
                        <th scope="col" class="px-6 py-3 text-left hover:bg-blue-300 active:bg-blue-500 transition duration-200">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3 text-left hover:bg-blue-300 active:bg-blue-500 transition duration-200">
                            Kelas Asal Alumni
                        </th>
                        <th scope="col" class="px-6 py-3 text-left hover:bg-blue-300 active:bg-blue-500 transition duration-200">
                            Lampiran Foto
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alumni as $alum)
                        <tr class="{{ $loop->even ? 'bg-white' : 'bg-gray-50' }} border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                            <td class="px-6 py-4">{{ $alum->nis }}</td>
                            <td class="px-6 py-4">{{ $alum->nama }}</td>
                            <td class="px-6 py-4">{{ $alum->kelas_asal }}</td>
                            <td class="px-6 py-4">
                                @if ($alum->foto)
                                    <img src="{{ asset('storage/' . $alum->foto) }}" alt="Foto" class="w-20 h-20 object-cover">
                                @else
                                    <span class="font-medium text-gray-600">Tidak ada foto</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
                "order": [[0, 'asc']],
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
