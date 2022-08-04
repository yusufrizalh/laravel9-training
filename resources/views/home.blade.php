<x-master-layout title="Home Page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Welcome to My Site</div>
                    <div class="card-body">
                        <p>Here is your Home Page</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>


