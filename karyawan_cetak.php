<?php
	include('header.php');
    $myQry = mysqli_query($koneksi, "SELECT * FROM tkaryawan");
?>
<h2>Laporan Data Karyawan</h2>
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
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Nomor Telepon</th>
                <th>Jabatan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php                     
                $nomor = 1;
                while($komlomData = mysqli_fetch_array($myQry)){
            ?>
            <tr>
                <td><?=$nomor++?></td>
                <td><?=$komlomData['nik']?></td>
                <td><?=$komlomData['nama']?></td>
                <td><?=$komlomData['tempat_lahir']?></td>
                <td><?=IndonesiaTgl($komlomData['tanggal_lahir'])?></td>
                <td><?=$komlomData['no_telepon']?></td>
                <td><?=$komlomData['jabatan']?></td>
                <td><?=$komlomData['status']?></td>                    
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
