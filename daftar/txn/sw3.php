<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$IdDokter = $_GET["IdDokter"];
$Keterangan  =$_GET["Keterangan"];
$Tgl = date("d-m-Y");
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
//
$kdjj = mysql_query("SELECT * FROM dokter WHERE id='$IdDokter'");
$ya = mysql_fetch_array($kdjj);
if(!$x[id]){
header("Location:../../keluar2.php");
}else{
	$makn = mysql_query("INSERT INTO  
	`tambahdokter` (`id`, `IdPasien`, `IdDokter`, `NamaDokter`, `Tgl`, `Keterangan`, `Opr`) 
	VALUES (NULL, '$id', '$IdDokter', '$ya[NamaDokter]', '$Tgl', '$Keterangan', '$a[Nama]')");
	header("Location:./8u.php?id=$id");
}
?>