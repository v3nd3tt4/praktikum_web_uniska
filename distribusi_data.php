<?php
	include('header.php');
?>
<div class="col-sm-9">
	<h2>Distribusi Karyawan</h2>
	<hr>
	<div class="form-group">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <a href="distribusi_karyawan.php">Tambah Data</a>
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
                    <th>Jumlah Karyawan</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody>                
                <?php 
                    $mySql = "SELECT  karyawan_gudang.*, gudang.*, count(karyawan_gudang.nik) AS jumlah_karyawan FROM karyawan_gudang 
                    LEFT JOIN gudang ON gudang.id = karyawan_gudang.id_gudang
                    LEFT JOIN tkaryawan ON tkaryawan.nik = karyawan_gudang.nik
                    GROUP BY gudang.id
                    ORDER BY jumlah_karyawan DESC";
                    $myQry = mysqli_query($koneksi, $mySql) or die (" Query salah: ".mysqli_error($koneksi));
                    $nomor = 1;
                    while($komlomData = mysqli_fetch_array($myQry)){
                ?>
                <tr>
                    <td><?=$nomor++?></td>
                    <td><?=$komlomData['nama_gudang']?></td>
                    <td><?=$komlomData['lokasi_gudang']?></td>
                    <td><?=$komlomData['luas_gudang']?> m2</td>
                    <td><?=$komlomData['jumlah_karyawan']?> </td>
                    <td>
                        <a href="distribusi_detail.php?id=<?=$komlomData['id_gudang']?>" title="Detail Data" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
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
