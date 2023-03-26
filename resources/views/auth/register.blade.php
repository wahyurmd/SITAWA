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
                                <label for="name">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') @enderror" name="name" placeholder="Masukkan nama lengkap" autocomplete="off">
                                @error('name')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="gender">Jenis Kelamin:</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('gender') @enderror" type="radio" name="gender" value="Laki-laki">
                                    <label class="form-check-label" for="laki_laki">
                                        Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('gender') @enderror" type="radio" name="gender" value="Perempuan">
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
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') @enderror" name="email" placeholder="Masukkan email" autocomplete="off">
                                @error('email')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Kata Sandi</label>
                                <input type="password" class="form-control @error('password') @enderror" name="password" placeholder="Masukkan kata sandi" autocomplete="off">
                                @error('password')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control @error('password_confirmation') @enderror" name="password_confirmation" placeholder="Masukkan konfirmasi kata sandi" autocomplete="off">
                                @error('password_confirmation')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="born-date">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('born_date') @enderror" name="born_date" placeholder="Masukkan tanggal lahir" autocomplete="off">
                                @error('born_date')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat</label>
                                <textarea rows="2" class="form-control @error('address') @enderror" name="address"></textarea>
                                @error('address')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="ward">Desa / Kelurahan</label>
                                <input type="text" class="form-control @error('ward') @enderror" name="ward" placeholder="Masukkan desa/kelurahan" autocomplete="off">
                                @error('ward')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="subdistrict">Kecamatan</label>
                                <input type="text" class="form-control @error('subdistrict') @enderror" name="subdistrict" placeholder="Masukkan kecamatan" autocomplete="off">
                                @error('subdistrict')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="city">Kota</label>
                                <input type="text" class="form-control @error('city') @enderror" name="city" placeholder="Masukkan kota" autocomplete="off">
                                @error('city')
                                    <div class="alert alert-warning mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="province">Provinsi</label>
                                <input type="text" class="form-control @error('province') @enderror" name="province" placeholder="Masukkan provinsi" autocomplete="off">
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
