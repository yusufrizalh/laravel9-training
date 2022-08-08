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
                        @can('isAdmin')
                            <div class="alert alert-primary">
                                This is Admin
                            </div>
                        @elsecan('isManager')
                            <div class="alert alert-info">
                                This is Manager
                            </div>
                        @else
                            <div class="alert alert-secondary">
                                This is User
                            </div>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
