<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$NamaRujukan = $_GET["NamaRujukan"];
$id  = $_GET["id"];
$Alamat  = $_GET["Alamat"];
$Telp  = $_GET["Telp"];
$Hp  = $_GET["Hp"];
$Telp  = $_GET["Telp"];
 
 if($NamaRujukan==''){
echo "HARAP ISIKAN NAMA DOKTER";
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$TglJam=date("d.m.Y-H:i:s");
	$sim = mysql_query("INSERT INTO 
	`rujukan` (`id`, `NamaRujukan`, `Opr`, `TglJam`, `Alamat`, `Hp`, `Telp`)
	 VALUES (NULL, '$NamaRujukan', '$a[Nama]', '$TglJam', '$Alamat', '$Hp', '$Telp')");
	if($sim){
	header("Location:./3zsx.php");
	}else{
	echo "SIMPAN DATA GAGAL";
	}
 }
?>