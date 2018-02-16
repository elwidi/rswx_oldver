<?php
session_start();
include "../konek.php";
include "../salaman.php";
$Detil  = $_GET["Detil"];
$id = $_GET["id"];
$Tunai = $_GET["Tunai"];
$Db = $_GET["Db"];
$Kk = $_GET["Kk"];
$tgl = $_GET["tgl"];
$bln = $_GET["bln"];
$thn = $_GET["thn"];
$we = $_GET["we"];

$Keterangan = $_GET["Keterangan"];
$kiks_sd = mysql_query("SELECT * FROM keluarmasukpasien  WHERE id='$id'");
$ii = mysql_fetch_array($kiks_sd);
//
$kdikdik = mysql_query("SELECT * FROM penerimaandp WHERE id='$Detil'");
$sp= mysql_fetch_array($kdikdik);
//
if(!$ii[id] || !$sp[id]){
header("Location:../keluar2.php");
}else{
	$jks_87 = mysql_query("UPDATE  `penerimaandp` SET `tgl` = '$tgl',
`bln` = '$bln',
`thn` = '$thn',
`Tunai` = '$Tunai',
`Kk` = '$Kk',
`Db` = '$Db',
`Jam` = '$Jam',
`Keterangan` = '$Keterangan',
`Opr` = '$a[Nama]',
 `JenisDp` = '$we' WHERE  `id` ='$Detil'");
 if($jks_87){
 header("Location:../keluar2.php");
 }
}
?>