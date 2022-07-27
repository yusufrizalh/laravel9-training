<x-master-layout title="Contact Page">
    <div class="container">
        <h1>
            Ini adalah Halaman Contact
        </h1>
        <br>
        <form action="/contact" method="post">
            @csrf
            <input type="text" name="email" id="email" placeholder="Alamat Email">
            &nbsp;
            <input type="password" name="password" id="password" placeholder="Password">
            &nbsp;
            <button type="submit">Send</button>
        </form>
    </div>
</x-master-layout>
