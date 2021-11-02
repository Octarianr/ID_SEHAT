<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    {{-- Personal CSS di folder public --}}
    <link rel="stylesheet" href="/css/style.css">

    <title>ID Sehat</title>

</head>

<body>
    @include('layouts.navbar')

    @yield('container')

    @include('layouts.footer')

    <div class="addons">
        <div class="to-top">
            <a href="#">
                <i class="bi bi-arrow-up-circle d-block" style="font-size: 2.4rem;"></i>
            </a>
        </div>
        <a
            href="https://wa.me/+6282131101770?text=Permisi%20dok%2C%0Asaya%20ingin%20bertanya%20mengenai%20Penyakit%20Mematikan%20di%20Indonesia!" target="_blank">
            <i class="bi bi-whatsapp d-block" style="font-size: 2.4rem"></i>
        </a>
    </div>

    {{-- JS Bundle Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- Personal JS di folder public --}}
    <script src="/js/script.js"></script>
</body>

</html>
