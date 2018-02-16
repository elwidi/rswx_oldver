<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$Bln=date("m")-0;
header('Refresh: 3');
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="574" colspan="3"><div align="left" class="style1">
LAPORAN MINGGUAN 
JUMLAH RESEP &amp; R
<br>
<?
$bln=$Bln; $thn1=date("Y");
include "../bulan.php";
?></div></td>
</tr>
<tr class="style2">
<td colspan="3"><div align="left">
<a href="index.php" style="text-decoration:none">KEMBALI</a> || 
<a href="#" style="text-decoration:none">CEK PERIODE</a>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="369" border="1" cellpadding="0" cellspacing="1" class="style2">
<tr>
<td width="20" bgcolor="#FFCC99"><strong>NO</strong></td>
<td width="300" bgcolor="#FFCC99"><strong>KETERANGAN</strong></td>
<?
$Tgl=1;
while($Tgl<=31){
?><td width="37" bgcolor="#FFCC99"><div align="center"><strong>
  <?
if($Tgl<=10){
echo "0$Tgl";
}else{
echo "$Tgl";
}  ?>
</strong></div></td>
<? $Tgl++; } ?></tr>
<?
$nomer=1;
$kdjfldkfd = mysql_query("SELECT * FROM bagian WHERE NamaBagian !='' AND id!=25 AND id!=21 
AND id!=26  AND id!=24  AND id!=22  ORDER BY NamaBagian");
while($vv = mysql_fetch_array($kdjfldkfd)){
$pc = $nomer%2;
if($pc==1){
$warna='bgcolor="#D2FFD2"';
}else{
$warna='';
}
?>
<tr <? echo $warna; ?>>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $vv[NamaBagian]; // echo "($vv[id])"; ?></div></td>
<?
$Tg=1;
while($Tg<=31){
?><td><div align="center"><? 
  $ksisksd = mysql_query("SELECT COUNT(id) AS jj FROM rj_resep WHERE Resep='$vv[id]' AND Tg=$Tg and Bl=$Bln");
$ya = mysql_fetch_array($ksisksd);
if($ya[jj]>0){
echo number_format($ya[jj]);
}else{
echo ".";
}
  ?></div></td>
<? $Tg++; } ?>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>