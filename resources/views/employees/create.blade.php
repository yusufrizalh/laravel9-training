<x-master-layout title="Create New Employee">
    <h1>Create New Employee</h1>
    <br>
    <form action="/employees" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Input Name">
        <br> <br>
        <input type="text" name="address" id="address" placeholder="Input Address">
        <br> <br>
        <button type="submit">Create</button>
    </form>
</x-master-layout>


