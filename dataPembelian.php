<?php include "config.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembelian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        .data{
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }       
        .table{
            width: 700px;
        }
    </style>
</head>

<body>
    <div class="data">
        <div class="table">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Nama Pembeli</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No.Telp</th>
                        <th scope="col">Pengiriman</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM tb_pembeli");
                while ($data = mysqli_fetch_array($query)) :
                ?>
                    <tbody>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama_product'] ?></td>
                        <td><?php echo $data['nama'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td><?php echo $data['no_telp'] ?></td>
                        <td><?php echo $data['pengiriman'] ?></td>
                    </tbody>
                <?php endwhile ?>
            </table>
            <p>Total : <?php echo mysqli_num_rows($query) ?></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>