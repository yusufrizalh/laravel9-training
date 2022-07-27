<x-master-layout title="Contact Page">
    <div class="container">
        <h1>
            Ini adalah Halaman Contact
        </h1>
        <br>
        <form action="/contact" method="post" class="form">
            @csrf
            <div class="mb-3">
                <input type="text" name="email" id="email" placeholder="Alamat Email" class="form-control">
            </div>
            <div class="mb-3">
                <input type="password" name="password" id="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-md">Send</button>
        </form>
    </div>
</x-master-layout>
