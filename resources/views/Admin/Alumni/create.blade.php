@extends('layouts.adminLayout')

@section('content')
    <div class="max-w-2xl mx-auto p-4 bg-white shadow-md rounded-lg mt-10">
        <h1 class="text-2xl font-bold mb-6">TAMBAH DATA ALUMNI</h1>
        <form action="{{ route('admin.alumni.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Other form fields go here -->
            <div class="mb-4">
                <label for="nis" class="block text-sm font-medium text-gray-700">NIS</label>
                <input type="number" name="nis" id="nis" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="kelas_asal" class="block text-sm font-medium text-gray-700">Kelas Asal</label>
                <input type="text" name="kelas_asal" id="kelas_asal" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="foto" class="block text-sm font-medium text-gray-700">Foto</label>
                <input type="file" name="foto" id="foto"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <div class="mb-4">
                <label for="tahun_lulus" class="block text-sm font-medium text-gray-700">Tahun Lulus</label>
                <input type="number" name="tahun_lulus" id="tahun_lulus" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            </div>
            <button type="submit"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-500 hover:bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Submit
            </button>
        </form>

    </div>
@endsection
