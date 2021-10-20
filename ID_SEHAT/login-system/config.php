<?php

$conn = mysqli_connect("localhost", "root", "", "login_idsehat");

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}

function regist($data) {
    global $conn;

    $email = $data["email"];
    $pass = $data["password"];
    $cpass = $data["cpassword"];

    // cek email
    $result = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert ('Maaf, email sudah terdaftar!')
            </script>";
        return false;
    }

    // cek pass
    if ($pass !== $cpass) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai');
            </script>";
        return false;
    }

    // enkripsi pass
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    // insert db
    mysqli_query($conn, "INSERT INTO users VALUES('', '$email', '$pass')");

    return mysqli_affected_rows($conn);
}
