<?php
	include('header.php');

    $now = strtotime(date('Y-m-d'));
    $maxYear = date('Y-m-d', strtotime('- 16 year', $now));
    $minYear = date('Y-m-d', strtotime('- 50 year', $now));

    $nik = $_GET['nik'];
    $sql = mysqli_query($koneksi, "SELECT * FROM tkaryawan where nik = '$nik'");
    if(mysqli_num_rows($sql) == 0){
    ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> NIK tidak ada..!
        </div>
    <?php
    }else{
        $row = mysqli_fetch_assoc($sql);
    }

    //proses simpan data
    if(isset($_POST['save'])){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $no_telepon = $_POST['no_telepon'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];

        $update = mysqli_query($koneksi, "UPDATE tkaryawan SET `nama` = '$nama', `tempat_lahir` = '$tempat_lahir', `tanggal_lahir` = '$tanggal_lahir', `alamat` = '$alamat', `no_telepon` = '$no_telepon', `jabatan` = '$jabatan', `status` = '$status' where `nik` = '$nik'") or die (mysqli_error($koneksi));

        if($update){
        ?>
            <div class="alert alert-success alert-dismissable">
                <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data Karyawan berhasil disimpan
            </div>
        <?php
        }else{
        ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.
            </div>
        <?php
        }
    }
?>
<div class="col-sm-9">
	<h2>Data Karyawan &raquo; Edit Data</h2>
	<hr>
	<form action="" class="form-horizontal" method="POST">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">NIK</label>
            <div class="col-sm-2">
                <input type="text" name="nik" class="form-control" value="<?=$row['nik']?>" maxlength="10" placeholder="NIK" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Nama</label>
            <div class="col-sm-4">
                <input type="text" name="nama" class="form-control" value="<?=$row['nama']?>" placeholder="Nama" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Tempat Lahir</label>
            <div class="col-sm-4">
                <input type="text" name="tempat_lahir" class="form-control" value="<?=$row['tempat_lahir']?>" placeholder="Tempat Lahir" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Tanggal Lahir</label>
            <div class="col-sm-4">
                <input type="date" name="tanggal_lahir" min="<?=$minYear?>" max="<?=$maxYear?>" class="form-control input-group" placeholder="NIK" value="<?=$row['tanggal_lahir']?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Alamat</label>
            <div class="col-sm-3">
                <textarea name="alamat" class="form-control input-group" placeholder="Alamat" required><?=$row['alamat']?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Nomor Telepon</label>
            <div class="col-sm-3">
                <input type="text" name="no_telepon" class="form-control input-group" maxlength="12" value="<?=$row['no_telepon']?>" placeholder="Nomor Telepon" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Jabatan</label>
            <div class="col-sm-2">
                <select name="jabatan" id="" class="form-control" rquired>
                    <option value=""> ---- </option>
                    <option value="Operator" <?=$row['jabatan']=='Operator' ? 'selected':''?>>Operator</option>
                    <option value="Leader" <?=$row['jabatan']=='Leader' ? 'selected':''?>>Leader</option>
                    <option value="Supervisor" <?=$row['jabatan']=='Supervisor' ? 'selected':''?>>Supervisor</option>
                    <option value="Manager" <?=$row['jabatan']=='Manager' ? 'selected':''?>>Manager</option>
                </select>
            </div>
            <div class="col-sm-3">
                <b>Jabatan Sekarang :</b> 
                <span class="label label-success"><?=$row['jabatan']?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Satus</label>
            <div class="col-sm-2">
                <select name="status" id="" class="form-control" rquired>
                    <option value=""> ---- </option>
                    <option value="Outsourcing" <?=$row['status']=='Outsourcing' ? 'selected':''?>>Outsourcing</option>
                    <option value="Kontrak" <?=$row['status']=='Outsourcing' ? 'selected':''?>>Kontrak</option>
                    <option value="Tetap" <?=$row['status']=='Outsourcing' ? 'selected':''?>>Tetap</option>
                </select>
            </div>
            <div class="col-sm-3">
                <b>Status Sekarang :</b> 
                <span class="label label-info"><?=$row['status']?></span>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">&nbsp;</label>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-sm btn-primary" name="save" value="Simpan">Simpan</button>
                <button type="reset" class="btn btn-sm btn-warning" name="reset" value="Reset">Reset</button>
                <button class="btn btn-sm btn-danger" onclick="history.back()">Kembali</button>
            </div>
        </div>
    </form>
</div>

<?php
	include('footer.php');
?>
