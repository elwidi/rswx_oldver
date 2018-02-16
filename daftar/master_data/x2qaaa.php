<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
//
 //
$TglJam=date("d.m.Y.H:i:s");
$kjdkjd_dsdd = mysql_query("SELECT * FROM kota WHERE id='$id'");
$na = mysql_fetch_array($kjdkjd_dsdd);
$upda  = mysql_query("UPDATE `datapasien` SET `Kota` = '$na[Kota]',
`Kecamatan` = '$na[Kecamatan]',
`Kelurahan` = '$na[Kelurahan]',
`Rw` = '$na[Rw]',
`Rt` = '$na[Rt]',
`KodePost` = '$na[KodePos]' WHERE `datapasien`.`id` ='$IdPasien'");
 header("Location:./kucing_lawan_tikus.php?NamaPasien=$NamaPasien&IdPasien=$IdPasien&ada=$ada");
?>