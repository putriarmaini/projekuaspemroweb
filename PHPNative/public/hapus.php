<?php
    include '../app/conn.php';
    include 'data.php'
?>

<?php

    if(isset($_GET['kode'])){

        mysqli_query($conn,"delete from pencemaran where id='$_GET[kode]'");
        
        echo "Data telah terhapus";
        echo "<meta http-equev=refresh content=2;URL='index.php'>";
        }
?>