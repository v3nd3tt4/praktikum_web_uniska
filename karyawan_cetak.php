<?php
	include('header.php');
?>
<h2>Laporan Data Karyawan</h2>
<hr/>
<div class="table-responsive">
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
            <tr>
                <td>1</td>
                <td>8099001</td>
                <td>Fathul Hafidh</td>
                <td>Tanah Bumbu</td>
                <td>6 Januari 1990</td>
                <td>082153278782</td>
                <td>Manajer</td>
                <td>Tetap</td>
            </tr>
        </tbody>
    </table>
</div>
<img src="img/btn_print.png" width="25" alt="" onclick="window.print()">
<?php
	include('footer.php');

?>
