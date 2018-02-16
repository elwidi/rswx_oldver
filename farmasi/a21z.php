<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-11' WHERE id='$a[id]'");
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left">
<form action="7ys.php">
<table border="1">
<tr>
<td height="23" colspan="3"><div align="left" class="style4">
LAPORAN TRANSAKSI PENGELURAN OBAT
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style4">
<tr>
<td width="89">PERIODE</td>
<td width="3">:</td>
<td width="238"><div align="left"><span class="style15 style2 style8  style3">
  <select name="Bln" class="style1" id="Bln">
    <option value="<? echo date("m")-0; ?>"><? echo date("m")-0; ?></option>
    <option value="1">Januari</option>
    <option value="2">Februari</option>
    <option value="3">Maret</option>
    <option value="4">April</option>
    <option value="5">Mei</option>
    <option value="6">Juni</option>
    <option value="7">Juli</option>
    <option value="8">Agustus</option>
    <option value="9">September</option>
    <option value="10">Oktober</option>
    <option value="11">November</option>
    <option value="12">Desember</option>
  </select>
/
<select name="Thn" class="style1" id="Thn">
  <?
$awa=2013;
while($awa<2021){
?>
  <option value="<? echo $awa; ?>"><? echo $awa; ?></option>
  <?
$awa++; }
?>
</select>
</span>

</div></td>
</tr>
<tr>
  <td height="32">&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3">
  <div align="left">
  <input name="fgfgf" type="submit" class="style4" value="Sort">
  <input name="ffggf" type="button" class="style4" onClick="window.close()" value="Selesai">
  </div>
  </td>
  </tr>
</table>
</div>
</td> 
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>