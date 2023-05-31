<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'Hasil Tes Buta Warna - SITAWA')

<!-- Main Content -->
@section('content')
<div class="container-fluid">
    <div class="col mt-3">
        <div class="col-xs-12 bg-breadcrumb">
            <ol class="breadcrumb bg-transparent ms-2 text-center">
                <li class="breadcrumb-item">
                    <a href="{{ route('beranda') }}" class="text-dark">Beranda</a>
                </li>
                <li class="breadcrumb-item active text-light" aria-current="page">
                    Hasil Tes Buta Warna
                </li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body m-3">
                        <a href="{{ route('result') }}" class="a-custom">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path fill="none" d="M0 0h24v24H0z"/><path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z"/></svg>
                            Kembali
                        </a>
                        <h4 class="text-center mt-3">Hasil Tes Buta Warna</h4>
                        <table class="table mt-5">
                            @foreach ($profil as $data)
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td class="text-capitalize">{{ $data->name }}</td>
                                </tr>
                                <tr>
                                    <td>Usia</td>
                                    <td>:</td>
                                    <td class="text-capitalize">{{ $age }} Tahun</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td class="text-capitalize">{{ $data->gender }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td class="text-capitalize">{{ $data->address }}</td>
                                </tr>
                                <tr>
                                    <td>Desa / Kelurahan</td>
                                    <td>:</td>
                                    <td class="text-capitalize">{{ $data->ward }}</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td class="text-capitalize">{{ $data->subdistrict }}</td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td>:</td>
                                    <td class="text-capitalize">{{ $data->city }}</td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td class="text-capitalize">{{ $data->province }}</td>
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
                            @endforeach
                        </table>
                        <div class="text-end">
                            <a href="{{ route('unduh.pdf', $testId) }}" class="btn btn-color btn-sm bg-primary">Unduh Hasil Tes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
