<x-master-layout title="Edit Employee">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header"><strong>Edit Employee</strong></div>
            <div class="card-body">
                @if ($errors->all())
                    <div class="alert alert-danger">
                        Your form is invalid
                    </div>
                @endif
                <form action="{{ route('employees.update', $employee->id) }}" method="post" class="form">
                    @method('put')
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="mb-1"><strong>Name</strong></label>
                        <input type="text" name="name" class="form-control" @error('name') is-invalid @enderror
                            placeholder="Input name here" value="{{ $employee->name }}" />
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="address" class="mb-1"><strong>Address</strong></label>
                        <input type="text" name="address" class="form-control" @error('address') is-invalid @enderror
                            placeholder="Input address here" value="{{ $employee->address }}" />
                        @error('address')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Update</button>
                </form>
            </div>
</x-master-layout>
