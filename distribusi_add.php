<?php
	include('header.php');

    $nik = $_GET['nik'];
    $sql = mysqli_query($koneksi, "SELECT * FROM karyawan_gudang where nik = '$nik'") or die (mysqli_error($koneksi));
    if(mysqli_num_rows($sql) >= 1){
    ?>
    <div class="alert alert-danger alert-dismissable">
        <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Karyawan dengan NIK <?=$nik?> sudah pernah didistribusikan
    </div>
    <?php
    }

    $row = mysqli_fetch_assoc($sql);


    if(isset($_POST['save'])){
        $nik = $_POST['nik'];
        $id_gudang = $_POST['id_gudang'];

        $insert = mysqli_query($koneksi, "INSERT INTO karyawan_gudang (`nik`, `id_gudang`) VALUES ('$nik', '$id_gudang')") or die (mysqli_error($koneksi));
        if($insert){
        ?>
            <div class="alert alert-success alert-dismissable">
                <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil ditambahkan
            </div>
        <?php
        }else{
        ?>
            <div class="alert alert-danger alert-dismissable">
                <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal ditambahkan, silahkan coba lagi
            </div>
        <?php
        }
    }
?>
<div class="col-sm-9">
	<h2>Distribusi Gudang &raquo; Pilih Gudang</h2>
	<hr>
	<form action="" class="form-horizontal" method="POST">
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">NIK</label>
            <div class="col-sm-5">
                <input type="text" name="nik" class="form-control" placeholder="NIK" value="<?=$nik?>" required readonly>
            </div>
        </div>
        <?php
            $que = "SELECT * FROM tkaryawan where nik = '$nik'";
            $myQry = mysqli_query($koneksi, $que) or die (mysqli_error($koneksi));
            $dataKaryawan = mysqli_fetch_assoc($myQry);
        ?>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Nama Karyawan</label>
            <div class="col-sm-4">
                <input type="text" name="nama" class="form-control" placeholder="Nama Karyawan" value="<?=$dataKaryawan['nama']?>" required disable>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Pilih Gudang</label>
            <div class="col-sm-4">
                <select name="id_gudang" id="" class="form-control">
                <?php
                    $que = "SELECT * FROM gudang";
                    $myQry = mysqli_query($koneksi, $que) or die (mysqli_error($koneksi));
                    
                    while($list = mysqli_fetch_array($myQry)){
                ?>
                <option value="<?=$list['id']?>"><?=$list['nama_gudang']?></option>
                <?php
                    }
                ?>
                </select>
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
