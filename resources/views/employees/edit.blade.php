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
                <form action="{{ route('employees.update', $employee->id) }}" method="post" class="form"
                    autocomplete="off" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    @include('employees/_form')
                </form>
            </div>
</x-master-layout>
