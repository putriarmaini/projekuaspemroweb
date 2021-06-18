<?php

require 'function.php';

if(isset($_POST["register"])){

    if(registrasi($_POST) > 0){
        echo "<script>
                alert('user berhasil di tambahkan');
                document.location.href = '../public/member.php';
                </script>";
                exit;         
    } else{
        echo mysqli_error($conn);
    }

}

?>