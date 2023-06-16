<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'Cara Mengerjakan - SITAWA')

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
                    Cara Mengerjakan
                </li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body m-3">
                        <fieldset class="pt-3 pb-3">
                            <div class="text-center">
                                <h4 class="fw-bold">Cara Mengerjakan</h4>
                            </div>
                            <div class="pt-3">
                                <p class="text-wrap fs-7">
                                    Pada aplikasi ini terdapat 2 jenis tes, yaitu tes Ishihara (untuk mengetahui apakah mata normal, buta warna parsial, dan buta warna total) dan tes Cambridge (untuk mengetahui jenis buta warna parsial yang di derita). Untuk melakukan tes buta warna dapat mengikuti langkah-langkah berikut ini:
                                </p>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start border-0 fs-7">
                                        <div class="ms-2 me-auto">
                                            <div>Pilih menu "Mulai Tes"</div>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start border-0 fs-7">
                                        <div class="ms-2 me-auto">
                                            <div>Tes Ishihara</div>
                                            <p class="text-wrap">
                                                Setelah memilih "Mulai Tes" pengguna akan di alihkan ke halaman tes Ishihara. Tes ini memiliki 18 soal (plate), pengguna diharuskan untuk menjawab plate-plate tersebut. Setelah selesai mengisi semua pertanyaan pada tes Ishihara, silahkan tekan tombol submit untuk melihat hasil dari tes yang sudah dikerjakan.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start border-0 fs-7">
                                        <div class="ms-2 me-auto">
                                            <div>Halaman hasil tes Ishihara</div>
                                            <p class="text-wrap">
                                                Pada halaman ini ditampilkan hasil dari tes yang sudah dikerjakan oleh pengguna pada halaman sebelumnya. Jika hasil tes yang didapat adalah mata normal dan buta warna total, maka tidak perlu untuk melanjutkan tes Cambridge. Tetapi jika yang didapat adalah buta warna parsial, maka pengguna harus mengerjakan tes Cambridge untuk mengetahui jenis buta warna parsial apa yang di derita.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start border-0 fs-7">
                                        <div class="ms-2 me-auto">
                                            <div>Tes Cambridge</div>
                                            <p class="text-wrap">
                                                Untuk mengerjakan tes Cambridge terdapat 2 tes. Tes yang pertama adalah tes Cambridge Merah-Hijau, dan yang kedua adalah tes Cambridge Biru-Kuning. Tes Cambridge Merah-Hijau memiliki 14 soal (plate) yang harus dijawab, dan jika sudah selesai pengguna dapat menekan tombol submit untuk mengerjakan tes Cambridge Biru-Kuning yang memiliki 10 soal (plate). Setelah selesai mengisi semua pertanyaan pada tes Cambridge, silahkan tekan tombol submit untuk melihat hasil dari tes yang sudah dikerjakan.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start border-0 fs-7">
                                        <div class="ms-2 me-auto">
                                            <div>Halaman hasil tes Cambridge</div>
                                            <p class="text-wrap">
                                                Pada halaman ini ditampilkan hasil dari tes yang sudah dikerjakan oleh pengguna pada halaman sebelumnya. Hasil pada tes ini terdapat 3 kategori, yaitu buta warna Merah-Hijau, buta warna Biru-Kuning ataupun buta warna Merah-Hijau dan Biru-Kuning.
                                            </p>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start border-0 fs-7">
                                        <div class="ms-2 me-auto">
                                            <div>Lihat hasil tes pada menu "Hasil Tes" di beranda</div>
                                            <p class="text-wrap">
                                                Pada halaman ini ditampilkan hasil dari tes yang sudah dikerjakan oleh pengguna. Selain itu pengguna dapat mengunduh hasil tes dengan menekan tombol "Unduh Hasil Tes" yang di export sebagai PDF sebagai surat keterangan hasil tes buta warna.
                                            </p>
                                        </div>
                                    </li>
                                </ol>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
