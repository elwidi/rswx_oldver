<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdufdkf = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$ya = mysql_fetch_array($kdufdkf);
//
$kdidkdik = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$ya[RegId]'");
$up = mysql_fetch_array($kdidkdik);
  if(!$ya[id]){
 header("Location:../keluar2.php");
 }elseif($FiLaDim[Duabelas]=='on' && $a[Level]==9){
// $TglJam=date("dmy:His");
if($hari=='ayah'){
 $juj = mysql_query("DELETE FROM kwita_gab WHERE IdKwitansi='$id'");
}else{
 	$sim = mysql_query("INSERT INTO  `kwita_gab`
	 (`id`, `IdKwitansi`, `RegId`, `NoPasien`, `NamaPasien`, `Nilai`, `Opr`, `TglJam`, `Stat`, `IdOpr`, 
	 `IdBagian`, `NamaBagian`, `IdDokter`, `NamaDokter`) VALUES 
	 (NULL, '$id', '$ya[RegId]', '$ya[NoPasien]', '$ya[NamaPasien]', '$ya[Asli]', '$a[Nama]', '$TglJam', '0','$a[id]',
	 '$up[KodeBagian]','$up[Bagian]','$up[KodeDokter]','$up[NamaDokter]')");
	}
	 header("Location:./x01_2.php");
 }?>