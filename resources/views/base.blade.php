<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    {{-- tinymce --}}
    <script src="https://cdn.tiny.cloud/1/vxfcf4bxrnn14o8lr9sboey5yz954t62d6ar3izu54gkctb3/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script src="https://kit.fontawesome.com/20ea8add13.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}

    {{-- <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script> --}}



    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Pierres</title>
</head>

<body>

    <div class="container justify-content-center mt-3 border border-darck shadow-lg p-3 mb-5 bg-body rounded">
        @include('incs.navbar')
        @include('incs/flash')
        @yield('content')




    </div>


</body>

</html>
