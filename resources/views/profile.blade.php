<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'Profil - SITAWA')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="col mt-3">
        <div class="col-xs-12 bg-breadcrumb">
            <ol class="breadcrumb bg-transparent ms-2 text-center">
                <li class="breadcrumb-item">
                    <a href="{{ route('beranda') }}" class="text-dark">Beranda</a>
                </li>
                <li class="breadcrumb-item active text-light" aria-current="page">
                    Profil
                </li>
            </ol>
        </div>
    </div>
    <div class="row pb-5">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-2">
                <div class="card-header card-profile">
                    <h4 class="text-center mt-2">Data Profil</h4>
                </div>
                @foreach ($profile as $row)
                <div class="card-body">
                    <div class="form-group">
                        <label class="fw-bold">Nama Lengkap:</label>
                        <input type="text" class="form-control form-profile" value="{{ $row->name }}" readonly>
                    </div>
                    <div class="form-group mt-3">
                        <label class="fw-bold">Email:</label>
                        <input type="email" class="form-control form-profile" value="{{ $row->email }}" readonly>
                    </div>
                    <div class="form-group mt-3">
                        <label class="fw-bold">Jenis Kelamin:</label>
                        <input type="text" class="form-control form-profile" value="{{ $row->gender }}" readonly>
                    </div>
                    <div class="form-group mt-3">
                        <label class="fw-bold">Tanggal Lahir:</label>
                        <input type="date" class="form-control form-profile" value="{{ $row->born_date }}" readonly>
                    </div>
                    <div class="form-group mt-3">
                        <label class="fw-bold">Alamat:</label>
                        <textarea type="text" class="form-control form-profile" readonly>{{ $row->address . ' Kel. ' . $row->ward . ', Kec. ' . $row->subdistrict . ', Kota ' . $row->city . ', ' . $row->province }}</textarea>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{ route('profile.update') }}" type="submit" class="btn btn-color">Ubah Data</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
