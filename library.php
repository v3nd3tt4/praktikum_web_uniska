<?php 

    function IndonesiaTgl($tanggal){
        $tgl = substr($tanggal, 8, 2);
        $bln = substr($tanggal, 5, 2);
        $thn = substr($tanggal, 0, 4);
        $tanggal = "$tgl-$bln-$thn";
        return $tanggal;
    }

    function FormatAngka($angka){
        $hasil = number_format($angka, 0, ",", ".");
        return $hasil;
    }

?>