<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'SITAWA - Hasil Tes Ishihara')

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
            <div class="col-md-6">
                <div class="card mb-5">
                    <div class="card-body m-3">
                        <div class="text-center">
                            @if ($resultTotal > 5 && $resultTotal < 16)
                                <h4 class="fw-bold">Anda menderita buta warna parsial</h4>
                            @elseif ($resultTotal < 5)
                                <h4 class="fw-bold">Anda menderita buta total</h4>
                            @else
                                <h4 class="fw-bold">Penglihatan mata Anda normal</h4>
                            @endif
                            <h5>{{ $formattedPercentage . '%' }} ({{ $resultTotal . '/' . $totalPlates }})</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Plate</th>
                                            <th scope="col">Your Answer</th>
                                            <th scope="col">Correct Answer</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($result as $data)
                                            <tr>
                                                <th scope="row">{{ $no++ }}</th>
                                                <td>
                                                    <img src="{{ asset('assets/img/ishihara/' . $data->plate) }}" class="img-fluid" alt="{{ $data->plate }}" width="100" height="100">
                                                </td>
                                                <td>{{ $data->user_answer }}</td>
                                                <td>{{ $data->answer_key }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if ($resultTotal > 5 && $resultTotal < 16)
                                <p>Karena Anda menderita buta warna parsial, silahkan lanjutkan tes untuk mengetahui jenis buta warna parsial yang di derita.</p>
                                <a href="{{ route('redgreen.test', $test_id) }}" class="btn btn-primary">Lanjutkan Tes Cambridge</a>
                            @else
                                <a href="{{ route('beranda') }}" class="btn btn-primary">Kembali ke Beranda</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
