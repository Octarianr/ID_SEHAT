@extends('auth.app')

@section('container')
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <main class="form-signin my-5">
                    <div class="d-flex justify-content-end">
                        <a href="/login"><button type="button" class="btn-close" aria-label="Close"></button></a>
                    </div>

                    <h1 class="h3 mb-3 fw-normal text-center">Reset Password</h1><br>

                    <form action="/forgot-password" method="POST">
                        @csrf
                        <div class="form-floating mb-4">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror "
                                id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                            <label for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2 col-md-8 mx-auto">
                            <button class="btn btn-lg text-white" type="submit"
                                style="background-color: tomato">Reset</button>
                        </div>
                    </form>
                </main>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Reset Password</div>

                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form method="POST" action="/forgot-password">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Send Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
