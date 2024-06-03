<?php
	include('header.php');
    $myQry = mysqli_query($koneksi, "SELECT * FROM gudang");
?>
<h2>Laporan Data Gudang</h2>
<hr/>
<div class="table-responsive">
    <?php
    if(mysqli_num_rows($myQry) == 0){
        ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ada..!
            </div>
        <?php
        }else{
        ?>    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Gudang</th>
                <th>Lokasi Gudang</th>
                <th>Luas Gudang</th>
                <th>Tools</th>
            </tr>
        </thead>
        <tbody>                
            <?php 
                $mySql = "SELECT * FROM gudang";
                $myQry = mysqli_query($koneksi, $mySql) or die (" Query salah: ".mysqli_error($koneksi));
                $nomor = 1;
                while($komlomData = mysqli_fetch_array($myQry)){
            ?>
            <tr>
                <td><?=$nomor++?></td>
                <td><?=$komlomData['nama_gudang']?></td>
                <td><?=$komlomData['lokasi_gudang']?></td>
                <td><?=$komlomData['luas_gudang']?> m2</td>
                <td>
                    <a href="gudang_edit.php?id=<?=$komlomData['id']?>" title="Edit Data" class="btn btn-primary btn-sm">
                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                    </a>
                    <a href="gudang_delete.php?id=<?=$komlomData['id']?>" title="Hapus Data" class="btn btn-danger btn-sm">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>

            <?php
                }
            ?>
        </tbody>
    </table>
    <?php
        }
    ?>
</div>
<img src="img/btn_print.png" width="25" alt="" onclick="window.print()">
<?php
	include('footer.php');

?>
