<x-master-layout>
    <h1>Employees</h1>
    <br>
    <div>
        <a href="/employees/create">Create New Employee</a>
    </div>
    <br>
    <ol>
        @foreach ($employees as $employee)
            <li>{{ $employee->name }}</li>
        @endforeach
    </ol>
</x-master-layout>


