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
                                            <a href="/skills/{{ $skill->name }}"
                                                class="btn text-info align-items-center">{{ $skill->name }}</a>
                                        @endforeach
                                        <br> <br>
                                        <div class="d-flex justify-content-start align-items-center">
                                            <a href="{{ route('employees.edit', $employee->id) }}"
                                                class="btn btn-warning">edit</a>
                                            &nbsp;&nbsp;
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-md btn-danger" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                delete
                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Are you sure
                                                                want to delete?</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="mb-3">
                                                                <div>{{ $employee->name }}</div>
                                                                <div class="text-secondary">
                                                                    <small>Created on
                                                                        {{ $employee->created_at->format('d M Y') }}</small>
                                                                </div>
                                                            </div>
                                                            <form
                                                                action="{{ route('employees.destroy', $employee->id) }}"
                                                                method="post" class="form">
                                                                @csrf
                                                                @method('delete')
                                                                <div class="d-flex">
                                                                    <button type="submit"
                                                                        class="btn btn-danger mx-3">Yes</button>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                <div class="my-5 d-flex justify-content-center">
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
