<?php 
    include('header.php');
    if($_GET){
        $nik = $_GET['nik'];
        if(empty($nik)){
        ?>
            <b>Data yang dihapus tidak ada</b>
        <?php
        }else{
            $mySql = "DELETE FROM tkaryawan WHERE nik = '$nik'";
            $myQry = mysqli_query($koneksi, $mySql) or die ("Error hapus data ".mysqli_error($koneksi));
            if($myQry){
            ?>
                <div class="alert alert-success alert-dismissable">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data Karyawan berhasil dihapus
                </div>
                <meta http-equip='refresh' content='1;url=karyawan_data.php'>
            <?php
            }else{
            ?>
                <div class="alert alert-danger alert-dismissable">
                    <button class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data Karyawan gagal dihapus
                </div>
                <meta http-equip='refresh' content='1;url=karyawan_data.php'>
            <?php
            }
        }
    }
    

?>