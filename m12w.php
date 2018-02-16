<?php 
session_start();
include "konek.php";
include "ceke.php";
$id = $_GET["id"];
$Harga =$_GET["Harga"];
$IdBiaya  = $_GET["IdBiaya"];
$anak  = $_GET["anak"];
$NamaBiaya = $_GET["NamaBiaya"];
$ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
//
$jujhuh = mysql_query("SELECT * FROM  tarif WHERE id='$IdBiaya'");
$bk = mysql_fetch_array($jujhuh);
$Harga = $bk[Total];
if(!$ii[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$JamTran=date("H:i:s");
$TglJam=date("d.m.Y-H:i:s");
if($a[Level]==112){
$simp = mysql_query("INSERT INTO  `txnjalan` (`id`, `RegId`, `NoPasien`, `NamaPasien`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`, 
	`JamTran`, `KodeDokter`, `NamaDokter`, `KodeBagian`, `Bagian`, `KodeKelompok`, `KodeBiaya`, `NamaBiaya`, `Qty`, `Harga`, `JumlahHarga`, `Film`, `Developer`, `Insentif`, `JasaPerawat`, `JasaDrOperator`, `JasaDokter`, `JasaRujuk`, `JasaRs`, `TglJam`, `Opr`) 
	VALUES (NULL, '$ii[RegId]', '$ii[NoPasien]',
	 '$ii[NamaPasien]','$ii[TglMasuk]', 
	 '$ii[BlnMasuk]', '$ii[ThnMasuk]', '$JamTran',
	 '$ii[KodeDokter]', '$ii[NamaDokter]', '$ii[KodeBagian]','$ii[Bagian]',
	  'Fis', '$IdBiaya', '$bk[NamaBiaya]','1', '$bk[Tiga]', '$bk[Tiga]', '$bk[Film]', '$bk[Developer]', '$bk[Insentif]', 
	  '$bk[JasaPerawat]', '$bk[JasaDrOperator]', '$bk[JasaDokter]', '$bk[JasaRujuk]', '$bk[JasaRs]', '$TglJam', '$a[Nama]')");
}else{
$simp = mysql_query("INSERT INTO  `txnjalan` (`id`, `RegId`, `NoPasien`, `NamaPasien`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`, 
	`JamTran`, `KodeDokter`, `NamaDokter`, `KodeBagian`, `Bagian`, `KodeKelompok`, `KodeBiaya`, `NamaBiaya`, `Qty`, `Harga`, `JumlahHarga`, `Film`, `Developer`, `Insentif`, `JasaPerawat`, `JasaDrOperator`, `JasaDokter`, `JasaRujuk`, `JasaRs`, `TglJam`, `Opr`) 
	VALUES (NULL, '$ii[RegId]', '$ii[NoPasien]',
	 '$ii[NamaPasien]','$ii[TglMasuk]', 
	 '$ii[BlnMasuk]', '$ii[ThnMasuk]', '$JamTran',
	 '$ii[KodeDokter]', '$ii[NamaDokter]', '$ii[KodeBagian]','$ii[Bagian]',
	  'Rad', '$IdBiaya', '$bk[NamaBiaya]','1', '$bk[Tiga]', '$bk[Tiga]', '$bk[Insentif]', '$bk[JsDrUmum]', '$bk[JsDrSpc]', 
	  '$bk[JsPerawat]', '$bk[JsRs]', '$bk[JasaDokter]', '$bk[JsSubSpc]', '$bk[JasaRs]', '$TglJam', '$a[Nama]')");
   }
   if($a[Level]==112){
   header("Location:./fisio/4e.php?id=$id"); 
   }else{
   header("Location:./Radiologi/4e.php?id=$id");
}}
?>