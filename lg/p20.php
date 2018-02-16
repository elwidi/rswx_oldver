<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' AND Stat>=1");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
//
$k9kj_dfd = mysql_query("SELECT * FROM oder_2detil WHERE id='$IdDetil'"); 
$yb = mysql_fetch_array($k9kj_dfd);
if(!$yb[id]){
header("Location:../keluar2.php");
}else{
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
<form action="776s.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="421" colspan="3" valign="top">
<span class="style1">DETAIL DATA PERMINTAAN UNIT</span><br />
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<TR>
<TD width="131">NO TXN</TD>
<td width="8">:</td>
<td width="256"><div align="left">
MT-<? echo $id; ?>
</div></td>
</TR>
<tr>
<td>BARANG</td><td>:</td><td><div align="left"><? echo $yb[NamaBarang]; ?></div></td>
</tr>
<tr>
<td>SATUAN</td><td>:</td><td><div align="left"><? echo $yb[NamaSatuan]; ?></div></td>
</tr>
<tr>
  <td>DIMINTA</td>
  <td>:</td>
  <td><div align="left"><? echo $yb[Qty]; ?></div></td>
</tr>
<tr>
  <td>DIKELUARKAN</td>
  <td>:</td>
  <td><div align="left">
  <input type="text" name="QtyBeri" maxlength="12" size="12" class="style2" value="<? echo $yb[QtyBeri]; ?>">
  </div></td>
</tr>
<tr valign="top">
<td>KETERANGAN</td>
<TD>:</TD><TD><div align="left">
<textarea rows="3" cols="40" name="Keterangan" class="style2"><? echo $yb[Keterangan]; ?></textarea> 
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden"  name="IdDetil" value="<? echo $IdDetil; ?>">
</div></TD>
</tr>
<tr valign="top">
  <td>&nbsp;</td>
  <TD>&nbsp;</TD>
  <TD>&nbsp;</TD>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="dffgfg" class="style2">
  <input type="button" name="fgfgf" value="Selesai" onClick="window.close()" class="style2">
  </div></td>
  </tr>
</table></td>  
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>