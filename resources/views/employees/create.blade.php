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
                <form action="{{ route('employees.store') }}" method="post" class="form" autocomplete="off"
                    enctype="multipart/form-data">
                    @csrf
                    @include('employees/_form')
                </form>
            </div>
</x-master-layout>
