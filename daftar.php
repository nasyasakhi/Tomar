<?php
session_start();
include 'database.php';

if(isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $role_as = 0; // Default role for new users

    $query = mysqli_query($conn, "INSERT INTO users(name, email, password, role_as) VALUES ('$name', '$email', '$password', '$role_as')");

    if($query) {
        echo '<script>alert("Selamat, pendaftaran Anda berhasil. Silakan login."); location.href = "login.php";</script>';
    } else {
        echo '<script>alert("Pendaftaran gagal.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet" />

    <link rel="shortcut icon" href="assets/image/Logo-kecil.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <link rel="stylesheet" href="css/custom.css" />
</head>
<body>

    <!-- ini muncul di layar yang default -->
    <div class="container vh-100 d-flex flex-column justify-content-center d-none d-lg-flex">
        <div class="row cont">
            <div class="col-6 col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
                <img src="assets/image/logo-panjang.png" alt="">
                <h2 class="slogan1 mt-5">Belanja Mudah, Pengiriman cepat!</h2>
                <p class="slogan2 mt-2">Tak perlu antri, cukup klik, pesan, dan tunggu di rumah</p>
            </div>

            <div class="col-6 col-md-6">
                <div style="width: 479px;" class="card-register">
                    <h4 class="text-center">Daftar Sekarang</h4>
                    <p class="text-center">Sudah punya akun Tomar? <a href="login.php">Masuk</a></p>
                    <form class="mt-5" method="post">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="name" required class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" required class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-daftar w-100 mt-4">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ini munculnya cuma di layar selain default -->
    <div class="container-2 d-flex justify-content-center align-items-center d-block d-lg-none ">
        <div class="row">
            <div class="col-12 col-md-6">
                <div style="width: 479px;" class="card-register">
                    <img src="assets/image/Logo-kecil.png" alt="" class="img-fluid d-block mx-auto mb-5">
                    <h4 class="text-center">Daftar Sekarang</h4>
                    <p class="text-center">Sudah punya akun Tomar? <a href="login.html">Masuk</a></p>
                    <form class="mt-5" method="post">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" name="name" required class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" required class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" required class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-daftar w-100 mt-4">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
