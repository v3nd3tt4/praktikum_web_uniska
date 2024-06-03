<?php
	include('header.php');

    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM gudang where id = '$id'") or die (mysqli_error($koneksi));

    $row = mysqli_fetch_assoc($sql);
    
?>
<div class="col-sm-9">
	<h2>Detail Distribusi &raquo; <?=$row['nama_gudang']?></h2>
	<hr>
    <table class="table table-stripped table-condensed">
        <tr>
            <th width="20%"> Nama Gudang</th>
            <td width="2%">:</td>
            <td><?=$row['nama_gudang']?></td>
        </tr>
        <tr>
            <th width="20%"> Lokasi Gudang</th>
            <td width="2%">:</td>
            <td><?=$row['lokasi_gudang']?></td>
        </tr>
        <tr>
            <th width="20%"> Luas Gudang</th>
            <td width="2%">:</td>
            <td><?=$row['luas_gudang']?> m<sup>2</sup></td>
        </tr>
    </table>
    <h4>Pegawai yang didistribusikan ini yaitu</h4>
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
                    $mySql = "SELECT * FROM karyawan_gudang
                    LEFT JOIN tkaryawan on tkaryawan.nik = karyawan_gudang.nik
                    WHERE karyawan_gudang.id_gudang = '$id'
                    ";
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
                        <a href="distribusi_delete.php?id=<?=$komlomData['id']?>" title="Hapus Data" class="btn btn-danger btn-sm">
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
    <a href="distribusi_data.php" title="Kembali" class="btn btn-primary btn-sm">
        <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> Kembali
    </a>
</div>

<?php
	include('footer.php');
?>
