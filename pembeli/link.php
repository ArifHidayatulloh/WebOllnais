<?php 
include "../config.php";

$data = mysqli_query($conn,"SELECT * FROM tb_pembeli");

$hasil = mysqli_fetch_array($data);

$url = "https://api.whatsapp.com/send/?phone=6282216175214&text=Nama : <?php echo '$hasil'['nama'];?>+%0A+Alamat :+%0A+Barang : +%0A+Pengiriman :+%0A+";


?>