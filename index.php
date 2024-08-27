<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['users'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tomar</title>

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/custom.css" />

    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav>
        <div class="main-navbar shadow-sm sticky-top">
            <div class="top-navbar">
                <div class="container-fluid teks">
                    <div class="row">
                        <div class="col-md-2 my-auto d-none d-sm-none d-md-block d-lg-block">
                            <img class="logo" src="assets/image/Logo.png" />
                        </div>
                        <div class="col-md-5 my-auto">
                            <form role="search">
                                <div class="input-group">
                                    <input type="search" placeholder="Cari Kebutuhanmu" class="form-control" />
                                    <button class="btn bg-success" type="submit">
                                        <i class="fa fa-search text-white"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 my-auto">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-shopping-cart teks"></i> Keranjang (0)
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fa fa-heart teks"></i> Wishlist (0)
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-user teks"></i> Pengguna
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a class="dropdown-item text-sekunder" href="#"><i class="fa fa-user"></i> Profil</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="fa fa-list"></i>Pesanan</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="fa fa-heart"></i>Wishlist</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="fa fa-shopping-cart"></i>Keranjang</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out"></i>Keluar</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Category -->
    <section class="section-1 container-fluid">
        <img src="assets/image/banner.png" alt="" />
        <!-- Swiper -->
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/image/slider.png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/image/slider (1).png" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/image/slider (2).png" alt="" />
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section>
        <div class="py-3 py-md-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">Cari berdasarkan kategori</h4>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="category-card">
                            <a href="">
                                <div class="category-card-img">
                                    <img src="assets/image/Sembako.png" class="w-100" alt="Laptop" />
                                </div>
                                <div class="category-card-body">
                                    <h5>Sembako</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="category-card">
                            <a href="">
                                <div class="category-card-img">
                                    <img src="assets/image/Makanan Ringan.png" class="w-100" alt="Mobile Devices" />
                                </div>
                                <div class="category-card-body">
                                    <h5>Makanan Ringan</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="category-card">
                            <a href="">
                                <div class="category-card-img">
                                    <img src="assets/image/minuman.png" class="w-100" alt="Mens Fashion" />
                                </div>
                                <div class="category-card-body">
                                    <h5>Minuman</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="category-card">
                            <a href="">
                                <div class="category-card-img">
                                    <img src="assets/image/alat kebersihan (2).png" class="w-100" alt="Women Fashion" />
                                </div>
                                <div class="category-card-body">
                                    <h5>Alat Kebersihan</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="category-card">
                            <a href="">
                                <div class="category-card-img">
                                    <img src="assets/image/obat-obatan.png" class="w-100" alt="Women Fashion" />
                                </div>
                                <div class="category-card-body">
                                    <h5>Obat-obatan</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-2">
                        <div class="category-card">
                            <a href="">
                                <div class="category-card-img">
                                    <img src="assets/image/Bumbu dapur.png" class="w-100" alt="Women Fashion" />
                                </div>
                                <div class="category-card-body">
                                    <h5>Bumbu Dapur</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Flash Sale -->
    <section class="container mt-3 rounded-sm">
        <div class="flash-sale">
            <div class="d-flex gap-3 align-items-center mb-4">
                <h3>Flash Sale</h3>
                <div class="d-flex align-items-center">
                    <span class="mr-2">Berakhir dalam</span>
                    <div class="bg-danger text-white px-2 py-1 rounded">03</div>
                    <span>:</span>
                    <div class="bg-danger text-white px-2 py-1 rounded">15</div>
                    <span>:</span>
                    <div class="bg-danger text-white px-2 py-1 rounded">20</div>
                    <a href="#" class="lihat">Lihat Semua</a>
                </div>
            </div>
            <div class="row col-12 col-md-12 col-sm-12 col-lg-12">
                <div class="cek-promo">
                    <div>
                        <img src="assets/image/diskon.png" alt="" class="img-fluid" />
                    </div>
                    <button class="btn mt-4">Cek Promo</button>
                    <p class="mt-4 sk">*S&K berlaku</p>
                </div>
                <div class="card-card">
                    <!-- Card 1 -->
                    <div class="col-md-2 col-2 col-lg-2 col-sm-2 shadow-sm">
                        <a href="detail.page.html">
                            <div class="card">
                                <img src="assets/image/minuman.jpg" class="card-img-top img-fluid" alt="..." style="width: 190px; height: 170px" />
                                <div class="card-body">
                                    <p class="price">Rp24.000</p>
                                    <div class="d-flex">
                                        <p class="original-price">Rp50.000</p>
                                        <p class="discount">52%</p>
                                    </div>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-2 segera">Segera Habis</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 1 -->
                    <div class="col-md-2 col-2 col-lg-2 col-sm-2 shadow-sm">
                        <a href="detail.page.html">
                            <div class="card">
                                <img src="assets/image/beras bunga.png" class="card-img-top img-fluid" alt="..." style="width: 190px; height: 170px" />
                                <div class="card-body">
                                    <p class="price">Rp67.000</p>
                                    <div class="d-flex">
                                        <p class="original-price">Rp90.000</p>
                                        <p class="discount">52%</p>
                                    </div>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-2 segera">Segera Habis</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-md-2 col-2 col-lg-2 col-sm-2 shadow-sm">
                        <a href="detail.page.html">
                            <div class="card">
                                <img src="assets/image/bawang.png" class="card-img-top img-fluid" alt="..." style="width: 190px; height: 170px" />
                                <div class="card-body">
                                    <p class="price">Rp10.000</p>
                                    <div class="d-flex">
                                        <p class="original-price">Rp20.000</p>
                                        <p class="discount">50%</p>
                                    </div>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-2 segera">Segera Habis</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Card 4 -->
                    <div class="col-md-2 col-2 col-lg-2 col-sm-2 shadow-sm">
                        <a href="detail.page.html">
                            <div class="card">
                                <img src="assets/image/kentang.png" class="card-img-top img-fluid" alt="..." style="width: 190px; height: 170px" />
                                <div class="card-body">
                                    <p class="price">Rp25.000</p>
                                    <div class="d-flex">
                                        <p class="original-price">Rp50.000</p>
                                        <p class="discount">52%</p>
                                    </div>
                                    <div class="progress mt-2">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <p class="mt-2 segera">Segera Habis</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section>
        <div class="py-3 py-md-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="mb-4">Produk Kami</h4>
                    </div>
                    <div class="col-md-3">
                        <div class="product-card">
                            <div class="product-card-img">
                                <label class="stock bg-success">In Stock</label>
                                <img src="assets/image/image 36.png" alt="Laptop" />
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">Sayuran</p>
                                <h5 class="product-name">
                                    <a href="detail.page.html">Kangkung / Bayam</a>
                                </h5>
                                <div>
                                    <span class="selling-price">Rp4.000</span>
                                    <span class="original-price">Rp5.000</span>
                                </div>
                                <div class="mt-2">
                                    <a href="" class="btn btn1">Add To Cart</a>
                                    <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                    <a href="" class="btn btn1"> View </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-card">
                            <div class="product-card-img">
                                <label class="stock bg-danger">Out Stock</label>
                                <img src="assets/image/image 37.png" alt="Red MI Note 8" />
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">Sayuran</p>
                                <h5 class="product-name">
                                    <a href="detail.page.html">Wortel Berastagi</a>
                                </h5>
                                <div>
                                    <span class="selling-price">Rp7.000</span>
                                    <span class="original-price">Rp12.000</span>
                                </div>
                                <div class="mt-2">
                                    <a href="" class="btn btn1">Add To Cart</a>
                                    <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                    <a href="" class="btn btn1"> View </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-card">
                            <div class="product-card-img">
                                <label class="stock bg-danger">Out Stock</label>
                                <img src="assets/image/minuman.jpg" alt="Mens Shirt" />
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">Minuman</p>
                                <h5 class="product-name">
                                    <a href="detail.page.html"> Bubuk Minuman </a>
                                </h5>
                                <div>
                                    <span class="selling-price">Rp24.000</span>
                                    <span class="original-price">Rp50.000</span>
                                </div>
                                <div class="mt-2">
                                    <a href="" class="btn btn1">Add To Cart</a>
                                    <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                    <a href="" class="btn btn1"> View </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-card">
                            <div class="product-card-img">
                                <label class="stock bg-success">In Stock</label>
                                <img src="assets/image/Sembakoo.png" alt="Head Phone" />
                            </div>
                            <div class="product-card-body">
                                <p class="product-brand">Sembako>
                                <h5 class="product-name">
                                    <a href="detail.page.html">Telur 5kg</a>
                                </h5>
                                <div>
                                    <span class="selling-price">Rp24.000</span>
                                    <span class="original-price">Rp50.000</span>
                                </div>
                                <div class="mt-2">
                                    <a href="" class="btn btn1">Add To Cart</a>
                                    <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                                    <a href="" class="btn btn1"> View </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div>
            <div class="footer-area bg-success">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <h4 class="footer-heading"><img src="assets/image/Logo putih.png" alt="" style="width: 130px;"></h4>
                            <div class="footer-underline"></div>
                            <p>
                                Toko Kelontong Madura - Menyediakan kebutuhan sehari-hari
                                dengan harga bersahabat.
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-heading">Layanan Kami</h4>
                            <div class="footer-underline"></div>
                            <div class="mb-2">
                                <a href="" class="text-white">Beranda</a>
                            </div>
                            <div class="mb-2">
                                <a href="" class="text-white">Tentang Kami</a>
                            </div>
                            <div class="mb-2">
                                <a href="" class="text-white">Kontak Kami</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-heading">Belanja Sekarang</h4>
                            <div class="footer-underline"></div>
                            <div class="mb-2">
                                <a href="" class="text-white">Trending Produk</a>
                            </div>
                            <div class="mb-2">
                                <a href="" class="text-white">Produk Terbaru</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4 class="footer-heading">Kontak Kami</h4>
                            <div class="footer-underline"></div>
                            <div class="mb-2">
                                <p>
                                    <i class="fa fa-map-marker"></i> Jl. Contoh Alamat No. 123,
                                    Madura
                                </p>
                            </div>
                            <div class="mb-2">
                                <a href="" class="text-white">
                                    <i class="fa fa-phone"></i> +62 888 777
                                </a>
                            </div>
                            <div class="mb-2">
                                <a href="" class="text-white">
                                    <i class="fa fa-envelope"></i> tomar@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="">&copy; 2022 - Tomar. All rights reserved.</p>
                        </div>
                        <div class="col-md-4">
                            <div class="social-media">
                                <a href=""><i class="fa fa-whatsapp"></i></a>
                                <a href=""><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000, // 5000ms = 5 detik
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>