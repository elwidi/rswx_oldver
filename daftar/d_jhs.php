<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$Ket = $_GET["Keterangan"];
$IdDetil=$_GET["IdDetil"];
$KodeICD = $_GET["KodeICD"];
$NamaICD = $_GET["NamaICD"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
$pcd = explode(":",$uu[BlnUmur]);
$lklklsklsdk = mysql_query("SELECT * FROM rl4b WHERE id='$IdDetil'");
$u = mysql_fetch_array($lklklsklsdk);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$Jam = date("d.m.Y-H:i:s");

	 $sim = mysql_query("INSERT INTO  
	 `icd_rj2` (`id`, `Tgl`, `Bln`, `Thn`, `UmurThn`, `UmurBln`, `UmurHari`, 
	 `IdPasien`, `NoPasien`, `NamaPasien`, `Bagian`, `KodeDokter`, `NamaDokter`, 
	 `KodeIcd`, `Diagnosa`, `Ket`, `OprMr`, `Jam`, `stat`, `JenisKelamin`) 
	 VALUES ('', '$uu[TglMasuk]', '$uu[BlnMasuk]', '$uu[ThnMasuk]',
	  '$uu[Umur]','$pcd[0]', '$pcd[1]',  '$id', '$uu[NoPasien]',
	  '$uu[NamaPasien]', '$uu[Bagian]', '$uu[KodeDokter]', '$uu[NamaDokter]', '$u[id]',
	   '$u[Diagnosa]',  '$Ket', '$a[Nama]', 
	 '$Jam','0', '$uu[JenisKelamin]')");
 	header("Location:./7w.php?id=$id");
 
//header("Location:./ed_d.php");
}?>