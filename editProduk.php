<?php 
include "config.php";
if(!isset($_GET['id_product'])){
    header('location: produk.php');
}
$id_product = $_GET['id_product'];
$query = mysqli_query($conn,"SELECT * FROM tb_product WHERE id_product='$id_product'");
$data = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    echo "<script>alert('Maaf Data Tidak Tersedia'); document.location.href='produk.php';</script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/input-produk.css">
</head>

<body>
    <h1>Ubah Produk</h1>
    <div class="form">
        <div class="container-form">
            <form action="edit.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 mt-4">
                    <label for="formGroupExampleInput" class="form-label warna">Nama Produk</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="nama_product" placeholder="Nama Produk" value="<?php echo $data['nama_product'];?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Produk</label>
                    <input type="file" class="form-control" id="formGroupExampleInput2" name="foto_product" placeholder="Gambar Produk" value="<?php echo $data['foto_product'];?>">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Deskripsi Produk</label>
                    <textarea type="textarea" class="form-control" id="formGroupExampleInput2" name="dekripsi_product" placeholder="Deskripsi Produk" ><?php echo $data['dekripsi_product']?></textarea>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Harga Produk</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" name="harga" placeholder="Harga Produk" value="<?php echo $data['harga'];?>">
                </div>
                <div class="mb-3">
                    <a href="produk.php" class="btn btn-primary bg-dark hovered text-center px-5 d-flex justify-content-center mt-3">Batal</a>
                    <input type="submit" class="form-control bg-dark" id="formGroupExampleInput2" name="submit" placeholder="Harga Produk" value="Simpan" style="color:white;">
                    <input type="hidden" value="<?php echo $data['id_product'];?>" name="id_product">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>