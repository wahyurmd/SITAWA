<!DOCTYPE html>
<html>
<head>
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda */
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            border-bottom: 1px;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h3>Surat Keterangan Hasil Buta Warna</h3>
    </div>
    <div class="content">
        <p>Menerangkan bahwa :</p>
        {{-- @foreach ($profil as $data)
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
            @foreach ($result as $row)
                <tr>
                    <td>Pelaksanaan Tes</td>
                    <td>:</td>
                    <td>{{ \Carbon\Carbon::parse($row->created_at)->format('d-m-Y H:i:s') }}</td>
                </tr>
            @endforeach
            <tr>
                <td>Hasil Tes Ishihara</td>
                <td>:</td>
                <td>{{ $hasilIshihara }}</td>
            </tr>
            @if ($hasilIshihara == "Buta Warna Parsial")
                <tr>
                    <td>Hasil Tes Cambridge</td>
                    <td>:</td>
                    <td>{{ $hasilCambridge }}</td>
                </tr>
            @endif
        @endforeach --}}
    </div>
</body>
</html>
