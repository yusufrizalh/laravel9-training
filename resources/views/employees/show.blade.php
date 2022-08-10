<x-master-layout title="Employees Lists">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <a class="btn btn-primary btn-md mt-5" href="/employees/create">Create New Employee</a>
                <div class="card mt-3">
                    <div class="card-header">
                        @if (isset($department))
                            <strong>Department: {{ $department->name }}</strong>
                        @else
                            <strong>Department: All</strong>
                        @endif
                    </div>
                    <div class="card-body">
                        <ol class="list-group">
                            @foreach ($employees as $employee)
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <strong>{{ $employee->name }}</strong>
                                    </div>
                                    <div class="card-body">
                                        <strong>Address: </strong> {{ $employee->address }}
                                        <strong>Status: </strong>{{ $employee->status }}
                                        <strong>Skills: </strong>
                                        @foreach ($employee->skills as $skill)
                                            <a href="#"
                                                class="btn text-info align-items-center">{{ $skill->name }}</a>
                                        @endforeach
                                        <br> <br>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <a href="{{ route('employees.edit', $employee->id) }}"
                                                class="btn btn-warning">edit</a>
                                            &nbsp;
                                            <form action="{{ route('employees.destroy', $employee->id) }}"
                                                method="post" class="form form-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">delete</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="/departments/{{ $employee->department->name }}"
                                            class="text-primary nav-link">{{ $employee->department->name }}</a>
                                    </div>
                                </div>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
