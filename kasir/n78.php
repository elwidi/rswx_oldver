<?php
session_start();
include "../konek.php";
include "../ceke.php";
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
if(!$x[id]){
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
<form action="6tb.php">
<table border="1">
<tr>
<td width="398" colspan="3"><div align="left" class="style1">
DETAIL HARGA KAMAR<br>
<?
echo $x[MstKey];
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="113">NO RM</td>
<td width="3">:</td>
<td width="257"><div align="left"><? echo $x[NoPasien];  ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo $x[NamaPasien]; ?></div></td>
</tr>
<tr>
<td>RP PER KAMAR</td><td>:</td><td><div align="left">
<input name="RpPerKamar" type="text" class="style2" value="<? echo $x[RpPerKamar]; ?>" size="14"  maxlength="14">
</div></td>
</tr>
<tr class="style2" valign="top">
  <td height="25">ALASAN</td>
  <td>:</td>
  <td><div align="left">
  <textarea rows="3" cols="35" name="Alasan" class="style2"></textarea>
  <input type="hidden" name="id" value="<? echo $id; ?>">
  </div></td>
</tr>
<tr>
  <td height="21" colspan="3" bgcolor="#FF9999"><div align="left">
  <input type="submit" value="Simpan" name="s"  class="style2">
  <input type="button" name="dfdfd" value="Rubah Harga transfer" onClick="location.href='x2ww.php?id=<? echo $id; ?>';" class="style2">
  <input type="button" name="fgfg" value="Selesai" onClick="window.close()" class="style2">
  </div></td>
</tr>
<tr valign="top">
  <td height="21" colspan="3"><div align="center">
  <iframe src="5tt.php?id=<? echo $id; ?>" width="500" height="130" frameborder="0"></iframe>
  </div></td>
  </tr>
</table>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? } ?>