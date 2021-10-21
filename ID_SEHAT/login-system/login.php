<?php
require 'config.php';

if (isset($_POST["masuk"])) {

  $email = $_POST["email"];
  $pass = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

  // cek email
  if (mysqli_num_rows($result) === 1) {

    // cek pass
    $row = mysqli_fetch_assoc($result);
    if (password_verify($pass, $row["password"])) {
      header("Location: ../beranda.php");
      exit;
    }
  }
  $error = true;

}
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Masuk | ID Sehat</title>


  <!-- Custom styles for this template -->
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <section class="form-signin text-end">
    <a href="../beranda.php"><i class="material-icons md-36">highlight_off</i></a>

    <form action="" method="POST" class="text-center" id="daftar">
      <img class="mb-2" src="../assets/logo/logo.png" alt="" width="72" height="57">
      <h1 class="h3 mb-4 fw-normal">LOG IN</h1>

      <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">username/password salah</p>
      <?php endif; ?>

      <div class="form-floating mb-2">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating mb-4">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Password</label>
      </div>
      <button class="btn btn-lg px-4 mb-4" type="submit" name="masuk">Masuk</button>
      <p>Belum punya akun? <a href="signup.php">SIGN UP</a></p>
    </form>
  </section>



</body>

</html>