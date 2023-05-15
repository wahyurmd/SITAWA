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
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            @foreach ($ishiharaPlate as $data)
                                            <li class="splide__slide">
                                                <div class="text-center">
                                                    <img src="{{ asset('assets/img/ishihara/' . $data->plate) }}" class="img-test">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="Question">{{ $data->desc }}</label>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice{{ $loop->index }}" id="pil_a{{ $loop->index }}">
                                                            <label class="form-check-label" for="pil_a{{ $loop->index }}">
                                                                {{ $data->pil_a }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice{{ $loop->index }}" id="pil_b{{ $loop->index }}">
                                                            <label class="form-check-label" for="pil_b{{ $loop->index }}">
                                                                {{ $data->pil_b }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice{{ $loop->index }}" id="pil_c{{ $loop->index }}">
                                                            <label class="form-check-label" for="pil_c{{ $loop->index }}">
                                                                {{ $data->pil_c }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="choice{{ $loop->index }}" id="pil_d{{ $loop->index }}">
                                                            <label class="form-check-label" for="pil_d{{ $loop->index }}">
                                                                {{ $data->pil_d }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="answer_key{{ $loop->index }}" value="{{ $data->answer_key }}" class="form-control">
                                            </li>
                                            @endforeach
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
