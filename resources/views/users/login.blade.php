@extends('users.app')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <!-- Alert registration -->
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <main class="form-signin my-5">
                    <div class="d-flex justify-content-end">
                        <a href="/"><button type="button" class="btn-close" aria-label="Close"></button></a>
                    </div>

                    <h1 class="h3 mb-3 fw-normal text-center">Login</h1><br>

                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror "
                                id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                            <label for="password">Password</label>
                        </div>
                        {{-- <div class="d-flex justify-content-end mt-2 mb-3">
                            <a href="/forgot-password">Lupa Password</a>
                        </div> --}}
                        <br>
                        <div class="d-grid gap-2 col-md-8 mx-auto">
                            <button class="btn btn-lg text-white" type="submit"
                                style="background-color: tomato">Login</button>
                        </div>
                    </form>

                    <p class="d-block text-center mt-4">Belum daftar?
                        <a class="text-decoration-none" href="/register">Silahkan registrasi</a>
                    </p>
                </main>
            </div>
        </div>
    </div>
@endsection
