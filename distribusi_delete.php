<?php 
    include('header.php');
    if($_GET){
        $id = $_GET['id'];
        if(empty($id)){
        ?>
            <b>Data yang dihapus tidak ada</b>
        <?php
        }else{
            $mySql = "DELETE FROM karyawan_gudang WHERE id = '$id'";
            $myQry = mysqli_query($koneksi, $mySql) or die ("Error hapus data ".mysqli_error($koneksi));
            if($myQry){
            ?>
                <div class="alert alert-success alert-dismissable">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus
                </div>
                <meta http-equip='refresh' content='1;url=distribusi_data.php'>
            <?php
            }else{
            ?>
                <div class="alert alert-danger alert-dismissable">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus
                </div>
                <meta http-equip='refresh' content='1;url=distribusi_data.php'>
            <?php
            }
        }
    }
    

?>