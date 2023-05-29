<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'Tentang Buta Warna - SITAWA')

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
                        <fieldset>
                            <div class="text-center">
                                <h4>Cara Mengerjakan</h4>
                            </div>
                            {{-- <div class="pt-3">
                                <p class="text-wrap fs-7">
                                    Buta warna (<i>color blind</i>) merupakan salah satu gangguan penglihatan mata terhadap warna yang disebabkan oleh masalah pigmen pada retina, lapisan bagian dalam mata yang memungkinkan seseorang dapat melihat. Biasanya penderita tidak mampu melihat beberapa warna dengan jelas dan akurat (Rani & Sriwahyuni, 2021). Selain faktor keturunan penyebab buta warna juga dapat terjadi karena paparan zat kimia atau cedera fisik terhadap mata, saraf penglihatan ataupun bagian otak yang memproses informasi warna.
                                </p>
                                <p class="text-wrap fs-7">
                                    Buta warna terdapat dua jenis yang paling umum, yaitu buta warna absolut (buta warna total) dan buta warna parsial (buta warna sebagian). Buta warna total merupakan keadaan seseorang tidak dapat melihat warna sama sekali atau hanya terlihat hitam dan putih. Sedangkan buta warna parsial merupakan keadaan seseorang tidak dapat melihat beberapa warna yang menyebabkan kesulitan dalam membedakan beberapa warna tertentu.
                                </p>
                                <p class="text-wrap fs-7">
                                    Buta warna parsial memiliki dua golongan, yaitu kesulitan dalam membedakan warna pada gradasi merah-hijau, dan warna biru-kuning (Halodoc, 2019). Buta warna parsial merah-hijau dan biru-kuning memiliki beberapa macam jenisnya, antara lain:
                                </p>
                                <ol class="list-group list-group-numbered">
                                    <li class="list-group-item d-flex justify-content-between align-items-start border-0 fs-7">
                                        <div class="ms-2 me-auto">
                                            <div>Buta Warna Merah-Hijau</div>
                                            <ol class="list-group list-group-numbered">
                                                <li class="list-group-item border-0">
                                                    <i>Deuteranopia</i>, keadaan dimana seseorang ketika melihat warna merah menjadi warna kuning kecokelatan dan warna hijau menjadi warna krem.
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <i>Protanopia</i>, keadaan dimana seseorang ketika melihat warna merah tampak hitam, warna jingga dan hijau terlihat warna kuning, dan kesulitan dalam membedakan warna ungu dan biru.
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <i>Protanomali</i>, keadaan dimana seseorang ketika melihat warna jingga, merah, dan kuning tampak lebih gelap menyerupai warna hijau.
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <i>Deutranomalia</i>, keadaan dimana seseorang ketika melihat warna hijau dan kuning menjadi kemerahan, dan sulit membedakan warna ungu dan biru.
                                                </li>
                                            </ol>
                                        </div>
                                    <li class="list-group-item d-flex justify-content-between align-items-start border-0 fs-7">
                                        <div class="ms-2 me-auto">
                                            <div>Buta Warna Biru-Kuning</div>
                                            <ol class="list-group list-group-numbered">
                                                <li class="list-group-item border-0">
                                                    <i>Tritanomali</i>, keadaan dimana seseorang ketika melihat warna biru tampak seperti hijau dan sulit membedakan warna kuning dan merah.
                                                </li>
                                                <li class="list-group-item border-0">
                                                    <i>Tritanopia</i>, keadaan dimana seseorang ketika melihat warna biru tampak seperti hijau dan warna kuning tampak menjadi warna ungu atau abu-abu.
                                                </li>
                                            </ol>
                                        </div>
                                    </li>
                                </ol>
                                <p class="text-wrap fs-7">
                                    Untuk mengetahui apakah seseorang menderita buta warna atau tidak, perlu dilakukan sebuah tes diagnosis buta warna. Tes ini merupakan sebuah tes yang digunakan untuk mendiagnosis apakah seseorang mengalami buta warna atau tidak. Berbagai metode pemeriksaan untuk mengetahui seseorang menderita buta warna antara lain menggunakan metode Ishihara, Anomaloscope, Farnsworth-Munsell, Cambridge, dan metode lainnya (Iskandar & Bastian, 2018).
                                </p>
                                <p class="text-wrap fs-7"></p>
                            </div> --}}
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
