<x-master-layout title="User Detail">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header"><strong>User Detail</strong></div>
            <div class="card-body">
                <h3>
                    {{ $user->name }} - <small class="text-secondary">{{ $user->username }}</small>
                </h3>
            </div>
        </div>
    </div>
</x-master-layout>
