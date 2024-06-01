<?php
	include('header.php');
?>
<div class="col-sm-9">
	<h2>Data Karyawan</h2>
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
                <tr>
                    <td>1.</td>
                    <td>8099001</td>
                    <td>Fathul Hafidh</td>
                    <td>Tanah Bumbu</td>
                    <td>6 Januari 1990</td>
                    <td>082153278782</td>
                    <td>Manajer</td>
                    <td>Tetap</td>
                    <td>
                        <a href="karyawan_edit.php" title="Edit Data" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                        </a>
                        <a href="karyawan_delete.php" title="Hapus Data" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php
	include('footer.php');
?>
