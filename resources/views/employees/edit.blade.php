<x-master-layout title="Edit Employee">
    <h1>Edit Employee</h1>
    <br>
    <form action="/employees/{{ $employee->id }}" method="post">
        @method('put')
        @csrf
        <input type="text" name="name" value="{{ $employee->name }}" placeholder="Input Name">
        <br> <br>
        <input type="text" name="address" value="{{ $employee->address }}" placeholder="Input Address">
        <br> <br>
        <button type="submit">Update</button>
    </form>
</x-master-layout>
