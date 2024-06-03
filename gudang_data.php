<?php
	include('header.php');
?>
<div class="col-sm-9">
	<h2>Data Gudang</h2>
	<hr>
	<div class="form-group">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <a href="gudang_add.php">Tambah Data Gudang</a>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table=hovered">
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
    </div>
</div>

<?php
	include('footer.php');
?>
