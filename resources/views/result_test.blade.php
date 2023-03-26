<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'SINADU - Hasil Tes Buta Warna')

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
                        <a href="{{ route('beranda') }}" class="a-custom">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20"><path fill="none" d="M0 0h24v24H0z"/><path d="M7.828 11H20v2H7.828l5.364 5.364-1.414 1.414L4 12l7.778-7.778 1.414 1.414z"/></svg>
                            Kembali
                        </a>
                        <h4 class="text-center mt-3">Hasil Tes Buta Warna</h4>
                        <table class="table mt-5">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>Wahyu Ramadhani</td>
                                </tr>
                                <tr>
                                    <td>Usia</td>
                                    <td>:</td>
                                    <td>22 Tahun</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>Laki-laki</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>Kp. Kebayunan Rt.04/Rw.19, No. 56</td>
                                </tr>
                                <tr>
                                    <td>Desa / Kelurahan</td>
                                    <td>:</td>
                                    <td>Tapos</td>
                                </tr>
                                <tr>
                                    <td>Kecamatan</td>
                                    <td>:</td>
                                    <td>Tapos</td>
                                </tr>
                                <tr>
                                    <td>Kota</td>
                                    <td>:</td>
                                    <td>Depok</td>
                                </tr>
                                <tr>
                                    <td>Provinsi</td>
                                    <td>:</td>
                                    <td>Jawa Barat</td>
                                </tr>
                                <tr>
                                    <td>Tanggal Tes</td>
                                    <td>:</td>
                                    <td>Jumat, 17 Maret 2023</td>
                                </tr>
                                <tr>
                                    <td>Waktu Tes</td>
                                    <td>:</td>
                                    <td>07:00:05</td>
                                </tr>
                                <tr>
                                    <td>Hasil Tes</td>
                                    <td>:</td>
                                    <td>Tidak buta warna</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-end">
                            <button type="button" class="btn btn-color btn-sm bg-primary">Unduh Hasil Tes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
