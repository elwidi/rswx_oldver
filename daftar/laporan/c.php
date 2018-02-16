<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
//header('Refresh: 2');
if($Bln>=1 && $Bln<=12 && $Thn>=2013 && $Thn<=2016){

 ?> 
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
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
<td width="1266" colspan="3">
<div align="left" class="style1">
LAPORAN PRODUKTIFITAS POLI RAWAT JALAN	<br />
<?
$bln =$Bln;
$thn1=$Thn;
include "../../bulan.php";
 ?>
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="button" name="fgff" value="Kembali" onClick="location.href='../index.php';">
<?
if($Bln>0 && $Thn>2010){
?>
<input type="button" name="fgfgf" value="Export Ke Excel" onClick="location.href='d09m.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>';">
<? } ?>
<input type="button" name="fgfgf" value="Cek By Periode"   onClick="wCompare = window.open('../x01_s.php', 
  'wCompare', 'top=230,width=580,height=240,left=200,Top=122,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="379" border="0" cellpadding="2" cellspacing="2">
<tr class="style2">
<td width="18" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="346" bgcolor="#D4D0C8"><strong>BAGIAN</strong></td> 
<?
$Tgl=1;
while($Tgl<=31){
?><td width="45" bgcolor="#D4D0C8"><div align="center"><strong>
  <?
echo $Tgl; 
   ?>
</strong></div></td>
<? $Tgl++; } ?><td width="60" bgcolor="#CFFEDF"><div align="center">TOTAL</div></td>
</tr>
<?
$nomer=1;
$ldkfldkfldkfld = mysql_query("SELECT * FROM bagian WHERE NamaBagian !='' AND id!=25 AND id!=21 AND id!=5 AND id!=19  AND id!=6 
AND id!=23 AND id!=33 AND id!=34 AND id!=20 AND id!=16  
AND id!=26  AND id!=24  AND id!=22  ORDER BY NamaBagian");
while($aa = mysql_fetch_array($ldkfldkfldkfld)){
$pc = $nomer%2;
if($pc==1){
$warna='bgcolor="#FEE0CB"';
}else{
$warna='';
}
?>
<tr  <? echo $warna; ?> class="style2">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><?
echo ucfirst(strtolower($aa[NamaBagian])); // echo " ($aa[id])";  ?></div></td>
<?
$Tgl2=1;
while($Tgl2<=31){
$jmjm = mysql_query("SELECT COUNT(id) AS jj FROM rwtjalan WHERE TglMasuk='$Tgl2' AND BlnMasuk='$Bln'   AND ThnMasuk='$Thn' AND  KodeBagian='$aa[id]'");
$xx = mysql_fetch_array($jmjm);
?><td width="45" <?
if($xx[jj]){ ?>onClick="wCompare = window.open('q2.php?Tgl=<? echo $Tgl2; ?>&ini&Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $aa[id]; ?>', 
  'wCompare', 'width=780,height=300,left=170,Top=134, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><?
if($xx[jj]){
echo number_format($xx[jj]);
$ta = $ta + $xx[jj];
}else{
echo "-";
}
?></div></td>
<? $Tgl2++; } ?><td bgcolor="#CFFEDF"><div align="center"><? 
if($ta>0){
echo number_format($ta);
$ta2  = $ta2 + $ta;
}else{
echo ".";
} 
$ta=0;
 ?></div></td>
</tr>
 <?
$nomer++; } ?>
<tr   class="style2">
  <td colspan="2" bgcolor="#ECE9D8">TOTAL</td>
 <?
 $tas =1;
 while($tas<=31){
 ?> <td bgcolor="#ECE9D8"><div align="center"><? 
 $jmjm3 = mysql_query("SELECT COUNT(id) AS jj FROM rwtjalan WHERE TglMasuk='$tas' AND BlnMasuk='$bln'");
$xx3 = mysql_fetch_array($jmjm3); 
if($xx3[jj]>0){
echo number_format($xx3[jj]);
}else{
echo ".";
} ?></div></td>
 <? $tas++; } ?>
  <td bgcolor="#CFFEDF"><div align="center"><? echo number_format($ta2); ?></div></td>
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