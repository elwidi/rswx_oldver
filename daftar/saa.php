<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kkjkddfdfdd  = mysql_query("SELECT id,NamaProp FROM prop WHERE NamaProp='$Pro'");
$bvx = mysql_fetch_array($kkjkddfdfdd);
$TglJam=date("d.m.Y-H:i:s");
$kjdkkdjkdk = mysql_query("UPDATE  `kota` SET `Propinsi` = '$bvx[NamaProp]',
`Kota` = '$NamaKot',
`Kecamatan` = '$NamaKec',
`Kelurahan` = '$NamaKel',
`KodePos` = '$KodePos',
`Rw` = '$Rw',
`Rt` = '$Rt',
`Jalan` = '$Jalan',
`Opr` = '$a[User]',
`TglJam` = '$TglJam' WHERE  `id` ='$Detil'");
header("Location:../keluar2.php");
?>