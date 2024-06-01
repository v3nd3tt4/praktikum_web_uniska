<?php
	include('header.php');
?>
<div class="col-sm-9">
	<h2>Data Karyawan &raquo; Tambah Data</h2>
	<hr>
	<form action="" class="form-horizontal" method="POST">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">NIK</label>
            <div class="col-sm-2">
                <input type="text" name="nik" class="form-control" maxlength="10" placeholder="NIK" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-4">
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Tempat Lahir</label>
            <div class="col-sm-4">
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Tanggal Lahir</label>
            <div class="col-sm-4">
                <input type="date" name="tanggal_lahir" class="form-control input-group" placeholder="NIK" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Alamat</label>
            <div class="col-sm-3">
                <textarea name="alamat" class="form-control input-group" placeholder="Alamat" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Nomor Telepon</label>
            <div class="col-sm-3">
                <input type="text" name="no_telepon" class="form-control input-group" maxlength="12" placeholder="Nomor Telepon" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Jabatan</label>
            <div class="col-sm-2">
                <select name="jabatan" id="" class="form-control" rquired>
                    <option value=""> ---- </option>
                    <option value="Operator">Operator</option>
                    <option value="Leader">Leader</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Manager">Manager</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Satus</label>
            <div class="col-sm-2">
                <select name="status" id="" class="form-control" rquired>
                    <option value=""> ---- </option>
                    <option value="Outsourcing">Outsourcing</option>
                    <option value="Kontrak">Kontrak</option>
                    <option value="Tetap">Tetap</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">&nbsp;</label>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-sm btn-primary" name="add" value="Simpan">Simpan</button>
                <button type="reset" class="btn btn-sm btn-warning" name="reset" value="Reset">Reset</button>
                <button class="btn btn-sm btn-danger" onclick="history.back()">Kembali</button>
            </div>
        </div>
    </form>
</div>

<?php
	include('footer.php');
?>
