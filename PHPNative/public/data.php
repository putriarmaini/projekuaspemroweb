<?php
        include '../app/conn.php';
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
    <!-- <link rel="stylesheet" href="index.css"> -->
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

    <h4>Banyaknya desa yang mengalami pencemaran air</h4>
    <br>
    <a class="btn btn-light" href="tambah.php" role="button">Tambah Data</a>


<!-- awal tabel -->
    <div class = "tabelAwal">
    <table class="table table-success table-striped">
        <tr class="table-primary">
            <th class="table-primary">Id</th>
            <th class="table-primary">Provinsi</th>
            <th class="table-primary" >2014</th>
            <th class="table-primary" >2018</th>
            <th class="table-primary" colspan="2">Pilihan</th>
        </tr>

        <?php
        $perPage = 25;

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }

        if($page > 1){
            $start = ($page * $perPage) - $perPage;
        }else{
            $start = 0;
        }

            $user = mysqli_query($conn, "SELECT * FROM pencemaran LIMIT $start, $perPage");
            while($baris = mysqli_fetch_array($user)){
                echo "
                <tr>
                    <td>$baris[id]</td>
                    <td>$baris[provinsi]</td>
                    <td>$baris[datadulu]</td>
                    <td>$baris[datakini]</td>
                    <td><a href='hapus.php?kode=$baris[id]'>Delete</a></td>
                    <td><a href='edit.php?kode=$baris[id]'>Edit</a></td>
                </tr>";
            }
        ?>
    </table>

    </div>

    <div class = "halaman">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
            <?php
            $data = mysqli_query($conn, "SELECT * FROM pencemaran");
            $jmlBaris = mysqli_num_rows($data);
            $halaman = ceil($jmlBaris/$perPage);

            for($i = 1; $i<=$halaman; $i++){
                echo "<a href='?page=$i'>$i </a>";
            }

            ?>
            </ul>
        </nav>
    </div>

    
  <!-- footer -->
  <div class="footer " style="background-color: rgb(212, 220, 236)" style="margin:0">
      <img src="img/cws.png" alt="" width="100" height="40" /> <h5>Menjamin Ketersediaan serta Pengelolaan Air Bersih dan Sanitasi yang Berkelanjutan untuk Semua</h5>
    </div>
  <!-- Akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>