<?php
	include('header.php');
?>
<div class="col-sm-9">
	<h2>Pilih Karyawan yang akan didistribusikan</h2>
	<hr>
	<div class="form-group">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <a href="karyawan_add.php">Tambah Data Karyawan</a>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table table-striped table=hovered">
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
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody>                
                <?php 
                    $mySql = "SELECT * FROM tkaryawan";
                    $myQry = mysqli_query($koneksi, $mySql) or die (" Query salah: ".mysqli_error($koneksi));
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
                    <td>
                        <a href="distribusi_add.php?nik=<?=$komlomData['nik']?>" title="Tambah Data" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-forward" aria-hidden="true"></span>
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
