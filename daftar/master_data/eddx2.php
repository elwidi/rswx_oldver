<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$NamaRujukan = $_GET["NamaRujukan"];
$Spc = $_GET["Spc"];
$IdBagian = $_GET["IdBagian"];
$Telp = $_GET["Telp"];
$Hp = $_GET["Hp"];
$Alamat = $_GET["Alamat"];
$Npwp = $_GET["Npwp"];
$mas = $_GET["mas"];
if($NamaRujukan==''){
echo "HARAP ISIKAN NAMA DOKTER";
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$TglJam=date("d.m.Y-H:i:s");
	$sim = mysql_query("UPDATE  `rujukan` SET `NamaRujukan` = '$NamaRujukan',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Alamat` = '$Alamat',
`Hp` = '$Hp',
`Telp` = '$Telp' WHERE  `id` ='$id'");
	if($sim){
	header("Location:./3zsx.php");
	}else{
	echo "SIMPAN DATA GAGAL";
	}
 }
?>