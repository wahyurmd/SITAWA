<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'Ubah Data Profil - SITAWA')

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
                    <h4 class="text-center mt-2">Ubah Data Profil</h4>
                </div>
                @foreach ($profile as $row)
                <form action="{{ route('profile.action', $row->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label class="fw-bold">Nama Lengkap:</label>
                            <input type="text" name="name" class="form-control @error('name') @enderror" value="{{ $row->name }}">
                            @error('name')
                                <div class="alert alert-warning mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold">Email:</label>
                            <input type="email" name="email" class="form-control @error('email') @enderror" value="{{ $row->email }}">
                            @error('email')
                                <div class="alert alert-warning mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold">Jenis Kelamin:</label>
                            <div class="form-check">
                                <input class="form-check-input @error('gender') @enderror" type="radio" name="gender" value="Laki-laki" {{ $row->gender == 'Laki-laki' ? 'checked' : '' }}>
                                <label class="form-check-label" for="laki_laki">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input @error('gender') @enderror" type="radio" name="gender" value="Perempuan" {{ $row->gender == 'Perempuan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                            @error('gender')
                                <div class="alert alert-warning mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold">Tanggal Lahir:</label>
                            <input type="date" name="born_date" class="form-control @error('born_date') @enderror" value="{{ $row->born_date }}">
                            @error('born_date')
                                <div class="alert alert-warning mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold">Alamat</label>
                            <textarea rows="2" class="form-control @error('address') @enderror" name="address">{{ $row->address }}</textarea>
                            @error('address')
                                <div class="alert alert-warning mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold">Desa / Kelurahan</label>
                            <input type="text" class="form-control @error('ward') @enderror" name="ward" value="{{ $row->ward }}">
                            @error('ward')
                                <div class="alert alert-warning mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold">Kecamatan</label>
                            <input type="text" class="form-control @error('subdistrict') @enderror" name="subdistrict" value="{{ $row->subdistrict }}">
                            @error('subdistrict')
                                <div class="alert alert-warning mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold">Kota</label>
                            <input type="text" class="form-control @error('city') @enderror" name="city" value="{{ $row->city }}">
                            @error('city')
                                <div class="alert alert-warning mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="fw-bold">Provinsi</label>
                            <input type="text" class="form-control @error('province') @enderror" name="province" value="{{ $row->province }}">
                            @error('province')
                                <div class="alert alert-warning mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="text-center mt-4">
                            <button href="#" type="submit" class="btn btn-color">Simpan Data</button>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
