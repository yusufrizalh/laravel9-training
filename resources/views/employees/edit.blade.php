<x-master-layout title="Edit Employee">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header"><strong>Edit Employee</strong></div>
            <div class="card-body">
                <form action="{{ route('employees.update', $employee->id) }}" method="post" class="form">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="name"><strong>Name</strong></label>
                        <input type="text" name="name" class="form-control" value="{{ $employee->name }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="address"><strong>Address</strong></label>
                        <input type="text" name="address" class="form-control" value="{{ $employee->address }}"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Update</button>
                </form>
            </div>
</x-master-layout>
