<?php

session_start();

//cek cookie

if (isset($_COOKIE['login'])){
    if($_COOKIE['login'] == 'true'){
        $_SESSION['login'] = true;
    }

}

if(isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

require '../app/conn.php';

if (isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result= mysqli_query($conn, "SELECT * from user where username = '$username'");

    //cek username ada tidak pada database
    if (mysqli_num_rows($result) === 1){

        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ) {
            //set session
            $_SESSION["login"]= true;
    
                //cek remember
                if (isset($_POST['remember'])){
                    // buat cookie
                    setcookie('login', 'true', time() + 100);
    
                }
                header("Location: index.php");
                exit;
            }
        }

    $error = true;

}

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

    <h1> WELCOME TO CWS </h1>

<?php

if (isset($error)) : ?>
    <p style="color : red;">username atau password salah<p>
<?php endif; 
?>

<form action="" method="post" class="form">
    <div class="mb-3">
        <label for="exampleInputEmailUsername" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="remember" id="remember">
        <label class="form-check-label" for="exampleCheck1" class="remember" id="remember">Remember Me</label>
    </div>
        <button type="submit" class="btn btn-primary" name="login">Submit</button>
</form>

    <br>
    <a class="btn btn-light" href="member.php" role="button">Belum Punya Akun</a>
  <!-- footer -->
    <div class="footer " style="background-color: rgb(212, 220, 236)" style="margin:0">
      <img src="img/cws.png" alt="" width="100" height="40" /> <h5>Menjamin Ketersediaan serta Pengelolaan Air Bersih dan Sanitasi yang Berkelanjutan untuk Semua</h5>
    </div>
  <!-- Akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>