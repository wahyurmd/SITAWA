<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SITAWA - Daftar Akun</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
</head>
<body>
    @include('sweetalert::alert')

    <div class="container mb-3">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body m-3">
                        <div class="text-center mb-4">
                            <img src="{{ asset('assets/img/user.png') }}" class="card-img-top mb-3">
                            <h4 class="">Daftarkan Akun Anda!</h4>
                        </div>
                        <form action="{{ route('register.action') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Nama Lengkap <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('name') @enderror text-capitalize" name="name" placeholder="Masukkan nama lengkap" autocomplete="off" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin: <span class="text-danger">*</span></label>
                                <div class="form-check">
                                    <input class="form-check-input @error('gender') @enderror" type="radio" name="gender" value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="laki_laki">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('gender') @enderror" type="radio" name="gender" value="Perempuan" {{ old('gender') == 'Perempuan' ? 'checked' : '' }}>
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
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control @error('email') @enderror" name="email" placeholder="Masukkan email" autocomplete="off" value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi <span class="text-danger">*</span></label>
                                <input type="password" class="form-control @error('password') @enderror" name="password" placeholder="Masukkan kata sandi" autocomplete="off">
                                @error('password')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Kata Sandi <span class="text-danger">*</span></label>
                                <input type="password" class="form-control @error('password_confirmation') @enderror" name="password_confirmation" placeholder="Masukkan konfirmasi kata sandi" autocomplete="off">
                                @error('password_confirmation')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="born-date">Tanggal Lahir <span class="text-danger">*</span></label>
                                <input type="date" class="form-control @error('born_date') @enderror" name="born_date" placeholder="Masukkan tanggal lahir" autocomplete="off" value="{{ old('born_date') }}">
                                @error('born_date')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat <span class="text-danger">*</span></label>
                                <textarea rows="2" class="form-control @error('address') @enderror text-capitalize" name="address">{{ old('address') }}</textarea>
                                @error('address')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ward">Desa / Kelurahan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('ward') @enderror text-capitalize" name="ward" placeholder="Masukkan desa/kelurahan" autocomplete="off" value="{{ old('subdistrict') }}">
                                @error('ward')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subdistrict">Kecamatan <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('subdistrict') @enderror text-capitalize" name="subdistrict" placeholder="Masukkan kecamatan" autocomplete="off" value="{{ old('subdistrict') }}">
                                @error('subdistrict')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city">Kota <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('city') @enderror text-capitalize" name="city" placeholder="Masukkan kota" autocomplete="off" value="{{ old('city') }}">
                                @error('city')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="province">Provinsi <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('province') @enderror text-capitalize" name="province" placeholder="Masukkan provinsi" autocomplete="off" value="{{ old('province') }}">
                                @error('province')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-color btn-block">Daftar</button>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('login') }}">Sudah mempunyai akun?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="{{ asset('sw.js') }}"></script>
    <script>
        if (!navigator.serviceWorker.controller) {
            navigator.serviceWorker.register("/sw.js").
            then(function (reg) {
                console.log("Service worker has been registered for scope: " + reg.scope);
            });
        }
    </script>
</body>
</html>
