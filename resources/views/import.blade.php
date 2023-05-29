<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SITAWA - Import Plate Data</title>
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

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Import Ishihara Data</h5>
                        <form action="{{ route('import.ishihara') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('import_ishihara') @enderror" id="inputGroupFile02" name="import_ishihara">
                                        <label class="input-group-text" for="inputGroupFile02">Browse</label>
                                        @error('import_ishihara')
                                            <div class="alert alert-warning mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-color btn-block">Import</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h5 class="card-title">Import Cambridge Red-Green</h5>
                        <form action="{{ route('import.rg') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('import_redgreen') @enderror" id="inputGroupFile02" name="import_redgreen">
                                        <label class="input-group-text" for="inputGroupFile02">Browse</label>
                                        @error('import_redgreen')
                                            <div class="alert alert-warning mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-color btn-block">Import</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h5 class="card-title">Import Cambridge Blue</h5>
                        <form action="{{ route('import.blue') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="file" class="form-control @error('import_blue') @enderror" id="inputGroupFile02" name="import_blue">
                                        <label class="input-group-text" for="inputGroupFile02">Browse</label>
                                        @error('import_blue')
                                            <div class="alert alert-warning mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-color btn-block">Import</button>
                                    </div>
                                </div>
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
