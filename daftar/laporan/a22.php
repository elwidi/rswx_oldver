<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
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
<tr valign="top">
<td colspan="3"><div align="left" class="style1">
LAPORAN DATA KUNJUNGAN RUANG / KELAS<br />
PERIODE : <? echo date("d"); 
$bln=date("m"); $thn1=date("Y");
include "../../bulan.php"; ?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" cellpadding="0" cellspacing="1" class="style2">
<tr>
<td bgcolor="#FFCCFF"><strong>NO</strong></td>
<td bgcolor="#FFCCFF"><strong>RUANG<br />
  KELAS</strong></td>
<?
$bul= 1;
while($bul<=12){
?><td bgcolor="#FFCCFF"><strong>
  <? 
$bln=$bul;$thn1='';
include "../../bulan2.php"; 
?>
</strong></td>
<? $bul++; } ?>
<td><div align="center">TOTAL</div></td>
</tr>
<?
$nomer=1;
$jsk_dfd = mysql_query("SELECT * FROM kelas ORDER BY NamaKelas");
while($xx = mysql_fetch_array($jsk_dfd)){
?>
<tr>
<td><div align="center"><?
echo $nomer;
?></div></td>
<td><div align="left"><? echo $xx[NamaKelas]; ?></div></td>
<?
$bul='';
$bul= 1;
while($bul<=12){
?><td><div align="center"><?
  
$jdudj_DFdfd = mysql_query("SELECT COUNT(id) AS hh FROM keluarmasukpasien WHERE Kelas='$xx[NamaKelas]' AND BlnMasuk='$bul'");
$yah = mysql_fetch_array($jdudj_DFdfd);
if($yah[hh]>0){
echo $yah[hh];
$ta  = $ta + $yah[hh];
}else{
echo "-"; 
}
?></div></td><? $bul++; } ?>
<td><div align="center"><? if($ta>0){
echo $ta;
}else{
echo ".";
} 
$ta=0; ?></div></td>
</tr>
<?
$nomer++; } ?>
<tr>
<td colspan="2"><div align="center">total</div></td>
<?
$bul='';
$bul= 1;
while($bul<=12){?><td><?
$jdudj_DFdfd22 = mysql_query("SELECT COUNT(id) AS hh FROM keluarmasukpasien WHERE     BlnMasuk='$bul'");
$yah22 = mysql_fetch_array($jdudj_DFdfd22);
if($yah22[hh]>0){
echo $yah22[hh];
$ta22  = $ta22+ $yah22[hh];
}else{
echo "-"; 
}
?></td>
<? $bul++; } ?><td><div align="center"><? echo  number_format($ta22); ?></div></td>
</tr>
</tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>