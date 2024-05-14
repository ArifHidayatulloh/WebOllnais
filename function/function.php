<?php
$conn = mysqli_connect('localhost', 'root', '', 'db_toko');

function query($perintah)
{
    global $conn;

    $req = mysqli_query($conn, $perintah);

    $res = [];

    foreach ($res as $r) {
        $res[] = $r;
    }

    return $res;
}

function hapusProduk($id_prodcut)
{
    global $conn;

    $data = query("SELECT * FROM 'tb_product' WHERE id_product = '$id_prodcut'");

    if(!$data){
        return false;
    }

    mysqli_query($conn, "DELETE FROM 'tb_product' WHERE 'id_product' = '$id_prodcut'");
    return mysqli_affected_rows($conn);
}

function pembeli($data){
    global $conn;

    $id_product = $data['id_product'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $no_telp = $data['no_telp'];
    $pengiriman = $data['pengiriman'];


    mysqli_query($conn,"INSERT INTO 'tb_pembeli' ('id_product','nama','alamat','no_telp','pengiriman') value ('$id_product','$nama','$alamat','$no_telp','$pengiriman')");

    return mysqli_affected_rows($conn);
}
