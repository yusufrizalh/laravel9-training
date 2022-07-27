<x-master-layout title="Users Page">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header"><strong>Users Lists</strong></div>
            <div class="card-body">
                <ol class="list-group">
                    @foreach ($users as $user)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="{{ route('users.show', $user->username) }}" class="text-primary nav-link">
                                {{ $user->name }}
                            </a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</x-master-layout>
