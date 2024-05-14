<?php 
session_start();
if (!isset($_SESSION['stat_login']) and !isset($_SESSION['user']) and !isset($_SESSION['pass']))  {
	die("<script>alert('Apakah Anda Pengelola?'); document.location.href = 'login/login.php'</script>");
}
else{
	echo "<a href='login/logout.php' class='btn btn-primary bg-dark hovered text-center px-5 d-flex justify-content-center mt-0'>Logout</a>";
}
?>

<?php include "config.php"; ?>

<?php 
require 'function/function.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ollnais.co</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/produkPage.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script>
        function scrollHome() {
            var home = document.getElementById('home');
            document.location.href = 'index.php';
        }

        function scrollProduk() {
            var produk = document.getElementById('produk');
            produk.scrollIntoView();
        }

        function scrollContact() {
            var contact = document.getElementById('contact');
            document.location.href = 'index.php';
        }
    </script>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="assets/image/logo.jpg" alt="">
                <h5>Ollnais.co</h5>
            </div>
            <nav>
                <div class="navbar">
                    <ul>
                        <li><button onclick="scrollHome()">HOME</button></li>
                        <li><button onclick="scrollProduk()">PRODUCT</button></li>
                        <li><button onclick="scrollContact()">CONTACT</button></li>
                    </ul>
                </div>
                <div class="menu">
                    <button class="btn btn-primary background border-0 bg-transparent text-dark fs-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class='bx bx-menu'></i></button>

                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasRightLabel">Ollnais.co</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item button">
                                    <button type="button" class="btn btn-light menu-button w-50 mb-2" onclick="scrollHome()">HOME</button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-light menu-button w-50 mb-2" onclick="scrollProduk()">PRODUK</button>
                                </li>
                                <li class="nav-item">
                                    <button type="button" class="btn btn-light w-50 mb-2" onclick="scrollContact()">CONTACT</button>
                                </li>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="produk" id="produk">
        <div class="txt-Produk">
            <h2>Produk</h2>
        </div>
        <div class="tambah">
            <a href="input-produk.php"><i class='bx bxs-plus-circle'> <b>Tambah Produk</b></i></a>
            <a href="dataPembelian.php" style="margin-left: 70%;"><i class='bx bxs-plus-circle'> <b>Data Pembelian</b></i></a>
        </div>
        <div class="card">
            <div class="row d-flex justify-content-center">
                <?php
                include 'config.php';
                $produk = mysqli_query($conn, "SELECT * FROM tb_product");
                while ($hasil = mysqli_fetch_array($produk)) {
                ?>
                    <div class="col-lg-3 col-sm-6 mb-5 d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="produk/<?php echo $hasil['foto_product'] ?>" class="card-img-top hovered" alt="...">
                            <div class="card-body ">
                                <h5 class="card-title text-body card-size"><?php echo $hasil['nama_product']; ?></h5>
                                <h6 class="card-title text-center text-body card-size" style="font-size: 17px;"><?php echo $hasil['dekripsi_product']; ?></h6>
                                <p class="card-text text-center text-body card-size"><?php echo $hasil['harga']; ?></p>
                                <a href="hapusProduk.php?id_product=<?php echo $hasil['id_product']?> " class="btn btn-primary bg-dark hovered text-center px-5 d-flex justify-content-center">Hapus</a>
                                <a href="editProduk.php?id_product=<?php echo $hasil['id_product']?> " class="btn btn-primary bg-dark hovered text-center px-5 d-flex justify-content-center">Ubah</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="copy">
        <div class="container-copy">
            <div class="copyright">
                <h5>&#169;2022 Ollnais.co-All Right Reserved</h5>
            </div>
            <div class="medsos">
                <div class="container-medsos">
                    <ul>
                        <li><a href="https://www.instagram.com/ollnais.co/"><i class='bx bxl-instagram-alt'></i></a></li>
                        <li><a href="https://web.facebook.com/profile.php?id=100058005705875"><i class='bx bxl-facebook-circle'></i></a></li>
                        <li><a href="https://www.tiktok.com/@ollnais"><i class='bx bxl-tiktok'></i></a></li>
                        <li><a href="https://api.whatsapp.com/send/?phone=6282216175214&text&type=phone_number&app_absent=0"><i class='bx bxl-whatsapp'></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>