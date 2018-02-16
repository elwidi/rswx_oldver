<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NamaDokter = $_GET["NamaDokter"];
$Spc = $_GET["Spc"];
$IdBagian = $_GET["IdBagian"];
$Telp = $_GET["Telp"];
$Hp = $_GET["Hp"];
$Alamat = $_GET["Alamat"];
$Npwp = $_GET["Npwp"];
$mas = $_GET["mas"];
if($NamaRujukan==''){
echo "HARAP ISIKAN NAMA RUJUKAN";
}elseif($a[Level]==12){
$TglJam=date("d.m.Y-H:i:s");
	$sim = mysql_query("INSERT INTO 
	`rujukan_lab` (`id`, `NamaRujukan`, `Opr`, `TglJam`, `Alamat`, `Hp`, `Telp`) VALUES 
	(NULL, '$NamaRujukan', '$a[Nama]', '$TglJam', '$Alamat', '$Hp', '$Telp')");
	if($sim){
	header("Location:./jujur_adalah_jalan_indah.php");
	}else{
	echo "SIMPAN DATA GAGAL";
	}
 }
?>