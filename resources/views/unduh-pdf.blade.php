<!DOCTYPE html>
<html>
<head>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda */
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        .header {
            position: relative;
            text-align: center;
            margin-bottom: 20px;
            padding: 20px 50px 0 50px;
        }
        .content {
            padding: 10px 50px 0 50px;
            margin-bottom: 40px;
        }
        h3 {
            border-bottom: 2px solid;
            padding-bottom: 10px;
            text-transform: uppercase;
        }
        h4 {
            text-transform: uppercase;
        }
        .table-first {
            padding-left: 30px;
        }
        .ttd {
            padding-top: 30px
        }
        div.absolute {
            position: absolute;
            right: 50px;
            width: 220px;
            height: 100px;
        }
        .border-bottom {
            border-bottom: 1px solid;
            margin-right: 50px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h3>Surat Keterangan Hasil Tes Buta Warna</h3>
    </div>
    <div class="content">
        <p>Yang bertanda tangan dibawah ini, dokter ............................., menerangkan bahwa :</p>
        @foreach ($profil as $data)
        <table class="table-first">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>{{ $data->name }}</td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td>{{ $age }} Tahun</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>{{ $data->gender }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $data->address }}</td>
            </tr>
            <tr>
                <td>Desa / Kelurahan</td>
                <td>:</td>
                <td>{{ $data->ward }}</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td>{{ $data->subdistrict }}</td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td>{{ $data->city }}</td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td>{{ $data->province }}</td>
            </tr>
        </table>
            @foreach ($result as $row)
            @php
                setlocale(LC_ALL, 'IND');
                $date = \Carbon\Carbon::parse($row->created_at)->locale('id');
                $date->settings(['formatFunction' => 'translatedFormat']);
            @endphp
                <p style="padding-top: 10px;">Pada tanggal {{ $date->format('d F Y') }} telah melakukan pemeriksan tes buta warna menggunakan aplikasi Sitawa dengan hasil:</p>
            @endforeach
            <table style="font-weight: bold; padding-top: 10px;">
                <tr>
                    <td>Tes Ishihara</td>
                    <td>:</td>
                    <td>{{ $hasilIshihara }}</td>
                </tr>
                @if ($hasilIshihara == "Buta Warna Parsial")
                    <tr>
                        <td>Tes Cambridge</td>
                        <td>:</td>
                        <td>{{ $hasilCambridge }}</td>
                    </tr>
                @endif
            </table>
        @endforeach
        @php
            $date = \Carbon\Carbon::now()->locale('id');
            $date->settings(['formatFunction' => 'translatedFormat']);
        @endphp
        <div class="absolute">
            <p class="ttd">Jakarta, {{ $date->format('d F Y') }}</p>
            <br>
            <br>
            <br>
            <br>
            <p class="border-bottom">dr. ...................................</p>
            <p>NIP. .................................</p>
        </div>
    </div>
</body>
</html>
