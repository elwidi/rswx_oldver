<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
 $id = $_GET["id"];
$JenisKelamin = $_GET["JenisKelamin"];
$GolDarah = $_GET["GolDarah"];
 $NoPasien = $_GET["NoPasien"];
$NamaPasien = $_GET["NamaPasien"];
$TempatLhr = $_GET["TempatLhr"];
$tgllhr = $_GET["tgllhr"];
$Alamat = $_GET["Alamat"];
$Pendidikan = $_GET["Pendidikan"];
$id = $_GET["id"];
$KodePer = $_GET["KodePer"];
$JenisPj = $_GET["JenisPj"];
$NoKartu = $_GET["NoKartu"];
$Pekerjaan = $_GET["Pekerjaan"];
$TglMasukOk = $_GET["TglMasukOk"];
$AlamatOrtu = $_GET["AlamatOrtu"];
$KodeAgama = $_GET["KodeAgama"];
$Telp = $_GET["Telp"];
$Agama = $_GET["Agama"];
$Tgl = $_GET["Tgl"];
$Bln = $_GET["Bln"];
$Thn = $_GET["Thn"];
$Bls = $_GET["Bls"];
$Tgs = $_GET["Tgs"];
$Ths = $_GET["Ths"];


$NamaOrtu = $_GET["NamaOrtu"];
$StatusNikah = $_GET["StatusNikah"];
  
 ///=================================================================
  $Tgs=$Tgs-0;
 if($Tgs<10){
 $Tgs = "0".$Tgs;
 }else{
 $Tgs=$Tgs;
 }
 //-
 $Bls=$Bls-0;
 if($Bls<10){
 $Bls = "0".$Bls;
 }else{
 $Bls=$Bls;
 }
  $TglMasukOk = "$Tgs-$Bls-$Ths";
					  	  $TglJam = date("d-m-Y.H:i:s");	
						  $Tgl=$Tgl-0;
						  if($Tgl<10){
						  $Tgl="0".$Tgl;
						  }else{
						  $Tgl=$Tgl;
						  }
						  $Bln = $Bln -0;
						  if($Bln<9){
						  $Bln="0".$Bln;
						  }else{
						  $Bln=$Bln;
						  }
						  $tgllhr="$Tgl-$Bln-$Thn";
 $TglJam = date("Y-m-d.H:i:s");
 //
 $kdidkdik_Fgfg = mysql_query("UPDATE rwtjalan SET NamaPasien='$NamaPasien' WHERE NoPasien='$NoPasien'");
 //
$simpan = mysql_query("UPDATE `datapasien` SET `NoPasien`='$NoPasien',
 `NamaPasien`='$NamaPasien', `TempatLhr`='$TempatLhr', `tgllhr`='$tgllhr', `Alamat`='$Alamat', `Telp`='$Telp', 
 `JenisKelamin`='$JenisKelamin', `GolDarah`='$GolDarah', `StatusNikah`='$StatusNikah', `KodeAgama`='$Agama', 
 `Pendidikan`='$Pendidikan', `NamaOrtu`='$NamaOrtu', `AlamatOrtu`='$AlamatOrtu', 
 `Opr`='$a[Nama]', `TglJam`='$TglJam', `Pekerjaan`='$Pekerjaan', `TglMasuk`='$TglMasukOk'
 , `JenisPj`='$JenisPj' , `NoKartu`='$NoKartu',
   `KodePer`='$KodePer' ,
   `AlamatPj`='$AlamatPj' ,
   `NamaPj2`='$NamaPj2'  ,
   `NoKtp`='$NoKtp' 
   WHERE (`id`='$id')");
   header("Location:./index.php?bas=8&kadal=4&id=$id");
}else{
header("Location:../keluar.php");
}
?>
