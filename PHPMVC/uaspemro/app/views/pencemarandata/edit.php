<?php

$sql=mysqli_query($conn,"select * from pencemaran where id='$_GET[kode]'");
$data=mysqli_fetch_array($sql);

?>
<h3> Edit Data <h3>

<form action="" method="post">
<table>
    <tr>
        <td>Provinsi</td>
        <td><input type="text" name="provinsi" value="<?php echo $data['provinsi']; ?>"></td>
    </tr><br>
    <tr>
        <td >data 2014</td>
        <td><input type="number" name="datadulu" value="<?php echo $data['datadulu']; ?>"></td>
    </tr>
    <tr>
        <td>data 2018</td>
        <td><input type="number" name="datakini" value="<?php echo $data['datakini']; ?>"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="Save" name="proses">
    </tr>
</table>
</form>

<?php

    if(isset($_POST['proses'])){
    mysqli_query($conn, "update pencemaran set
    provinsi = '$_POST[provinsi]',
    datadulu = '$_POST[datadulu]',
    datakini = '$_POST[datakini]'
    where id = '$_GET[kode]'");

    echo "Data berhasil diedit";
    echo "<meta http-equiv=refresh content=1;URL='data.php'>";
    }

?>