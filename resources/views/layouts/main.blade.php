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
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <style>
        * {
            scroll-behavior: smooth;
            font-family: sans-serif;
        }

        a {
            text-decoration: none;
            color: black;
            transition: all 0.25s;
        }

        a:hover {
            color: #ff5555;
        }

        .btn.btn-default {
            background-color: #ff5555;
            border: 1px solid unset;
            color: white;
            transition: all 0.5s;
        }

        .btn.btn-default:hover {
            background-color: unset;
            border: 1px solid #ff5555;
            color: #ff5555;
        }

        .btn.btn-primary {
            background-color: unset;
            border: 1px solid #ff5555;
            color: #ff5555;
            transition: all 0.5s;
        }

        .btn.btn-primary:hover {
            background-color: #ff5555;
            border: 1px solid unset;
            color: white;
        }

        .addons {
            position: fixed;
            bottom: 1rem;
            right: 1.8rem;
            opacity: 0.8;
        }

        .to-top {
            opacity: 0;
            pointer-events: none;
            transition: all 0.5s;
        }

        .to-top.active {
            pointer-events: auto;
            opacity: 1;
        }

        [aria-current] .page-link {
            background-color: #ff5555 !important;
            border: 1px solid #ced4da !important;
        }

        [rel='prev'],
        [rel='next'] {
            color: #808080;
            
        }
        [rel='prev']:hover,
        [rel='next']:hover {
            color: #ff5555;
        }

        .pagination>li :not([rel='prev'], [rel='next'], [aria-current] .page-link) {
            color: #808080;
        }

    </style>

    <title>ID Sehat</title>

</head>

<body>
    @include('layouts.navbar')

    @yield('container')

    @include('layouts.footer')

    @yield('others')

    <div class="addons">
        <div class="to-top">
            <a href="#">
                <i class="bi bi-arrow-up-circle d-block" style="font-size: 2rem;"></i>
            </a>
        </div>
        <a href="https://wa.me/+6282131101770?text=Permisi%20dok%2C%0Asaya%20ingin%20bertanya%20mengenai%20Penyakit%20Mematikan%20di%20Indonesia!"
            target="_blank">
            <i class="bi bi-whatsapp d-block" style="font-size: 2rem"></i>
        </a>
    </div>

    {{-- JS Bundle Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- Personal JS di folder public --}}
    <script>
        const toTop = document.querySelector(".to-top");

        window.addEventListener("scroll", () => {
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            } else {
                toTop.classList.remove("active");
            }
        })
    </script>

    <script>
        var myModal = document.getElementById('myModal')
        var myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', function() {
            myInput.focus()
        })
    </script>
</body>

</html>
