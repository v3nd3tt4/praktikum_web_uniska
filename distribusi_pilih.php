<?php
	include('header.php');
?>
<div class="col-sm-9">
	<h2>Cetak Distribusi Gudang &raquo; Pilih Gudang</h2>
	<hr>
	<form action="distribusi_cetak.php" class="form-horizontal" method="POST">        
        <div class="form-group">
            <label for="" class="col-sm-3 control-label">Pilih Gudang</label>
            <div class="col-sm-4">
                <select name="id" id="" class="form-control">
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
                <button type="submit" class="btn btn-sm btn-primary" name="save" value="Simpan">Proses</button>
                <button type="reset" class="btn btn-sm btn-warning" name="reset" value="Reset">Reset</button>
                <button class="btn btn-sm btn-danger" onclick="history.back()">Kembali</button>
            </div>
        </div>
    </form>
</div>

<?php
	include('footer.php');
?>
