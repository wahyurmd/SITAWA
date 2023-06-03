<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'Beranda - SITAWA')

<!-- Main Content -->
@section('content')
<div class="container-fluid">
    <div class="col mt-3">
        <div class="col-xs-12 bg-breadcrumb">
            <ol class="breadcrumb bg-transparent ms-2 text-center">
                <li class="breadcrumb-item active text-light">
                    Beranda
                </li>
            </ol>
        </div>
    </div>
    <h6 class="fw-semibold mt-2">Selamat datang kembali,</h6>
    <span class="fw-medium"><u>{{ Auth::user()->name }}!</u></span>
    <div class="row mt-4">
        <div class="col">
            <a href="{{ route('ishihara.test') }}" class="a-custom">
            <div class="card">
                <center>
                    <img src="{{ asset('assets/img/test.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title fw-semibold">Mulai Tes</h6>
                    </div>
                </center>
            </div>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('result') }}" class="a-custom">
            <div class="card">
                <center>
                    <img src="{{ asset('assets/img/graph.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title fw-semibold">Hasil Tes</h6>
                    </div>
                </center>
            </div>
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <a href="{{ route('about') }}" class="a-custom">
            <div class="card">
                <center>
                    <img src="{{ asset('assets/img/search.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title fw-semibold">Tentang Buta Warna</h6>
                    </div>
                </center>
            </div>
            </a>
        </div>
        <div class="col">
            <a href="{{ route('howtodo') }}" class="a-custom">
            <div class="card">
                <center>
                    <img src="{{ asset('assets/img/pin.png') }}" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title fw-semibold">Cara Mengerjakan</h6>
                    </div>
                </center>
            </div>
            </a>
        </div>
    </div>
    <div class="row mt-3 pb-5">
        <div class="col">
            <div class="card reminder-card">
                <div class="card-title">
                    <center>
                        <span>Pengingat!</span>
                    </center>
                </div>
                <div class="card-body">
                    <p>Jika mempunyai masalah lebih lanjut terhadap penglihatan mata, harap segera konsultasikan ke tenaga medis atau kunjungi fasilitas kesehatan.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
