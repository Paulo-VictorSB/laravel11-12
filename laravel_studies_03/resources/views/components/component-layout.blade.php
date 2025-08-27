<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('/assets/bootstrap/bootstrap.min.css') }}">
    <title>{{ $title ?? "Meu Layout com Components" }}</title>
</head>
<body>

    @include('layouts.navbar')

    {{ $slot }}

    {{-- Bootstrap --}}
    <script src="{{ asset('/assets/bootstrap/bootstrap.bundle.css') }}"></script>
</body>
</html>
