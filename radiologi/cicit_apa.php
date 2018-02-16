<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$IdPasien  = $_GET["IdPasien"];
$NamaBiaya = $_GET["NamaBiaya"];
$IdStruk = $_GET["IdStruk"];
$Paket = $_GET["Paket"];
$sandal = $_GET["sandal"];

if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==16){
  if($sandal=='jepit' && $Paket==''){
 header("Location:./sandal_jepik.php?IdPasien=$IdPasien&NamaBiaya=$NamaBiaya&IdStruk=$IdStruk");
  }else{
 header("Location:./nikah_muda_aduh.php?Pakte=$Paket&IdPasien=$IdPasien&NamaBiaya=$NamaBiaya&IdStruk=$IdStruk");
  }
}else{
header("Location:./keluar.php");
}
?>