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

        <h3> Menambah Data <h3>

        <!-- awal form tambah data -->
        <form action="" method="post">
        <table>
            <tr>
                <td width="100">Provinsi</td>
                <td><input type="text" name="provinsi"></td>
            </tr><br>
            <tr>
                <td >Data tahun 2014</td>
                <td><input type="number" name="datadulu"></td>
            </tr>
            <tr>
                <td >Data tahun 2018</td>
                <td><input type="number" name="datakini"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Save" name="proses">
            </tr>
        </table>
        </form>
        <!-- akhir form tambah data -->

        <?php

        if(isset($_POST['proses'])){
            mysqli_query($conn, "insert into pencemaran set
            provinsi = '$_POST[provinsi]',
            datadulu = '$_POST[datadulu]',
            datakini = '$_POST[datakini]'");

            echo "Data berhasil disimpan";
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