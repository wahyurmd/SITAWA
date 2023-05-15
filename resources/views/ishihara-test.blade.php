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
                    <div class="card-body m-3">
                        <form action="#" method="POST">
                            @csrf
                            <fieldset>
                                <div class="text-center">
                                    <h4>Tes Ishihara</h4>
                                </div>
                                <section id="image-carousel" class="splide" aria-label="Ishihara Test">
                                    <div class="splide__arrows">
                                        {{-- <button class="splide__arrow splide__arrow--prev">
                                            Sebelumnya
                                        </button>
                                        <button class="splide__arrow splide__arrow--next">
                                            Selanjutnya
                                        </button> --}}
                                    </div>

                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            <li class="splide__slide">
                                                <div class="text-center">
                                                    <img src="{{ asset('assets/img/ishihara-test/Ishihara-Plate-01-38.jpg') }}" class="img-test">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="Question">Apa yang terlihat dalam plate diatas?</label>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                12
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                25
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                2
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                15
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide">
                                                <div class="text-center">
                                                    <img src="{{ asset('assets/img/ishihara-test/Ishihara-Plate-01-38.jpg') }}" class="img-test">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="Question">Apa yang terlihat dalam plate diatas?</label>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                12
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                25
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                2
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                15
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="splide__slide">
                                                <div class="text-center">
                                                    <img src="{{ asset('assets/img/ishihara-test/Ishihara-Plate-01-38.jpg') }}" class="img-test">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="Question">Apa yang terlihat dalam plate diatas?</label>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                12
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                25
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                2
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice">
                                                            <label class="form-check-label" for="choice">
                                                                15
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
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

<script>
    const submitBtn = document.querySelector('.btn-color');
    submitBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const selectedValue = document.querySelector('input[name="choice"]:checked').value;
        const sliderValueInput = document.querySelector('input[name="slider_value"]');
        sliderValueInput.value = selectedValue;
        document.forms[0].submit();
    });
</script>
@endsection
