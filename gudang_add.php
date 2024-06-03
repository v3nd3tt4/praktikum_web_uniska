<?php
	include('header.php');
    $now = strtotime(date('Y-m-d'));
    $maxYear = date('Y-m-d', strtotime('- 16 year', $now));
    $minYear = date('Y-m-d', strtotime('- 50 year', $now));

    if(isset($_POST['add'])){
        $nama_gudang = $_POST['nama_gudang'];
        $lokasi_gudang = $_POST['lokasi_gudang'];
        $luas_gudang = $_POST['luas_gudang'];        

        
        $insert = mysqli_query($koneksi, "INSERT INTO gudang (`nama_gudang`, `lokasi_gudang`, `luas_gudang`) VALUES ('$nama_gudang', '$lokasi_gudang', '$luas_gudang')") or die (mysqli_error($koneksi));
        if($insert){
        ?>
            <div class="alert alert-success alert-dismissable">
                <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data Gudang berhasil disimpan
            </div>
        <?php
        }else{
        ?>
            <div class="alert alert-danger alert-dismissable">
            <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Ups, Data Gudang gagal disimpan
        </div>
        <?php
        }
    }
?>
<div class="col-sm-9">
	<h2>Data Karyawan &raquo; Tambah Data</h2>
	<hr>
	<form action="" class="form-horizontal" method="POST">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Nama Gudang</label>
            <div class="col-sm-5">
                <input type="text" name="nama_gudang" class="form-control" placeholder="Nama Gudang" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Lokasi Gudang</label>
            <div class="col-sm-4">
                <input type="text" name="lokasi_gudang" class="form-control" placeholder="Lokasi Gudang" required>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Luas Gudang</label>
            <div class="col-sm-4">
                <input type="number" name="luas_gudang" class="form-control" placeholder="Luas Gudang" required>
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
