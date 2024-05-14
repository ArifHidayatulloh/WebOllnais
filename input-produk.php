<?php include "config.php"; ?>
<?php
if (isset($_POST['submit'])) {
    $folder = 'produk/';
    $name_p = $_FILES['foto_product']['name'];
    $destination = $_FILES['foto_product']['tmp_name'];
    move_uploaded_file($destination, $folder . $name_p);
    $insert = mysqli_query($conn, "INSERT INTO tb_product VALUES (NULL,'" . $_POST['nama_product'] . "','" . $name_p . "','" . $_POST['dekripsi_product'] . "',	'" . $_POST['harga'] . "') ");

    if ($insert) {
        echo "<script>alert('Berhasil Menambah Produk'); document.location.href = 'produk.php'</script>";
    } else {
        echo "<script>alert('Gagal Menambah Produk')";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/input-produk.css">
</head>

<body>
    <h1>Tambah Produk</h1>
    <div class="form">
        <div class="container-form">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3 mt-4">
                    <label for="formGroupExampleInput" class="form-label warna">Nama Produk</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="nama_product" placeholder="Nama Produk">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Produk</label>
                    <input type="file" class="form-control" id="formGroupExampleInput2" name="foto_product" placeholder="Gambar Produk">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Deskripsi Produk</label>
                    <textarea type="textarea" class="form-control" id="formGroupExampleInput2" name="dekripsi_product" placeholder="Deskripsi Produk"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Harga Produk</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="Harga Produk">
                </div>
                <div class="mb-3">
                    <a href="produk.php" class="btn btn-primary bg-dark hovered text-center px-5 d-flex justify-content-center mt-3">Batal</a>
                    <input type="submit" class="form-control bg-dark" id="formGroupExampleInput2" name="submit" placeholder="Harga Produk" value="Simpan" style="color:white;">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>