<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Inixindo</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    {{ $styles }}
</head>

<body>
    <x-navbar></x-navbar>
    <div class="pt-4 mt-5">
        {{ $slot }}
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
