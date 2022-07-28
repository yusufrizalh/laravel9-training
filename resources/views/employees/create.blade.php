<x-master-layout title="Create New Employee">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header"><strong>Create New Employee</strong></div>
            <div class="card-body">
                @if ($errors->all())
                    <div class="alert alert-danger">
                        Your form is invalid
                    </div>
                @endif
                <form action="{{ route('employees.store') }}" method="post" class="form">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="mb-1"><strong>Name</strong></label>
                        <input type="text" name="name"
                            class="form-control @error('name') is-invalid @enderror"
                            placeholder="Input name here">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="address" class="mb-1"><strong>Address</strong></label>
                        <input type="text" name="address"
                            class="form-control @error('address') is-invalid @enderror""
                            placeholder="Input address here">
                        @error('address')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Create</button>
                </form>
            </div>
</x-master-layout>
