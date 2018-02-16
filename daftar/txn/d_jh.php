<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$Ket = $_GET["Keterangan"];
$IdDetil=$_GET["IdDetil"];
$KodeICD = $_GET["KodeICD"];
$NamaICD = $_GET["NamaICD"];
 $jhsjdskdad  = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
$pcd = explode(":",$uu[Umur]);
$lklklsklsdk = mysql_query("SELECT * FROM icdx WHERE id='$IdDetil'");
$u = mysql_fetch_array($lklklsklsdk);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$Jam = date("d.m.Y-H:i:s");
 if($a[Level]==9){
 	 $sim = mysql_query("INSERT INTO  
	 `icd_ri2` (`id`, `Tgl`, `Bln`, `Thn`, `UmurThn`, `UmurBln`, `UmurHari`, 
	 `IdPasien`, `NoPasien`, `NamaPasien`, `Bagian`, `KodeDokter`, `NamaDokter`, 
	 `KodeIcd`, `Diagnosa`, `Ket`, `OprMr`, `Jam`, `stat`, `JenisKelamin`) 
	 VALUES (NULL, '$uu[TglMasuk]', '$uu[BlnMasuk]', '$uu[ThnMasuk]',
	  '$pcd[0]','$pcd[1]', '$pcd[2]',  '$id', '$uu[NoPasien]',
	  '$uu[NamaPasien]', '$uu[Bagian]', '$uu[Dokter]', '$uu[KetDokter]', '$u[ICD_CODE]',
	   '$u[DESCRIPTION]',  '$Ket', '$a[Nama]', 
	 '$Jam','0', '$uu[JenisKelamin]')");
 }else{
 	 $sim = mysql_query("INSERT INTO  
	 `icd_ri` (`id`, `Tgl`, `Bln`, `Thn`, `UmurThn`, `UmurBln`, `UmurHari`, 
	 `IdPasien`, `NoPasien`, `NamaPasien`, `Bagian`, `KodeDokter`, `NamaDokter`, 
	 `KodeIcd`, `Diagnosa`, `Ket`, `OprMr`, `Jam`, `stat`, `JenisKelamin`) 
	 VALUES (NULL, '$uu[TglMasuk]', '$uu[BlnMasuk]', '$uu[ThnMasuk]',
	  '$pcd[0]','$pcd[1]', '$pcd[2]',  '$id', '$uu[NoPasien]',
	  '$uu[NamaPasien]', '$uu[Bagian]', '$uu[Dokter]', '$uu[KetDokter]', '$u[ICD_CODE]',
	   '$u[DESCRIPTION]',  '$Ket', '$a[Nama]', 
	 '$Jam','0', '$uu[JenisKelamin]')");
}
	 header("Location:./f_f.php?id=$id");
}?>