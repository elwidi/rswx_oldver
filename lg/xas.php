<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$gahaggahg = mysql_query("SELECT * FROM bagian where id='$id'");
$ti = mysql_fetch_array($gahaggahg);
if(!$ti[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
?>
<html>
<head></head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3"><div align="left">
Batasi Stok
</div></td>
</tr>
<tr>
<td colspan="2" valign="top">
<div align="left">
<table width="321" border="1">
<tr>
<td width="96">Unit</td>
<td width="8">:</td>
<td width="125"><div align="left"><?
echo $ti[NamaBagian];
?></div></td>
</tr>
<tr>
  <td>Nama Obat </td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  </tr>
</table>
</div>
</td><td width="270" valign="top"><div align="left">
<?
if($IdObat>0){
?>
<table  border="1">
<tr>
<td width="25">No</td>
<td width="211">Nama Obat</td>
</tr>
<?
$nos=1;
$namnamn = mysql_query("SELECT * FROM dataobat WHERE NamaObat LIKE '%$NamaObat%' LIMIT 0,100");
while($ta = mysql_fetch_array($namnamn)){
?>
<tr valign="top">
<td><div align="center"><? echo nos; ?></div></td>
<td><div align="left"><? echo $ta[NamaObat]; ?></div></td>
</tr>
<?
$nos++; } ?>
</table>
<?
}
?>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>