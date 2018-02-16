<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
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
<td width="1065" colspan="3"><div align="left" class="style1">
LAPORAN POLIKLINIK PER DOKTER <br> PERIODE : <? 
$bln=$Bln;
$thn1=$Thn;
include "../../bulan.php";
?>
</div></td>
</tr>
<TR>
<td colspan="3"><div align="left">
 <input type="button" name="fgff" value="Kembali" onClick="location.href='../index.php';">
<?
if($Bln>0 && $Thn>2010){
?>
<input type="button" name="fgfgf" value="Export Ke Excel" onClick="location.href='d09m2.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>';">
<? } ?>
<input type="button" name="fgfgf" value="Cek By Periode"   onClick="wCompare = window.open('../x01_s.php?mas=bagong', 
  'wCompare', 'top=230,width=580,height=240,left=200,Top=122,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();">
</div></td>
</TR>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="468" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="20" bgcolor="#CEFDD1" ><div align="left"><strong>
NO
</strong></div></td>
<td width="150" bgcolor="#CEFDD1"><strong>NAMA DOKTER</strong></td>
<td width="152" bgcolor="#CEFDD1"><strong>POLI</strong></td>
<?
$awa = 1;
while($awa<32){
 ?>
 <td width="53" bgcolor="#CEFDD1"><div align="center"><strong><? echo $awa; ?></strong></div></td>
 <? $awa++; } ?>
 <td width="71" bgcolor="#CEFDD1"><div align="center">TOTAL</div></td>
 </tr>
 <?
 $no =1;
 $kdjfkdf = mysql_query("SELECT * FROM dokter ORDER BY NamaDokter");
 while($nn = mysql_fetch_array($kdjfkdf)){
$pc = $no%2;
if($pc==1){
$warna='bgcolor="#FEE0CB"';
}else{
$warna='';
}
 ?>
 <tR <? echo $warna; ?> >
 <td><div align="center"><? echo $no; ?></div></td>
 <td><div align="left"><? echo $nn[NamaDokter]; ?></div></td>
 <td><div align="left"><?
 $ksjksd  = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$nn[IdBagian]'");
 $yb = mysql_fetch_array($ksjksd);
 echo ucfirst(strtolower($yb[NamaBagian])); 
 ?></div></td>
<?
$awa=='';
$awa = 1;
while($awa<32){
  $kdjfkdjkfd = mysql_query("SELECT COUNT(id) AS jj FROM rwtjalan WHERE TglMasuk='$awa' AND KodeDokter='$nn[id]' AND BlnMasuk='$bln' AND ThnMasuk='$thn1'");
 $yah = mysql_fetch_array($kdjfkdjkfd);
?>
 <td <? if($yah[jj]>0){?> onClick="wCompare = window.open('q2.php?hari=3&Tgl=<? echo $awa; ?>&Bln=<? echo $bln; ?>&Thn=<? echo $thn1; ?>&id=<? echo $nn[id]; ?>', 
  'wCompare', 'width=580,height=300,left=370,Top=134, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"<? } ?> ><div align="center"><? 
  if($yah[jj]>0){
 echo $yah[jj];
 $ta = $ta + $yah[jj];
 }else{
 echo ".";
 }
 ?></div></td><? $awa++; } ?>
 <td bgcolor="#FFFF99"><div align="center"><? if($ta>0){
 echo number_format($ta);
 $ta2 = $ta2 + $ta;
 }else{
 echo ".";
 }
 $ta=0;
 ?></div> </tR>

 <?
 $no++; } ?> <tR>
   <td colspan="3" bgcolor="#CEFDD1"><div align="center">TOTAL</div></td>
  <?
  $taw=1;
  while($taw<=31){
  ?> <td bgcolor="#CEFDD1"><div align="center"><?
    $kdjfkdjkfd2 = mysql_query("SELECT COUNT(id) AS jj FROM rwtjalan WHERE TglMasuk='$taw' AND   BlnMasuk='$bln' AND ThnMasuk='$thn1'");
 $yah3 = mysql_fetch_array($kdjfkdjkfd2);
  if($yah3[jj]>0){
  echo $yah3[jj];
  }else{
  echo ".";
  }?></div></td>
   <?
   $taw++; } ?><td bgcolor="#CEFDD1"><div align="center"><?
   echo number_format($ta2); 
   ?></div></td> 
 </tR>
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