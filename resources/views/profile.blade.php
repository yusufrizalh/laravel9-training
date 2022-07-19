<x-master-layout :title="$nama ?? 'Blank'">
    @slot('styles')
        <style>
            body {
                background: indigo
            }
        </style>
    @endslot
    <h1>
        Ini adalah Halaman Profile
    </h1>
    <p>Nama saya adalah {{ $nama ?? 'Blank' }}</p>
</x-master-layout>


