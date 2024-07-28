@extends('layouts.userLayout')

@section('content')
    <div class="max-w-2xl mx-auto mt-32 mb-32 p-4 bg-white shadow-md rounded-lg">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">{{ session('success') }}</strong>
                <span class="block sm:inline">Data Successfully Uploaded</span>
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Whoops!</strong>
                <span class="block sm:inline">There were some problems with your input.</span>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h1 class="text-2xl font-bold mb-6 text-center">Pendaftaran Peserta Didik Baru</h1>
        <form action="{{ route('daftar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="th_ajaran" class="block text-sm font-medium text-gray-700">Tahun Ajaran</label>
                <select name="th_ajaran" id="th_ajaran" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="" {{ old('th_ajaran') == '' ? 'selected' : '' }}>Pilih Tahun Ajaran</option>
                    <option value="2023/2024" {{ old('th_ajaran') == '2023/2024' ? 'selected' : '' }}>2023/2024</option>
                    <option value="2024/2025" {{ old('th_ajaran') == '2024/2025' ? 'selected' : '' }}>2024/2025</option>
                    <option value="2025/2026" {{ old('th_ajaran') == '2025/2026' ? 'selected' : '' }}>2025/2026</option>
                    <option value="2026/2027" {{ old('th_ajaran') == '2026/2027' ? 'selected' : '' }}>2026/2027</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tanggal_daftar" class="block text-sm font-medium text-gray-700">Tanggal Daftar</label>
                <input type="date" name="tgl_daftar" id="tanggal_daftar" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    value="{{ old('tgl_daftar') }}">
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap Siswa</label>
                <input type="text" name="nm_peserta" id="nama" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    value="{{ old('nm_peserta') }}">
            </div>
            <div class="mb-4">
                <span class="block text-sm font-medium text-gray-700">Jenis Kelamin</span>
                <div class="flex items-center mt-2 space-x-4">
                    <div class="flex items-center">
                        <input type="radio" name="jk" id="laki-laki" value="Laki-laki"
                            {{ old('jk') == 'Laki-laki' ? 'checked' : '' }} required>
                        <label for="laki-laki" class="ml-2 text-sm font-medium text-gray-700">Laki-laki</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" name="jk" id="perempuan" value="Perempuan"
                            {{ old('jk') == 'Perempuan' ? 'checked' : '' }} required>
                        <label for="perempuan" class="ml-2 text-sm font-medium text-gray-700">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label for="tempat" class="block text-sm font-medium text-gray-700">Tempat Lahir</label>
                <input type="text" name="tmp_lahir" id="tempat" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    value="{{ old('tmp_lahir') }}">
            </div>
            <div class="mb-4">
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tanggal" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    value="{{ old('tgl_lahir') }}">
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <textarea name="almt_peserta" id="almt_peserta" required
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('almt_peserta') }}</textarea>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image"
                    class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
            </div>
            <button type="submit"
                class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-green-400 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Daftar
            </button>
        </form>
    </div>

    @if (session('pdf_path'))
        <script>
            window.onload = function() {
                const pdfPath = "{{ asset('storage/' . session('pdf_path')) }}";
                const link = document.createElement('a');
                link.href = pdfPath;
                link.download = 'Pendaftaran.pdf';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            };
        </script>
    @endif
@endsection
