<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $NamaBiaya = $_GET["NamaBiaya"];
$id = $_GET["id"];
$IdBiaya = $_GET["IdBiaya"];
$KodeDokter=$_GET["KodeDokter"];
$jam = date("H:i:s");
$KodeDokter = $_GET["KodeDokter"];
 
$DtPsn = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$a2 = mysql_fetch_array($DtPsn);
$namaB = mysql_query("SELECT * FROM departemen WHERE KodeDept='$a2[KodeBagian]'");
$w = mysql_fetch_array($namaB);
   $Biaya = mysql_query("SELECT * FROM tabelbiayax WHERE id='$IdBiaya'");
   $z = mysql_fetch_array($Biaya);
$ksksk = mysql_query("SELECT NamaDokter,KodeDokter FROM datadokter WHERE KodeDokter='$KodeDokter'");
$re = mysql_fetch_array($ksksk);
 $paket= "$re[KodeDokter]-$z[KodeKelompok]"; 
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
  $Qty=1;
$Total=$z[Harga]*$Qty;
$TglJam=date("d.m.Y-H:i:s");
   $Biayaz = mysql_query("SELECT * FROM tabelbiayax WHERE  Kelompok3='$IdPaket'");
   while($dd = mysql_fetch_array($Biayaz)){
    $simpan = mysql_query("INSERT INTO  `txnjalan2` (`id`, `RegId`, `NoPasien`, `NamaPasien`, `IdDokter`, `NamaDokter`, `IdPoli`, `NamaPoli`, `IdBiaya`, `NamaBiaya`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`, `Qty`, `Harga`, `Total`,`JasaDokter`,`JasaRujukan`, `Insentif`, `JasaDrSpc`, `JasaPerawat`, `Listrik`, `JasaRs`, `TglJam`, `Opr`) 
  VALUES (NULL, '$a2[RegId]', '$a2[NoPasien]', '$a2[NamaPasien]',
   '$a2[KodeDokter]', '$a2[NamaDokter]', '$a2[KodeBagian]', '$a2[Bagian]', '$dd[id]', '$dd[NamaBiaya]', '$a2[TglMasuk]',
    '$a2[BlnMasuk]', '$a2[ThnMasuk]', '$Qty', '$dd[Tiga]','$dd[Tiga]', '$dd[JasaDokter]','$dd[JasaRujukan]','$dd[Reagen]', '$dd[Alkes]', '$dd[Kontrol]', '$dd[Listrik]', '$dd[JasaRs]',
	 '$TglJam', '$a[Nama]')");
	 
	 }
 //}
   header("Location:../keluar2.php");
}else{
header("Location:../keluar2.php");
}
?> 
 
