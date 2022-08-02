<x-master-layout title="Employees Lists">
    <div class="container">
        <div><a class="btn btn-primary btn-md mt-5" href="/employees/create">Create New Employee</a></div>
        <div class="card mt-3">
            <div class="card-header"><strong>Employees Lists</strong></div>
            <div class="card-body">
                <ol class="list-group">
                    @foreach ($employees as $employee)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $employee->name }} &middot; {{ $employee->department->name }}
                            <div class="d-flex">
                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-info">edit</a>
                                &nbsp;
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="post"
                                    class="form form-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</x-master-layout>
