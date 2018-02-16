<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$Bln = $_GET["Bln"];
$ksjdksjdks  = mysql_query("SELECT * FROM dokter WHERE id='$id'");
$n = mysql_fetch_array($ksjdksjdks);
if(!$n[id]){
header("Location:../../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="586" colspan="3"><div align="left" class="style2">
PASIEN YANG DITANGANI OLEH<br />
<?
echo $n[NamaDokter];
?>
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<table border="1" class="style1">
<tr>
<td width="18" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="39" bgcolor="#D4D0C8"><strong>NO RM</strong></td>
<td width="173" bgcolor="#D4D0C8"><strong>NAMA PASIEN</strong></td>
<td width="110" bgcolor="#D4D0C8"><strong>KELAS</strong></td>
<td width="92" bgcolor="#D4D0C8"><strong>TGL MASUK</strong></td>
<td width="96" bgcolor="#D4D0C8"><strong>JAM MASUK</strong></td>
</tr>
<?
$nomer =1;
$msnmsndmsnm = mysql_query("SELECT * FROM keluarmasukpasien WHERE Dokter='$id' AND BlnMasuk='$Bln'");
while($bb = mysql_fetch_array($msnmsndmsnm)){
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $bb[NoPasien]; ?></div></td>
<td><div align="left"><? echo strtoupper($bb[NamaPasien]); ?></div></td>
<td><div align="left"><? 
$splo = explode("-",$bb[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
echo strtoupper($j[NamaRuangan]);
?></div></td>
<td><div align="left"><? echo "$bb[TglMasuk]-$bb[BlnMasuk]-$bb[ThnMasuk]";  ?></div></td>
<td><div align="left"><? echo $bb[JamMasuk]; ?></div></td>
</tr>
<?
$nomer++; } ?>
</table>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>
