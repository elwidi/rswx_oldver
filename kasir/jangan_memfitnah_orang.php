<?php
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
  $id = $_GET [ "id" ];
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {color: #FFFFFF}
-->
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3"><div  align="center">
LIST DATA INFORMASI PENGINPUTAN ALKES
</div></td>
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style1">
<tr>
<td bgcolor="#333333"><span class="style3">NO</span></td>
<td bgcolor="#333333"><span class="style3">NO TXN</span></td>
<td bgcolor="#333333"><span class="style3">NAMA OBAT</span></td>
<td bgcolor="#333333"><span class="style3">QTY</span></td>
<td bgcolor="#333333"><span class="style3">HARGA</span></td>
<td bgcolor="#333333"><span class="style3">BAYAR</span></td>
<td bgcolor="#333333"><span class="style3">TGL INPUT</span></td>
<td bgcolor="#333333"><span class="style3">JAM</span></td>
<td bgcolor="#333333"><span class="style3">SHIFT</span></td>
<td bgcolor="#333333"><span class="style3">OPR</span></td>
<td bgcolor="#333333"><span class="style3">BAG</span></td>
</tr>
<?
$NO=1;
$kikikik  = mysql_query("SELECT * FROM jualobat2 WHERE RegId='$x[MstKey]' ORDER BY id,IdDepo");
while($tt = mysql_fetch_array($kikikik)){
$yu = explode("-",$tt[IdDepo]);
 $kisi = mysql_query("SELECT NamaBagian FROM pemakai WHERE id='$yu[1]'");
$ud = mysql_fetch_array($kisi);
if($ud[NamaBagian]=='OK'){
?>
<tr bgcolor="#CCCCCC">
<? 
}elseif($ud[NamaBagian]=='PUD'){
?>
<tr bgcolor="#FFFF66">
<? 
}elseif($ud[NamaBagian]=='VK'){
?>
<tr bgcolor="#FFCCFF">
<? 
}elseif($yu[0]==4){
?>
<tr bgcolor="#CCFFFF">
<? }else{ ?><tr><?  } ?>
<td><div align="center"><? echo $NO; ?></div></td>
<td><div align="left"><? echo $tt[JamTran]; ?></div></td>
<td><div align="left"><? echo strtoupper($tt[NamaObat]); ?></div></td>
<td><div align="center"><? echo number_format($tt[Qty],2); ?></div></td>
<td><div align="right"><? echo number_format($tt[HargaBeli]); ?></div></td>
<td><div align="right"><? echo number_format($tt[JmlHargaBeli]); ?></div></td>
<td><div align="left"><? echo "$tt[tgl]-$tt[bln]-$tt[thn]"; ?></div></td>
<td><div align="left"><? echo $tt[Jam]; ?></div></td>
<td><? $hs = explode(":",$tt[Jam]);
$dre = $hs[0]-0;
if($hs[0]>=8 && $hs[0]<14){
?><font color="#009933"><? echo "Pagi"; ?></font><? 
}elseif($hs[0]>=0 && $dre<=7){
echo "Malam";
}elseif($hs[0]>=14 && $hs[0]<=21){
?><font color="#990000"><? echo "Siang"; ?></font><?
}elseif($hs[0]>=22 && $hs[0]<=23){
echo "Malam";
}else{
echo "?-$dre";
}
 ?></td>
<td><div align="left"><? echo strtoupper($tt[Operator]); ?></div></td>
<td><div align="left"><?
 echo strtoupper($ud[NamaBagian]);
?></div></td>
</tr>
<? $NO++; } ?><tr>
  <td colspan="11" bgcolor="#333333">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</body>
</html>