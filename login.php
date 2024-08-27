<?php
session_start();

// Cek apakah user sudah login
if (isset($_SESSION['users'])) {
    header("Location: index.php");
    exit;
}

include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login ke Website</title>

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

<?php
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

        if(mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_array($query);
            $_SESSION['users'] = $data;
            echo '<script>alert("Selamat datang, '.$data['name'].'"); location.href = "index.php"; </script>';
            exit;
        } else {
            echo '<script>alert("Email/password tidak sesuai"); </script>';
        }
    }
?>
 
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
                    <h4 class="text-center">Masuk</h4>
                    <p class="text-center">Belum punya akun Tomar? <a href="daftar.php">Daftar</a></p>
                    <form class="mt-5" method="post">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <button type="submit" class="btn btn-daftar w-100 mt-4">Masuk</button>
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
                    <h4 class="text-center">Masuk</h4>
                    <p class="text-center">Belum punya akun Tomar? <a href="daftar.php">Daftar</a></p>
                    <form class="mt-5" method="post">
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <button type="submit" class="btn btn-daftar w-100 mt-4">Masuk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>