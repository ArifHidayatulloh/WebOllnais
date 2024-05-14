<?php
session_start();
@$user = $_POST['user'];
@$pass = $_POST['pass'];
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="../assets/css/input-produk.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <h1>Login</h1>
  <div class="form">
    <div class="container-form">
      <form action="" method="post" enctype="multipart/form-data" name="FLogin">
        <div class="mb-3 mt-4">
          <label for="formGroupExampleInput" class="form-label warna">Username</label>
          <input type="text" class="form-control" id="formGroupExampleInput" name="user" placeholder="Username">
        </div>
        <div class="mb-3">
          <label for="formGroupExampleInput2" class="form-label warna">Password</label>
          <input type="password" class="form-control" id="formGroupExampleInput2" name="pass" placeholder="Password">
        </div>
        <div class="mb-3">
          <a href="index.php" class="btn btn-primary bg-dark hovered text-center px-5 d-flex justify-content-center mt-3">Batal</a>
          <input type="submit" class="form-control bg-dark" id="formGroupExampleInput2" name="submit" value="Masuk" style="color:white;">
        </div>
        <?php
        if (($user == "ollnais20") && ($pass == "djarum0838")) {
          $_SESSION['stat_login'] = 1;
          $_SESSION['user'] = $_POST['user'];
          $_SESSION['pass'] = $_POST['pass'];


          header("location: ../produk.php");
        } 
        ?>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>