<?php
session_start();
include "../konek.php";
include "../ceke.php";
include "../hari.php";
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
$pj = strlen($Alasan);
if($pj<=4){
echo "MOHON ISIKAN ALASAN MINIMAL 5 KARAKTER";
}elseif(!$x[id]){
header("Location:../keluar2.php");
}else{
$jdudjduj = mysql_query("SELECT * FROM transfer WHERE id='$Detil'");
$ii = mysql_fetch_array($jdudjduj);
$Tgl=date("d-m-Y"); $Jam=date("H:i:s");
$sm = mysql_query("INSERT INTO `DataUpdate`
(`id`, `IdUpdate`, `NamaTabel`, `NamaHari`, `Tgl`, `Jam`, `Opr`, `Alasan`, `Info`) VALUES 
(NULL, 't.$id', 'transfer', '$hari', '$Tgl', '$Jam', '$a[Nama]', '$Alasan', 'perubahan nilai transfer kamar dari $ii[RpPerKamar] Ke 
$RpPerKamar')");
if($sm){
$usp = mysql_query("UPDATE transfer SET RpPerKamar='$RpPerKamar' WHERE id='$Detil'");
}
header("Location:./x2ww.php?id=$id");
}
?>