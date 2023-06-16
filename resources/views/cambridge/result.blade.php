<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'Hasil Tes Cambridge - SITAWA')

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
                    Hasil Tes Cambridge
                </li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card mb-5">
                    <div class="card-body m-3">
                        <div class="text-center">
                            <h4 class="fw-bold">Hasil Tes Cambridge</h4>
                        </div>
                        <div class="table-responsive pt-5">
                            <table class="table border-top">
                                <tr>
                                    <th width="20%">Jenis Tes</th>
                                    <td>:</td>
                                    <th>Merah-Hijau</th>
                                </tr>
                                <tr>
                                    <th width="20%">Akurasi (%)</th>
                                    <td>:</td>
                                    <td>{{ $formattedPercentageRG }} %</td>
                                </tr>
                                <tr>
                                    <th width="20%">Total Plates</th>
                                    <td>:</td>
                                    <td>{{ $totalPlatesRG }}</td>
                                </tr>
                                <tr>
                                    <th width="20%">Jawaban Benar</th>
                                    <td>:</td>
                                    <td>{{ $resultTotalRG }}</td>
                                </tr>
                                <tr>
                                    <th width="20%">Jawaban Salah</th>
                                    <td>:</td>
                                    <td>{{ $resultTotalRGWrong }}</td>
                                </tr>
                                <tr>
                                    <th width="20%">Hasil Tes</th>
                                    <td>:</td>
                                    <td>
                                        @if ($rgMH < 4 || $rgUB < 4 || $rgUH < 3)
                                            Anda menderita buta warna Merah-Hijau
                                        @else
                                            Anda tidak menderita buta warna Merah-Hijau
                                        @endif
                                    </td>
                                </tr>
                            </table>
                            <table class="table border-top mt-5">
                                <tr>
                                    <th width="20%">Jenis Tes</th>
                                    <td>:</td>
                                    <th>Biru-Kuning</th>
                                </tr>
                                <tr>
                                    <th width="20%">Akurasi (%)</th>
                                    <td>:</td>
                                    <td>{{ $formattedPercentageBY }} %</td>
                                </tr>
                                <tr>
                                    <th width="20%">Total Plates</th>
                                    <td>:</td>
                                    <td>{{ $totalPlatesBY }}</td>
                                </tr>
                                <tr>
                                    <th width="20%">Jawaban Benar</th>
                                    <td>:</td>
                                    <td>{{ $resultTotalBY }}</td>
                                </tr>
                                <tr>
                                    <th width="20%">Jawaban Salah</th>
                                    <td>:</td>
                                    <td>{{ $wrongTotalBY }}</td>
                                </tr>
                                <tr>
                                    <th width="20%">Hasil Tes</th>
                                    <td>:</td>
                                    <td>
                                        @if ($resultTotalBY < 8)
                                            Anda menderita buta warna Biru-Kuning
                                        @else
                                            Anda tidak menderita buta warna Biru-Kuning
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-center pt-3">
                            <a href="{{ route('beranda') }}" class="btn btn-primary">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
