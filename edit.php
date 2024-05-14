<?php include "config.php"; ?>
<?php
if (isset($_POST['submit'])) {
    $folder = 'produk/';
    $name_p = $_FILES['foto_product']['name'];
    $destination = $_FILES['foto_product']['tmp_name'];
    move_uploaded_file($destination, $folder . $name_p);
    $nama = $_POST['nama_product'];
    $deskripsi = $_POST['dekripsi_product'];
    $harga = $_POST['harga'];
    $id = $_POST['id_product'];
    $update = mysqli_query($conn, "UPDATE tb_product SET nama_product='$nama',foto_product='". $name_p ."', dekripsi_product='$deskripsi', harga='$harga' WHERE id_product='$id'");

    if ($update) {
        echo "<script>alert('Berhasil Mengubah Produk'); document.location.href = 'produk.php'</script>";
    } else {
        echo "<script>alert('Gagal Menambah Produk')";
    }
}

?>