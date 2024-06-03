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
</div>

<?php
	include('footer.php');
?>
