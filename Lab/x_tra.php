<?php 
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>
</head>
 <body> 
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="816" colspan="3"><div align="left" class="style1">
DETAIL PEMERIKSAAN <?
if($angka=='satu'){
echo "Eritrosit";
}
?>
</div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="24" bgcolor="#FFFF99"><strong>NO</strong></td>
<td width="29" bgcolor="#FFFF99"><strong>TGL</strong></td>
<td width="52" bgcolor="#FFFF99"><strong>NO RM</strong></td>
<td width="160" bgcolor="#FFFF99"><strong>NAMA PASIEN</strong></td>
<td width="70" bgcolor="#FFFF99"><strong>BAGIAN</strong></td>
<td width="134" bgcolor="#FFFF99"><strong>DOKTER</strong></td>
<td width="150" bgcolor="#FFFF99"><strong>DETIL PERIKSA</strong></td>
</tr>
<?
$nomer=1;
$satu = mysql_query("SELECT rwtjalan.RegId,rwtjalan.TglMasuk,rwtjalan.BlnMasuk,
rwtjalan.ThnMasuk,rwtjalan.NoPasien,rwtjalan.NamaPasien,
rwtjalan.Bagian,rwtjalan.NamaDokter FROM cetak_hasil_lab,rwtjalan WHERE cetak_hasil_lab.NamaBiaya LIKE '%Eritrosit%'
AND rwtjalan.RegId=cetak_hasil_lab.RegId"); 
while($ii = mysql_fetch_array($satu)){
$pa = $nomer%2;
if($pa==1){
$warna='bgcolor="#DDFFDF"';
}else{
$warna='';
}
?>
<tr <? echo $warna; ?>  valign="top">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="right"><? echo "$ii[TglMasuk]-$ii[BlnMasuk]-$ii[ThnMasuk]"; ?></div></td>
<td><div align="center"><? echo $ii[NoPasien]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($ii[NamaPasien])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($ii[Bagian])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($ii[NamaDokter])); ?></div></td>
<td><div align="left"><?
$na=1;
$jiks_sss = mysql_query("SELECT NamaBiaya  FROM txnjalan2 WHERE RegId='$ii[RegId]'");
	while($mm = mysql_fetch_array($jiks_sss)){
echo "$na."; echo ucfirst(strtolower($mm[NamaBiaya]));	echo "<br>";
	$na++; }
?></div></td>
</tr>
<?
$nomer++; } ?></table>
</div></td>
</tr>
</table>
</div>
</body>
 </html>