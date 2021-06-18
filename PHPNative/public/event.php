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
              <a class="nav-link active" aria-current="page" href="#">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="member.php">Member</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(212, 220, 236)" fill-opacity="1" d="M0,224L48,192C96,160,192,96,288,96C384,96,480,160,576,192C672,224,768,224,864,197.3C960,171,1056,117,1152,96C1248,75,1344,85,1392,90.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    <!-- Akhir Navbar -->

    <!-- Event -->
    <div class="event d-flex justify-content-around">
        <div class="tulisan">
            <div class="join">
            <h1>JOIN OUR EVENT!</h1>
            </div>
            <div class="sanitair">
            <h2>SANITAIR</h2>
            </div>
            <div class="keterangan text-center">
            <h5>Pelatihan Sanitasi dan Air Bersih</h5>
            </div>
        </div>
        <div class="form">
            <form action='../app/event_login.php' method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- Akhir Event -->
    



    <!-- footer -->
    <div class="footer text-center fst-italic " style="background-color: rgb(212, 220, 236)">
      <img src="img/cws.png" alt="" width="100" height="40" /> 
      <br>
      <h5>Menjamin Ketersediaan serta Pengelolaan Air Bersih dan Sanitasi yang Berkelanjutan untuk Semua</h5>
    </div>
    <!-- Akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
