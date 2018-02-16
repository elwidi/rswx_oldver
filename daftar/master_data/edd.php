<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$NamaDokter = $_GET["NamaDokter"];
$Spc = $_GET["Spc"];
$IdBagian = $_GET["IdBagian"];
$Telp = $_GET["Telp"];
$Hp = $_GET["Hp"];
$Alamat = $_GET["Alamat"];
$Npwp = $_GET["Npwp"];
$mas = $_GET["mas"];
if($NamaDokter==''){
echo "HARAP ISIKAN NAMA DOKTER";
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$TglJam=date("d.m.Y-H:i:s");
	$sim = mysql_query("INSERT INTO `dokter` (`id`, `NamaDokter`, `KodeSpc`, `Opr`, `TglJam`, 
	`Npwp`, `IdBagian`,  `UangDuduk`, `Telp`, `Hp`, `Alamat`, `NamaSpc`, `Sik`)
	 VALUES (NULL, '$NamaDokter',  '$Spc', '$a[Nama]', '$TglJam',
	  '$Npwp', '$IdBagian', '0','$Telp', '$Hp', '$Alamat','','$Sik')");
	if($sim){
	header("Location:./bg_m.php");
	}else{
	echo "SIMPAN DATA GAGAL";
	}
 }
?>