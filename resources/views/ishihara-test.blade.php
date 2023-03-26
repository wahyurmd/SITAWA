<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'SITAWA - Pengujian Ishihara')

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
                    Tes Buta Warna
                </li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body text-center m-3">
                        <form action="#" method="POST">
                            <fieldset>
                                <h4>Tes Ishihara</h4>
                                <img src="{{ asset('assets/img/ishihara-test/Ishihara-Plate-01-38.jpg') }}" class="img-test">
                                <div class="row mt-4">
                                    <div class="col-8">
                                        <div class="form-group">
                                            <input type="text" name="" class="form-control" placeholder="Masukkan jawaban">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-color">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
