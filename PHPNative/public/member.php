<?php

require '../app/member_register.php'

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  .footer{
      text-align: center;
      height: 95px;
      padding-top: 10px;
      margin-top: 90px;
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
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sdgs.php">SDGs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event.php">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Member</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <h1>Daftar Member</h1>
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
    </form>

    <br>
    <a class="btn btn-light" href="../app/actionlogout.php" role="button">Log Out</a>

  <!-- footer -->
  <div class="footer " style="background-color: rgb(212, 220, 236)" style="margin:0">
      <img src="img/cws.png" alt="" width="100" height="40" /> <h5>Menjamin Ketersediaan serta Pengelolaan Air Bersih dan Sanitasi yang Berkelanjutan untuk Semua</h5>
    </div>
  <!-- Akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>