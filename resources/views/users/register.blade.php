@extends('users.app')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <main class="form-registration m-md-4 p-4 bg-light border-rounded">
                    <div class="d-flex justify-content-end">
                        <a href="/"><button type="button" class="btn-close" aria-label="Close"></button></a>
                    </div>

                    <h1 class="h3 mb-3 fw-normal text-center">Register</h1>

                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="text" name="name"
                                class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                                placeholder="Name" required autofocus value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            <label for="Password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="d-grid gap-2 col-md-8 mx-auto">
                            <button class="btn btn-lg text-white" type="submit"
                                style="background-color: tomato">Register</button>
                        </div>
                    </form>

                    <p class="d-block text-center mt-4">Sudah daftar?
                        <a class="text-decoration-none" href="/login">Silahkan Login</a>
                    </p>
                </main>
            </div>
        </div>
    </div>
@endsection
