<?php 
session_start();
include "../konek.php";
include "../ceke.php"; 
$ikdkfdidkf_dfdfdfd = mysql_query("SELECT * FROM polog77x WHERE id='$id'");
$ii = mysql_fetch_array($ikdkfdidkf_dfdfdfd);
////////////////////////////////
$mjm_dfd = mysql_query("SELECT *  FROM podetil77x WHERE id='$IdDetil'");
$xx = mysql_fetch_array($mjm_dfd);
////////////////////////////////////////////////
if(!$ii[id] || !$xx[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
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
.style12 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="fd_4545.php">
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="354" colspan="3"><div align="left" class="style1">
HALAMAN RETUR OBAT PEMBELIAN <br />
PO : <? echo $ii[NoPo]; ?>
</div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style12">
<tr>
<td width="106">NAMA OBAT</td>
<td width="3">:</td>
<td width="233"><div align="left"><? echo strtoupper($xx[NamaBarang]); ?></div></td>
</tr>
<tr>
<td>QTY</td><td>:</td><td><div align="left">
<? echo number_format($xx[Qty]*$xx[Pengali]); ?>
</div></td>
</tr>
<tr>
<td>SATUAN</td><td>:</td><td><div align="left"><?
echo ucfirst(strtolower($xx[NamaSatuan])); 
?></div></td>
</tr>
<tr>
<td>RETUR</td><td>:</td><td><div align="left">
<input name="Qty" type="text" class="style12" id="Qty" size="10" maxlength="10" />
</div>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>"></td>
</tr>
 <tr>
<td>KETERANGAN</td><td>:</td><td><div align="left">
<textarea name="Alasan" cols="30" rows="3" class="style12" id="Alasan"></textarea>
</div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="fgfg" class="style12">
  <input type="button" name="fgfgf" value="Selesai" onClick="window.close()" class="style12">
  </div></td>
  </tr>
</table>
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>