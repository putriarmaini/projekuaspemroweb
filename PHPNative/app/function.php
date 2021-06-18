<?php

require 'conn.php';

function registrasi($data){
    global $conn;

    $name = strtolower(stripslashes ($data["name"]));
    $username = strtolower(stripslashes ($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string ($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    
    if(mysqli_fetch_assoc($result)){
        echo "echo <script>
                alert('username sudah ada');
            </script>";
        return false;     
    }

    if ($password !== $password2){
        echo " <script>
                alert('password tidak sesuai');
                </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO user VALUES(null,'$name', '$username', '$password')");

    return mysqli_affected_rows($conn);

}
?>