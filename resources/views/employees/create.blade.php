<x-master-layout title="Create New Employee">
    <div class="container mt-5">
        <div class="card">
            <div class="card-header"><strong>Create New Employee</strong></div>
            <div class="card-body">
                <form action="{{ route('employees.store') }}" method="post" class="form">
                    @csrf
                    <div class="mb-3">
                        <label for="name"><strong>Name</strong></label>
                        <input type="text" name="name" class="form-control" placeholder="Input name here" required>
                    </div>
                    <div class="mb-3">
                        <label for="address"><strong>Address</strong></label>
                        <input type="text" name="address" class="form-control" placeholder="Input address here"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Create</button>
                </form>
            </div>
</x-master-layout>
