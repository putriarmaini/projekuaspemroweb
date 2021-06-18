<?php
    require "../app/conn.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
        .footer{
        text-align: center;
        height: 95px;
        padding-top: 10px;
        }
    </style>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
        <title>CWS</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: rgb(212, 220, 236)">
            <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/cws.png" alt="" width="100" height="40" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="sdgs.php">SDGs</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="event.php">Event</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="member.php">Member</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Akhir Navbar -->

            <?php

            $sql=mysqli_query($conn,"select * from pencemaran where id='$_GET[kode]'");
            $data=mysqli_fetch_array($sql);

            ?>
            <h3> Edit Data <h3>

            <form action="" method="post">
            <table>
                <tr>
                    <td>Provinsi</td>
                    <td><input type="text" name="provinsi" value="<?php echo $data['provinsi']; ?>"></td>
                </tr><br>
                <tr>
                    <td >data 2014</td>
                    <td><input type="number" name="datadulu" value="<?php echo $data['datadulu']; ?>"></td>
                </tr>
                <tr>
                    <td>data 2018</td>
                    <td><input type="number" name="datakini" value="<?php echo $data['datakini']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Save" name="proses">
                </tr>
            </table>
            </form>

<!-- <h1>Daftar Member</h1>
    <form action="" method="Post" class="form">
      <div class="mb-3 row">
        <label for="name" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
          <input type="name" class="form-control" id="name" name="name">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="username" class="form-control" id="username" name="username">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="password2" class="col-sm-2 col-form-label">Konfirmasi Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password2" name="password2">
        </div>
      </div>
      <div class="submit">
          <input class="btn btn-primary" type="submit" value="Submit" name='register'>
      </div>
    </form> -->

            <?php

                if(isset($_POST['proses'])){
                mysqli_query($conn, "update pencemaran set
                provinsi = '$_POST[provinsi]',
                datadulu = '$_POST[datadulu]',
                datakini = '$_POST[datakini]'
                where id = '$_GET[kode]'");

                echo "Data berhasil diedit";
                echo "<meta http-equiv=refresh content=1;URL='data.php'>";
                }

            ?>
    <!-- footer -->
        <div class="footer " style="background-color: rgb(212, 220, 236)" style="margin:0">
            <img src="img/cws.png" alt="" width="100" height="40" /> <h5>Menjamin Ketersediaan serta Pengelolaan Air Bersih dan Sanitasi yang Berkelanjutan untuk Semua</h5>
        </div>
    <!-- Akhir footer -->

    </body>
</html>