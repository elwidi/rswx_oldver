<?php 
session_start();
include "../konek.php";
include "../ceke.php";
   $Kwit = mysql_query("SELECT * FROM kwitansirj where id='$id'");
$xx = mysql_fetch_array($Kwit);
//
$kdfjkdjkd = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$xx[RegId]'");
$uj = mysql_fetch_array($kdfjkdjkd);
//
 $Pj = strlen($Alasan);
if($Pj<5){
echo "ALASAN MINIMAL 5 KARAKTER";
 }elseif($a[Level]==3){
  $TglJam=date("d.m.Y-H:i:s");
 	$isi = mysql_query("INSERT INTO  `kwitansirj_batal`
	 (`id`, `RegId`, `NoPasien`, `NamaPasien`, `Pembayar`, `NamaHari`, `TglBayar`, `BlnBayar`, `ThnBayar`, 
	`JamBayar`, `Kasir`, `NoKartu`, `TypeBayar`, `NamaType`, `Tunai`, `Kk`, `Db`, `Jam`, `Asli`, `Bulat`, `Persen`, `KodePer`, `NamaPer`, `TxnJalan`, `Farmasi`, `Laborat`, `Stat`, `crg`, `IdAsli`, `IdPasien`, `Alasan`, `Pembatal`, `TglJam`)
	 VALUES
	  (NULL,'$xx[RegId]', '$xx[NoPasien]','$xx[NamaPasien]', '$xx[Pembayar]', '$xx[NamaHari]',
	  '$xx[TglBayar]', '$xx[BlnBayar]','$xx[ThnBayar]',
	   '$xx[JamBayar]','$xx[Kasir]','$xx[NoKartu]', '$xx[TypeBayar]', '$xx[NamaType]', '$xx[Tunai]', '$xx[Kk]',
	     '$xx[Db]','$xx[Jam]', '$xx[Asli]', '$xx[Bulat]', '$xx[Persen]', '$xx[KodePer]', '$xx[NamaPer]', '$xx[TxnJalan]', '$xx[Farmasi]',
		 '$xx[Laborat]', '$xx[Stat]', '$xx[crg]', '$xx[IdAsli]', '$uj[id]', '$Alasan', '$a[Nama]','$TglJam')");
 
		 if($isi){
		 $dele = mysql_query("DELETE FROM kwitansirj WHERE id='$id'");
		 header("Location:./index.php");
		 }
		  
 } 
 ?> 