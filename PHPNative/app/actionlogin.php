<?php

session_start();

//cek cookie

if (isset($_COOKIE['login'])){
    if($_COOKIE['login'] == 'true'){
        $_SESSION['login'] = true;
    }

}

if(isset($_SESSION["login"])) {
    header("Location: ../public/index.php");
    exit;
}

include 'conn.php';


if (isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result= mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

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

                echo "<script>alert('Anda berhasil masuk!'); document.location.href = '../public/index.php'; Location: '../public/index.php'; </script>";
            }else{
                echo "<script>alert('Username/email belum terdaftar, silahkan melakukan Register'); document.location.href = '../public/login.php';</script>";
            }

            header("document.location.href = '../public/index.php");
            exit;
        }
    }

    $error = true;

}


?>