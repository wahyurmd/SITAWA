<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'SINADU - Ubah Data Profil')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="col mt-3">
        <div class="col-xs-12 bg-breadcrumb">
            <ol class="breadcrumb bg-transparent ms-2 text-center">
                <li class="breadcrumb-item">
                    <a href="{{ route('beranda') }}" class="text-dark">Beranda</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('profile') }}" class="text-dark">Profil</a>
                </li>
                <li class="breadcrumb-item active text-light" aria-current="page">
                    Ubah Data Profil
                </li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card mt-2">
                <div class="card-header card-profile">
                    <h4 class="text-center mt-2">Data Profil</h4>
                </div>
                @foreach ($profile as $row)
                <div class="card-body">
                    <div class="form-group">
                        <label class="fw-bold">Nama Lengkap:</label>
                        <input type="text" name="name" class="form-control" value="{{ $row->name }}">
                    </div>
                    <div class="form-group mt-3">
                        <label class="fw-bold">Email:</label>
                        <input type="email" name="email" class="form-control" value="{{ $row->email }}">
                    </div>
                    <div class="form-group mt-3">
                        <label class="fw-bold">Jenis Kelamin:</label>
                        <input type="text" name="phone" class="form-control" value="{{ $row->gender }}">
                    </div>
                    <div class="form-group mt-3">
                        <label class="fw-bold">Tanggal Lahir:</label>
                        <input type="date" name="born_date" class="form-control" value="{{ $row->born_date }}">
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" type="submit" class="btn btn-color">Simpan Data</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
