<x-master-layout :title="$nama ?? 'Blank'">
    <div class="container">
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
    </div>
</x-master-layout>
