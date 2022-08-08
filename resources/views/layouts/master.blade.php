<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Inixindo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{ $styles }}

    {{-- datatables --}}
    <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>

<body>
    <x-navbar></x-navbar>
    <div class="pt-4 mt-5">
        {{ $slot }}
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
