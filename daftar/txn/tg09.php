<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
include "../../hari.php";

$id  = $_GET["id"];
$mas = $_GET["mas"];
$IdDetil=$_GET["IdDetil"];
$KodeICD = $_GET["KodeICD"];
$NamaICD = $_GET["NamaICD"];
$jhsjdskdad  = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
$dkfjdkfd = mysql_query("SELECT * FROM dokter WHERE id='$Dokter'");
$ya = mysql_fetch_array($dkfjdkfd);
////
$Info="PERUBAHAN RINAP DARI DOKTER : $uu[KetDokter] KE $ya[NamaDokter]";
  if(!$uu[id] || !$ya[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$Tgl=date("d-m-Y"); $Jam =date("H:i:s");
	$sim = mysql_query("INSERT INTO 
	`DataUpdate` (`id`, `IdUpdate`, `NamaTabel`, `NamaHari`, `Tgl`, `Jam`, `Opr`, `Alasan`, `Info`) VALUES 
	(NULL, '$id', 'keluarmasukpasien', '$hari', '$Tgl', '$Jam', '$a[Nama]', '$Alasan', '$Info')");
	if($sim){
	$up = mysql_query("UPDATE keluarmasukpasien SET Dokter='$Dokter',KetDokter='$ya[NamaDokter]'
	WHERE id='$id'");
	header("Location:./7nn.php?id=$id");
	}
	
}
?>