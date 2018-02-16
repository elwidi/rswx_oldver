<?php
session_start();
include "../konek.php";
include "../ceke.php";
include "../hari.php";
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
if(!$x[id]){
header("Location:../keluar2.php");
}else{
$Tgl=date("d-m-Y");
$Jam=date("H:i:s");
	$usd = mysql_query("INSERT INTO  `DataUpdate` 
(`id`, `IdUpdate`, `NamaTabel`, `NamaHari`, `Tgl`, `Jam`, `Opr`, `Alasan`, `Info`) VALUES 
(NULL, 'x.$id', 'keluarmasukpasien', '$hari', '$Tgl', '$Jam', '$a[Nama]', '$Alasan', 'Perubahan Harga Kamar dari $x[RpPerKamar] Menjadi $RpPerKamar')");
if($usd){
$kdkjkdf = mysql_query("UPDATE keluarmasukpasien SET RpPerKamar='$RpPerKamar' WHERE id='$id'");
}
header("Location:../keluar2.php");
}
?>