<!-- Connect to master template -->
@extends('template.master')

<!-- Set Title -->
@section('title', 'SITAWA - Pengujian Cambridge')

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
                        <form action="{{ route('store.ishihara') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="text-center">
                                    <h4>Tes Cambridge</h4>
                                </div>
                                <section id="image-carousel" class="splide" aria-label="Cambridge Test">
                                    <div class="splide__track">
                                        <ul class="splide__list">
                                            @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($ishiharaPlate as $index => $data)
                                            <li class="splide__slide">
                                                <div class="text-center">
                                                    <img src="{{ asset('assets/img/ishihara/' . $data->plate) }}" class="img-test">
                                                    <input type="hidden" class="form-control" name="ishihara_plates_id[{{ $index }}]" value="{{ $data->id }}">
                                                </div>
                                                <div class="mt-4">
                                                    <label for="Question">{{ $no++ . '. ' . $data->desc }}</label>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="user_answer[{{ $index }}]" id="pil_a{{ $index }}" value="{{ $data->pil_a }}" {{ old('user_answer.'.$index) == $data->pil_a ? 'checked' : '' }} required>
                                                            <label class="form-check-label" for="pil_a{{ $index }}">
                                                                {{ $data->pil_a }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="user_answer[{{ $index }}]" id="pil_b{{ $index }}" value="{{ $data->pil_b }}" {{ old('user_answer.'.$index) == $data->pil_b ? 'checked' : '' }} required>
                                                            <label class="form-check-label" for="pil_b{{ $index }}">
                                                                {{ $data->pil_b }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="user_answer[{{ $index }}]" id="pil_c{{ $index }}" value="{{ $data->pil_c }}" {{ old('user_answer.'.$index) == $data->pil_c ? 'checked' : '' }} required>
                                                            <label class="form-check-label" for="pil_c{{ $index }}">
                                                                {{ $data->pil_c }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="user_answer[{{ $index }}]" id="pil_d{{ $index }}" value="{{ $data->pil_d }}" {{ old('user_answer.'.$index) == $data->pil_d ? 'checked' : '' }} required>
                                                            <label class="form-check-label" for="pil_d{{ $index }}">
                                                                {{ $data->pil_d }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </section>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="start_time" value="{{ $time }}">
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
@endsection
