<?php
include "../config.php";

$nama_product = $_POST['nama_product'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$pengiriman = $_POST['pengiriman'];

$query = mysqli_query($conn,"INSERT INTO tb_pembeli (nama_product,nama,alamat,no_telp,pengiriman) VALUES ('$nama_product','$nama','$alamat','$no_telp','$pengiriman')");





$url = "https://api.whatsapp.com/send/?phone=6282216175214&text=Hallo Nice Peeps!!! +%0A+Format Order Ollnais.co: +%0A+Nama : $nama+%0A+Alamat : $alamat+%0A+Barang : $nama_product+%0A+Telepon : $no_telp +%0A+Pengiriman : $pengiriman+%0A+";
if($query){
    header("Location: $url");
}
?>
