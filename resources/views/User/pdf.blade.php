<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            width: 100px;
        }
        .content {
            margin: 0 auto;
            width: 80%;
        }
        .content h2 {
            text-align: center;
        }
        .content p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ $logo }}" alt="Logo">
        <h1>Pendaftaran Peserta Didik Baru</h1>
    </div>
    <div class="content">
        <p><strong>Tanggal Daftar:</strong> {{ $tgl_daftar }}</p>
        <p><strong>Tahun Ajaran:</strong> {{ $th_ajaran }}</p>
        <p><strong>Nama Lengkap:</strong> {{ $nm_peserta }}</p>
        <p><strong>Tempat Lahir:</strong> {{ $tmp_lahir }}</p>
        <p><strong>Tanggal Lahir:</strong> {{ $tgl_lahir }}</p>
        <p><strong>Jenis Kelamin:</strong> {{ $jk }}</p>
        <p><strong>Alamat:</strong> {{ $almt_peserta }}</p>
        @if ($image)
            <p><strong>Image:</strong></p>
            <img src="{{ $image }}" alt="Image" style="width: 200px;">
        @endif
    </div>
</body>
</html>
