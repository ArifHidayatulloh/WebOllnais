<?php 
include 'config.php';

if (isset($_GET['id_product'])) {
	$id = $_GET['id_product'];
	$hapus = mysqli_query($conn, "DELETE FROM tb_product WHERE id_product = '$id'");
	if ($hapus) {
		echo "<script>alert('Berhasil Menghapus Produk'); document.location.href = 'produk.php'</script>";
	}
	else{
		die('GAGAL');
	}
}
 ?>

