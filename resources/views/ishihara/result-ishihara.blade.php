<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'Hasil Tes Ishihara - SITAWA')

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
                    Hasil Tes Ishihara
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
                            <h4 class="fw-bold">Hasil Tes Ishihara</h4>
                        </div>
                        <div class="table-responsive pt-5">
                            <table class="table">
                                <tr>
                                    <th width="20%">Akurasi (%)</th>
                                    <td>:</td>
                                    <td>{{ $formattedPercentage }} %</td>
                                </tr>
                                <tr>
                                    <th width="20%">Total Plates</th>
                                    <td>:</td>
                                    <td>{{ $totalPlates }}</td>
                                </tr>
                                <tr>
                                    <th width="20%">Jawaban Benar</th>
                                    <td>:</td>
                                    <td>{{ $resultTotal }}</td>
                                </tr>
                                <tr>
                                    <th width="20%">Jawaban Salah</th>
                                    <td>:</td>
                                    <td>{{ $resultTotalWrong }}</td>
                                </tr>
                                <tr>
                                    <th width="20%">Hasil Tes</th>
                                    <td>:</td>
                                    <td>
                                        @if ($resultTotal > 5 && $resultTotal < 16)
                                            Anda menderita buta warna parsial
                                        @elseif ($resultTotal < 5)
                                            Anda menderita buta total
                                        @else
                                            Penglihatan mata Anda normal
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-center mt-4">
                            @if ($resultTotal > 5 && $resultTotal < 16)
                                <p>Karena Anda menderita buta warna parsial, silahkan lanjutkan tes untuk mengetahui jenis buta warna parsial yang di derita.</p>
                                <a href="{{ route('redgreen.test', $test_id) }}" class="btn btn-primary mt-3">Lanjutkan Tes Cambridge</a>
                            @else
                                <a href="{{ route('beranda') }}" class="btn btn-primary mt-3">Kembali ke Beranda</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
