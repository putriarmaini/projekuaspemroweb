<!DOCTYPE html>
<html lang="en">
<head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Sigmar+One&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');
  .footer{
      text-align: center;
      height: 95px;
      padding-top: 10px;
      margin-top: 90px;
    }
    .event{
      margin-bottom: 10px;
    }
    .join{
        font-family: 'Sigmar One', cursive;
    }
    .sanitair{
        font-family: 'Sigmar One', cursive;
        color: #1D70B8;
        text-align: center;
    }
    .keterangan{
        font-family: 'Montserrat', sans-serif;
        color: #1D70B8;
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CWS <?php echo $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= baseurl; ?>/css/bootstrap.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: rgb(212, 220, 236)">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= baseurl;?>/img/cws.png" alt="" width="100" height="40" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="<?= baseurl; ?>/home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= baseurl;?>/sdgs">SDGs</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= baseurl;?>/pencemarandata">Data</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= baseurl;?>/event">Event</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= baseurl;?>/login">Member</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Akhir Navbar -->