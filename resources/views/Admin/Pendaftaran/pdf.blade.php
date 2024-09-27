<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pendaftaran Peserta Didik Baru</title>
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            margin: 0;
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        .container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .header-container {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .header-container img {
            max-width: 80px;
            margin-right: 20px;
        }

        .header-text {
            text-align: left;
        }

        .header-text h1 {
            font-size: 18px;
            margin: 0;
        }

        .header-text p {
            margin: 0;
        }

        .separator {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }

        .separator p {
            font-size: 18px;
            font-weight: bold;
            margin: 0;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
        }

        .title h1 {
            font-size: 18px;
            margin: 0;
        }

        .section {
            margin-bottom: 20px;
        }

        .section h2 {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .section p {
            margin: 5px 0;
        }

        .table-container {
            display: flex;
            justify-content: center;
            overflow-x: auto; /* Mengatasi jika tabel melebihi lebar kertas A4 */
        }

        table {
            width: 90%;
            max-width: 100%; /* Lebar maksimum tabel */
            margin-left: 25px;
            border-collapse: collapse;
            margin-bottom: 20px;
            table-layout: fixed; /* Mengatur lebar tabel agar tetap */
        }

        th,
        td {
            padding: 8px 12px; /* Penyesuaian padding */
            text-align: left;
            border: 1px solid #ddd;
            word-wrap: break-word; /* Memastikan teks di dalam sel dapat di-break jika terlalu panjang */
            overflow-wrap: break-word; /* Sama seperti di atas, untuk browser yang berbeda */
        }

        tr:nth-child(even) {
            background-color: #f3f4f6;
        }

        .footer {
            text-align: start;
            margin-left: 25px;
            margin-top: 20px;
            margin-bottom: 50px;
            font-weight: bold;
        }

        .signature-section {
            display: flex;
            margin-left: 70%;
            /* justify-content: end; */
            margin-top: 5px;
        }

        .signature {
            text-align: center;
            width: 45%;
        }

        .signature-date {
            display: flex;
            margin-left: 68%;
            margin-bottom: 5px;
            /* margin-top: 30px; */
        }

        .image {
            text-align: center;
            margin-top: 10px;
        }

        .image img {
            width: 80px;
            height: 80px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header-container">
            <img src="{{ $logo }}" alt="Logo Sekolah">
            <div class="header-text">
                <h1>YAYASAN AN-NAJIYAH</h1>
                <h1>SEKOLAH MENENGAH ATAS</h1>
                <h1>SMA AN-NAJIYAH</h1>
                <p>JL. SIDOSERMO IV / 7, Sidosermo, Kec. Wonocolo, Kota Surabaya Prov. Jawa Timur</p>
            </div>
        </div>
        <div class="separator">
            <p>
                ___________________________________________________________________________
            </p>
        </div>
        <div class="title">
            <h1>DETAIL PENDAFTARAN SISWA</h1>
        </div>
        <div class="table-container">
            <table>
                <tr>
                    <th>Tahun Ajaran</th>
                    <td>{{ $th_ajaran }}</td>
                </tr>
                <tr>
                    <th>Tanggal Daftar</th>
                    <td>{{ $tgl_daftar }}</td>
                </tr>
                <tr>
                    <th>Nama Lengkap Siswa</th>
                    <td>{{ $nm_peserta }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $jk }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $tmp_lahir }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $tgl_lahir }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $almt_peserta }}</td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>Demikian data diri kami sampaikan untuk dapat dipergunakan sebagaimana mestinya</p>
        </div>
        <p class="signature-date">Surabaya, {{ $tgl_daftar }}</p>
        <div class="signature-section">
            <div class="signature">
                <p>Calon Siswa</p>
                <br><br><br>
                <p>(__________________)</p>
            </div>
        </div>
    </div>
</body>

</html>