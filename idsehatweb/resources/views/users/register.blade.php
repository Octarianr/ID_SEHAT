<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>ID Sehat | Register</title>
</head>

<body>
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
                                class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                id="password" placeholder="Password" required>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
