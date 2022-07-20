<x-master-layout title="Employees Lists">
    <h1>Employees</h1>
    <br>
    <div>
        <a href="/employees/create">Create New Employee</a>
    </div>
    <br>
    <ol>
        @foreach ($employees as $employee)
            <li>
                {{ $employee->name }} |
                <a href="/employees/{{ $employee->id }}/edit" style="color: green">
                    edit
                </a>
                <form action="/employees/{{ $employee->id }}" method="post" style="display: inline">
                    @csrf
                    @method('delete')
                    <button type="submit" style="color: crimson">delete</button>
                </form>
            </li>
        @endforeach
    </ol>
</x-master-layout>
