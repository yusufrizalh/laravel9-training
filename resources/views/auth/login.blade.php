<x-master-layout title="Login Page">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Login Page</strong></div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label mb-1"><strong>Email</strong></label>
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Input email here" />
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label mb-1"><strong>Password</strong></label>
                                <input type="password" name="password" value="{{ old('password') }}"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Input password here" />
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-md btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-master-layout>
