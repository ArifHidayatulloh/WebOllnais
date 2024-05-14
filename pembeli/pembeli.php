<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembeli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/input-produk.css">
</head>

<body>
    <h1>Data Pembelian</h1>
    <div class="form">
        <div class="container-form">
            <form action="simpan.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Produk</label>
                    <select class="form-select" aria-label="Default select example" name="nama_product" id="nama_product" disabled="">
                        <?php include "../config.php"; 
                            $id_product = $_GET['id_product']
                        ?>
                        <?php $data = mysqli_query($conn, "SELECT * FROM tb_product WHERE id_product='$id_product'"); ?>
                        <?php foreach ($data as $barang) : ?>
                            <option value="<?= $barang["nama_product"]; ?>"><?= $barang["nama_product"] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3 mt-4">
                    <label for="formGroupExampleInput" class="form-label warna">Nama</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="Masukkan Nama Anda">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Alamat</label>
                    <textarea type="" class="form-control" id="formGroupExampleInput2" name="alamat" placeholder="Alamat"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Nomor Telpon</label>
                    <input type="number" class="form-control" id="formGroupExampleInput2" name="no_telp" placeholder="Nomor Telpon">
                </div>

                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label warna">Pengiriman</label>
                    <select class="form-select" aria-label="Default select example" name="pengiriman">
                        <option selected>JNE</option>
                        <option selected>JNT</option>
                        <option selected>Sicepat</option>
                        <option selected>Pilih Jenis Pengiriman</option>
                    </select>
                </div>
                <div class="mb-3">
                    <a href="../index.php" class="btn btn-primary bg-dark hovered text-center px-5 d-flex justify-content-center mt-3">Batal</a>
                    <input type="submit" class="form-control bg-dark" id="formGroupExampleInput2" name="submit" placeholder="Harga Produk" value="Simpan" style="color:white;">
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>