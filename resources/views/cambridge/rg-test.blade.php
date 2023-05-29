<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'SITAWA - Pengujian Cambridge')

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
                    <div class="card-body m-3">
                        <form action="{{ route('store.ishihara') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="text-center">
                                    <h4>Tes Cambridge Merah-Hijau</h4>
                                </div>
                                <section id="image-carousel" class="splide" aria-label="Cambridge Test">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($ishiharaPlate as $index => $data)
                                            <li class="splide__slide">
                                                <div class="text-center">
                                                    <img src="{{ asset('assets/img/ishihara/' . $data->plate) }}" class="img-test">
                                                    <input type="hidden" class="form-control" name="ishihara_plates_id[{{ $index }}]" value="{{ $data->id }}">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="Question">{{ $no++ . '. ' . $data->desc }}</label>
                                                </div>
                                                <div class="row mt-4">
                                                    <select class="form-select" aria-label="Default select example" name="user_answer[{{ $index }}]">
                                                        <option selected>Pilih jawaban</option>
                                                        <option value="Atas">Atas</option>
                                                        <option value="Bawah">Bawah</option>
                                                        <option value="Kiri">Kiri</option>
                                                        <option value="Kanan">Kanan</option>
                                                        <option value="Serong Kiri Atas">Serong Kiri Atas</option>
                                                        <option value="Serong Kanan Atas">Serong Kanan Atas</option>
                                                        <option value="Serong Kiri Bawah">Serong Kiri Bawah</option>
                                                        <option value="Serong Kanan Bawah">Serong Kanan Bawah</option>
                                                    </select>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </section>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="start_time" value="{{ $time }}">
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-color">Submit</button>
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
