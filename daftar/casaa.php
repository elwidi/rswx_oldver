<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjdkjd_dsdd = mysql_query("SELECT * FROM kota WHERE id='$IdKota'");
$na = mysql_fetch_array($kjdkjd_dsdd);
$upda  = mysql_query("UPDATE `datapasien` SET `Kota` = '$na[Kota]',
`Kecamatan` = '$na[Kecamatan]',
`Kelurahan` = '$na[Kelurahan]',
`Rw` = '$na[Rw]',
`Rt` = '$na[Rt]',
`KodePost` = '$na[KodePos]' WHERE `datapasien`.`id` ='$id'");
header("Location:./index.php?ada=baik&bas=8&kadal=4&id=$id");
?>