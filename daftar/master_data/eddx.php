<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
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
	$sim = mysql_query("UPDATE  `dokter` SET `NamaDokter` = '$NamaDokter',
`KodeSpc` = '$Spc',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Npwp` = '$Npwp',
`IdBagian` = '$IdBagian',
`UangDuduk` = '0',
`Telp` = '$Telp',
`Hp` = '$Hp',
`Alamat` = '$Alamat',
`Sik` = '$Sik' WHERE `id` ='$mas'");
	if($sim){
	header("Location:./bg_m.php");
	}else{
	echo "SIMPAN DATA GAGAL";
	}
 }
?>