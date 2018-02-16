<?php
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
if($x[TglKeluar]!=0){
header("Location:../daftar/jangan_nakal_ya.php?id=$id");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="550" colspan="3"><div align="center" class="style2">
LIST HISTORY PENGELUARAN OBAT<br />
<?
echo $x[MstKey];
?>
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
<td width="18" bgcolor="#CCFF99"><strong>NO</strong></td>
<td width="42" bgcolor="#CCFF99"><strong>NO TXN</strong></td>
<td width="135" bgcolor="#CCFF99"><strong>NAMA OBAT</strong></td>
<td width="63" bgcolor="#CCFF99"><div align="center"><strong>QTY</strong></div></td>
<td width="55" bgcolor="#CCFF99"><div align="right"><strong>HARGA</strong></div></td>
<td width="39" bgcolor="#CCFF99"><div align="right"><strong>TOTAL</strong></div></td>
<td width="67" bgcolor="#CCFF99"><strong>OPR</strong></td>
<td width="79" bgcolor="#CCFF99"><strong>JAM</strong></td>
</tr>
<?
$nomer=1;
$kikikiki_0p2= mysql_query("SELECT * FROM ObatLuarInap WHERE IdPasien='$id' AND Stat=1 ORDER BY JamBayar ");
while($vv= mysql_fetch_array($kikikiki_0p2)){
if($Jb!=$vv[JamBayar] && $Jb!=''){
?>
<tr>
<td colspan="5" bgcolor="#FFFF99"><div align="center"><strong>SUB TOT</strong></div></td>
<td bgcolor="#FFFF99"><div align="right"><strong>
  <?
echo number_format($trt); $trt=0;
?>
</strong></div></td>
</tr>
<? 
}
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo "$vv[JamBayar]"; ?></div></td>
<td><div align="left"><? echo strtoupper($vv[NamaObat]); ?></div></td>
<td><div align="center"><? echo number_format($vv[Qty]); ?></div></td>
<td><div align="center"><? echo number_format($vv[HargaJual]); ?></div></td>
<td><div align="center"><? echo number_format($vv[Total]); 
$trt = $trt + $vv[Total];
$trt2 = $trt2 + $vv[Total];
?></div></td>
<td><div align="left"><? echo strtoupper($vv[Opr]); ?></div></td>
<td><div align="left"><? echo  ($vv[Jam]); ?></div></td>
</tr>
<?
$Jb=$vv[JamBayar];
$nomer++; } ?>
<tr>
<td colspan="5" bgcolor="#FFFF99"><div align="center"><strong>SUB TOT</strong></div></td>
<td bgcolor="#FFFF99"><div align="right"><strong>
  <?
echo number_format($trt); $trt=0;
?>
</strong></div></td>
</tr>
<tr>
<td colspan="5" bgcolor="#CCFF99"><div align="center"><strong>GRAND TOT</strong></div></td>
<td bgcolor="#CCFF99"><div align="right"><strong>
  <?
echo number_format($trt2); 
?>
</strong></div></td>
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