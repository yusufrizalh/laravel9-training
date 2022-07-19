<x-master-layout title="Home Page">
    <x-alert>
        @slot('title')
            Komponen Header pada Home didalam slot
        @endslot
        <p>Ini adalah komponen child yang berasal dari alert</p>
        @slot('footer')
            Komponen Footer pada Home didalam slot
        @endslot
    </x-alert>
    <h1>
        Ini adalah Halaman Home
    </h1>
    <p>Belajar <strong style="color: crimson">Laravel</strong> sangat menyenangkan.</p>
</x-master-layout>
