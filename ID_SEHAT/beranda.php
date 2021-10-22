<?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: login-system/login.php");
        exit;
    }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>ID Sehat</title>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top me-2">
                <b>ID Sehat</b>
            </a>
            <button class="navbar-toggler border-0 my-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="beranda.html"><b>Beranda</b></a>
                    <a class="nav-link" href="organ.php"><b>Organ Manusia</b></a>
                    <a class="nav-link" href="#"><b>Peta</b></a>
                    <a class="nav-link border-success" href="https://wa.me/+6282131101770?text=Permisi%20dok%2C%0Asaya%20ingin%20bertanya%20mengenai%20Penyakit%20Mematikan%20di%20Indonesia!"><b>WA Dokter</b></a>
                    <a class="nav-link login" href="login-system/logout.php"><b>Logout</b></a>
                </div>
            </div>
        </div>
    </nav>
    <div class="hero">
        <div class="container p-4 my-5">
            <h1>Penyakit Mematikan<br>di Indonesia</h1>
            <hr> <br>
            <img src="assets/6796.png" class="img-fluid pb-4 float-end">
            <p>Memiliki hidup sehat dan panjang umur merupakan impian setiap manusia. Sayangnya, tak sedikit orang yang
                dihadapkan oleh beberapa penyakit. Baik itu ringan hingga paling mematikan sekalipun.</p>
            <p>Munculnya virus covid 19 dan akhirnya menjadi pandemik masyarakat melupakan bahwa terdapat penyakit lain
                yang lebih mematikan di Indonesia daripada covid 19.</p>
            <a href="penyakit.php"><button type="button" class="btn">Baca Selengkapnya</button></a>
        </div>
    </div>
    <footer class="footer bg-light mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-sm-2">
                    <div class="card">
                        <p class="navbar-brand text-dark"><b>ID Sehat</b></p><br>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="card">
                        <h5><b>About</b></h5>
                        <p>Web ini dibuat untuk memenuhi tugas mata kuliah Pemrograman Web</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <h5><b>Contact</b></h5>
                        <ul>
                            <li><a href="#" style="color: #000;">aziz.19049@mhs.unesa.ac.id</a></li>
                            <li><a href="#" style="color: #000;">seterusnya</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </footer>

    <a href="#" class="to-top material-icons md-48">
        keyboard_arrow_up
    </a>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>
</body>

</html>