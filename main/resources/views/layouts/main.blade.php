<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kueku | Toko Kue Online</title>

    {{-- CSS Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    {{-- CSS Styling --}}
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    {{-- Include Navigation Bar --}}
    @include('partials.navbar')



    {{-- Main Content --}}
    <div class="container mt-5" style="padding-bottom: 12rem;">
        @yield('container')
    </div>



    {{-- Include Footer --}}
    @include('partials.footer')

    {{-- Javascript Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
