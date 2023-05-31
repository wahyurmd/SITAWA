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
                    Tentang Buta Warna
                </li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="card mb-5">
                    <div class="card-body m-3">
                        <fieldset>
                            <section class="pt-5">
                                <div class="text-center">
                                    <h4 class="fw-bold">Tentang Buta Warna</h4>
                                </div>
                                <div class="pt-5">
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
                                </div>
                            </section>
                            <section class="pt-5 border-top">
                                <div class="text-center">
                                    <h4 class="fw-bold">Tes Ishihara</h4>
                                </div>
                                <div class="pt-5">
                                    <h6 class="fw-bold text-decoration-underline pb-3">Tentang Ishihara</h6>
                                    <p class="text-wrap fs-7">
                                        Tes ini merupakan tes yang umum biasanya digunakan untuk melakukan pemeriksaan buta warna. Tes ini diciptakan oleh Shinobu Ishihara yang merupakan seorang profesor di Universitas Tokyo, pertama kali diterbitkannya pada tahun 1917. Sejak saat itu, ini adalah tes defisiensi penglihatan warna yang paling banyak digunakan dan terkenal dan masih digunakan oleh sebagian besar dokter mata.
                                    </p>
                                    <p class="text-wrap fs-7">
                                        Tes ini terdiri dari sejumlah plate Ishihara, yang masing-masing menggambarkan lingkaran padat titik-titik berwarna yang muncul secara acak dalam warna dan ukuran. Di dalam pola terdapat titik-titik yang membentuk angka atau bentuk yang terlihat jelas bagi mereka yang memiliki penglihatan warna normal, dan tidak terlihat, atau sulit dilihat, bagi mereka yang memiliki cacat penglihatan warna.
                                    </p>
                                    <h6 class="fw-bold text-decoration-underline pb-3">Prosedur Tes Ishihara Cetak</h6>
                                    <p class="text-wrap fs-7">
                                        Sebagai plate cetak, keakuratan pengujian bergantung pada penggunaan pencahayaan yang tepat untuk menerangi halaman. Iluminator bohlam "siang hari" diperlukan untuk memberikan hasil yang paling akurat, dengan suhu sekitar 6000–7000 K, dan diperlukan untuk kebijakan penyaringan penglihatan warna militer.
                                    </p>
                                    <p class="text-wrap fs-7">
                                        Teknik pengujian yang tepat adalah memberikan hanya tiga detik per plate untuk sebuah jawaban, dan tidak mengizinkan pembinaan, menyentuh atau menelusuri angka-angka oleh subjek. Tes paling baik diberikan dalam urutan acak, jika memungkinkan, untuk mengurangi keefektifan menghafal jawaban sebelumnya oleh subjek.
                                    </p>
                                    <h6 class="fw-bold text-decoration-underline pb-3">Prosedur Tes Ishihara Online</h6>
                                    <p class="text-wrap fs-7">
                                        Skor maksimal pada tes ini adalah 18 dan jumlah kesalahan maksimal yang diperbolehkan adalah dua. Tes ini memiliki sensitivitas 98,28% dan spesifisitas 100%. Nilai prediksi positif dari tes ini adalah 100% dan nilai prediksi negatifnya adalah 97,3%, yang juga menunjukkan nilai diagnostik yang dapat diandalkan. Pada kasus kesalahan yang diperbolehkan ada tiga, tes memiliki sensitivitas 96,55%, spesifisitas 100%, nilai prediksi positif 100%, dan nilai prediksi negatif 94,74%.
                                    </p>
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col">
                                                <input type="hidden" value="Ishihara">
                                            </div>
                                            <div class="col">
                                                <table class="table">
                                                    <tr>
                                                        <th class="fs-7">Maksimal Kesalahan</th>
                                                        <td class="fs-7">2</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Sensitivitas</th>
                                                        <td class="fs-7">98,28 %</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Spesifisitas</th>
                                                        <td class="fs-7">100,00 %</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Prediksi Positif</th>
                                                        <td class="fs-7">100,00 %</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Prediksi Negatif</th>
                                                        <td class="fs-7">97,30 %</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col">
                                                <input type="hidden" value="Ishihara">
                                            </div>
                                        </div>
                                    </div>
                                    <p>Sumber: <a href="https://www.color-blind-test.com/" target="_blank">Colorlite (color-blind-test.com)</a></p>
                                </div>
                            </section>
                            <section class="pt-5 border-top">
                                <div class="text-center">
                                    <h4 class="fw-bold">Tes Cambridge</h4>
                                </div>
                                <div class="pt-5">
                                    <h6 class="fw-bold text-decoration-underline pb-3">Tentang Cambridge</h6>
                                    <p class="text-wrap fs-7">
                                        Metode Cambridge menggunakan metode yang sama dengan Tes Ishihara, tetapi perbedaannya adalah bentuk yang dihasilkan hanya merupakan huruf "C". Namun, tes Cambridge lebih sensitif untuk membedakan jenis-jenis buta warna (Prasetya, 2021). Tujuan dari tes ini adalah untuk menemukan di mana letak celah dari huruf "C" (dikenal sebagai "Landolt Ring"). Menurut (Goulart dkk., 2008) tes ini terdiri dari mosaik lingkaran kecil yang bervariasi dalam ukuran ataupun pencahayaan dengan subset lingkaran dengan kromanitas berbeda dengan membentuk target Landolt-C. Dalam tes Cambridge pada aplikasi ini terdapat 2 jenis tes yaitu, tes Cambridge Merah-Hijau dan tes Cambridge Biru-Kuning
                                    </p>
                                    <div class="text-center pb-5">
                                        <img src="{{ asset('assets/img/color-blind-test-Instruction.jpg') }}" alt="Cambridge Instruction" class="img-fluid" width="350">
                                    </div>
                                    <h6 class="fw-bold text-decoration-underline pb-3 pt-3">Prosedur Tes Cambridge Merah-Hijau</h6>
                                    <p class="text-wrap fs-7">
                                        Skor maksimal pada tes ini adalah 14 dan jumlah kesalahan maksimal yang diperbolehkan adalah 3, tetapi hanya jika kesalahan tersebut didistribusikan secara merata di ketiga tugas (yaitu, kesalahan merah-hijau 1, kesalahan ungu-biru 1, kesalahan ungu-hijau 1). Jika ada 2 kesalahan dalam satu tugas (misalnya merah-hijau), subjek sudah didiagnosis buta warna. Tes tersebut memiliki sensitivitas 98,21%, spesifisitas 96,97%, nilai prediksi positif 98,21%, dan nilai prediksi negatif 96,97%.
                                    </p>
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col">
                                                <input type="hidden" value="Ishihara">
                                            </div>
                                            <div class="col">
                                                <table class="table">
                                                    <tr>
                                                        <th class="fs-7">Maksimal Kesalahan</th>
                                                        <td class="fs-7">3 (1-1-1)</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Sensitivitas</th>
                                                        <td class="fs-7">98,21 %</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Spesifisitas</th>
                                                        <td class="fs-7">96,97 %</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Prediksi Positif</th>
                                                        <td class="fs-7">98,21 %</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Prediksi Negatif</th>
                                                        <td class="fs-7">96,97 %</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col">
                                                <input type="hidden" value="Ishihara">
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="fw-bold text-decoration-underline pb-3 pt-3">Prosedur Tes Cambridge Biru-Kuning</h6>
                                    <p class="text-wrap fs-7">
                                        Skor maksimal yang tersedia pada tes ini adalah 10. Jumlah kesalahan yang diperbolehkan adalah 2, Tes tersebut memiliki sensitivitas 84,21%, spesifisitas 95,83%, nilai prediksi positif 94,12%, dan nilai prediksi negatif 88,46%.
                                    </p>
                                    <div class="table-responsive">
                                        <div class="row">
                                            <div class="col">
                                                <input type="hidden" value="Ishihara">
                                            </div>
                                            <div class="col">
                                                <table class="table">
                                                    <tr>
                                                        <th class="fs-7">Maksimal Kesalahan</th>
                                                        <td class="fs-7">2</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Sensitivitas</th>
                                                        <td class="fs-7">84,21 %</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Spesifisitas</th>
                                                        <td class="fs-7">95,83 %</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Prediksi Positif</th>
                                                        <td class="fs-7">94,12 %</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="fs-7">Prediksi Negatif</th>
                                                        <td class="fs-7">88,46 %</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="col">
                                                <input type="hidden" value="Ishihara">
                                            </div>
                                        </div>
                                    </div>
                                    <p>Sumber: <a href="https://www.color-blind-test.com/" target="_blank">Colorlite (color-blind-test.com)</a></p>
                                </div>
                            </section>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
