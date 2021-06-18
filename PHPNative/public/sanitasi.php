<?php 
    $data ="https://www.sehatq.com/artikel/tingkatkan-sanitasi-lingkungan-untuk-usir-berbagai-penyakit";
    $get_isi = file_get_contents($data);

    echo $get_isi;

?>