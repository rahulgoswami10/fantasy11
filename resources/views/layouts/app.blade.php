<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Footyscore</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sports-tabs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/matches.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/football.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    {{-- <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4x1x+6KZ8lDPlO1gH8X2w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" /> --}}
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">

</head>
<body>

@include('partials.navbar')

@include('partials.sports-tabs')


@yield('content')

@include('partials.footer')

<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
