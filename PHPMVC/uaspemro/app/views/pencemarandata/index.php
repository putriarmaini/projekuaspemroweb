<?php
$conn = mysqli_connect("localhost","root","","cws");
?>

<div class="col text-center mt-5">
    <h2>Banyaknya Desa yang mengalami pencemaran air</h2>
</div>
    <br>
    <a class="btn btn-primary " href="tambah.php" role="button">Tambah Data</a>
    <br>
    <br>


<!-- awal tabel -->
    <div class = "tabelAwal">
    <table class="table table-success table-striped">
        <tr class="table-primary">
            <th class="table-primary">Id</th>
            <th class="table-primary">Provinsi</th>
            <th class="table-primary" >2014</th>
            <th class="table-primary" >2018</th>
            <th class="table-primary" colspan="2">Pilihan</th>
        </tr>

        <?php
        $perPage = 25;

        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }else{
            $page = 1;
        }

        if($page > 1){
            $start = ($page * $perPage) - $perPage;
        }else{
            $start = 0;
        }

            $user = mysqli_query($conn, "SELECT * FROM pencemaran LIMIT $start, $perPage");
            while($baris = mysqli_fetch_array($user)){
                echo "
                <tr>
                    <td>$baris[id]</td>
                    <td>$baris[provinsi]</td>
                    <td>$baris[datadulu]</td>
                    <td>$baris[datakini]</td>
                    <td><a href='hapus.php?kode=$baris[id]'>Delete</a></td>
                    <td><a href='edit.php?kode=$baris[id]'>Edit</a></td>
                </tr>";
            }
        ?>
    </table>

    </div>

    <div class = "halaman">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
            <?php
            $data = mysqli_query($conn, "SELECT * FROM pencemaran");
            $jmlBaris = mysqli_num_rows($data);
            $halaman = ceil($jmlBaris/$perPage);

            for($i = 1; $i<=$halaman; $i++){
                echo "<a href='?page=$i'>$i </a>";
            }

            ?>
            </ul>
        </nav>
    </div>