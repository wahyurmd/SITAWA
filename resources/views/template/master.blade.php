<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
<body>
    @include('sweetalert::alert')

    @include('template.navbar')

    @yield('content')

    @include('template.footer')

    @include('template.script')
</body>
</html>
