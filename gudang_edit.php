<?php
	include('header.php');

    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM gudang where id = '$id'");
    if(mysqli_num_rows($sql) == 0){
    ?>
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> ID Gudang tidak ada..!
        </div>
    <?php
    }else{
        $row = mysqli_fetch_assoc($sql);
    }

    //proses simpan data
    if(isset($_POST['save'])){
        $nama_gudang = $_POST['nama_gudang'];
        $lokasi_gudang = $_POST['lokasi_gudang'];
        $luas_gudang = $_POST['luas_gudang'];
        
        $update = mysqli_query($koneksi, "UPDATE gudang SET `nama_gudang` = '$nama_gudang', `lokasi_gudang` = '$lokasi_gudang', `luas_gudang` = '$luas_gudang' where `id` = '$id'") or die (mysqli_error($koneksi));

        if($update){
        ?>
            <div class="alert alert-success alert-dismissable">
                <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data Gudang berhasil disimpan
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
	<h2>Data Gudang &raquo; Edit Data</h2>
	<hr>
	<form action="" class="form-horizontal" method="POST">
    <div class="form-group">
            <label for="" class="col-sm-3 control-label">Nama Gudang</label>
            <div class="col-sm-5">
                <input type="text" name="nama_gudang" value="<?=$row['nama_gudang']?>" class="form-control" placeholder="Nama Gudang" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Lokasi Gudang</label>
            <div class="col-sm-4">
                <input type="text" name="lokasi_gudang" class="form-control" value="<?=$row['lokasi_gudang']?>" placeholder="Lokasi Gudang" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Luas Gudang</label>
            <div class="col-sm-4">
                <input type="number" name="luas_gudang" class="form-control" value="<?=$row['luas_gudang']?>" placeholder="Luas Gudang" required>
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
