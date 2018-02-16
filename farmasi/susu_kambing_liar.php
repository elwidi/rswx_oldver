<?
session_start();
include "../konek.php";
include "../ceke.php";
$kjkfdjfd_Dfdfd998989 = mysql_query("SELECT * FROM apoteker WHERE id=1");
	$ga = mysql_fetch_array($kjkfdjfd_Dfdfd998989);
	
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<form action="dddd.php">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="458" height="43" colspan="3"><div align="left" class="style1">
MENENTUKAN APOTEKER
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" class="style2" cellpadding="1" cellspacing="1">
<tr valign="top">
<td width="88">Apoteker</td>
<td width="8">:</td>
<td width="332"><div align="left">
<textarea rows="3" cols="30" name="Satu"><? echo $ga[Satu]; ?></textarea>
</div></td>
</tr>
<tr valign="top">
<td>Sippa</td><td>:</td><td><div align="left">
<textarea rows="3" cols="30" name="Dua"><? echo $ga[Dua]; ?></textarea>
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<tr valign="top">
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <input type="submit" value="Update" name="fgfgf" >
  <input type="button" name="fgfgf" value="Setting Pers" onClick="location.href='c23_s.php?id=<? echo $id; ?>&dimas=<? echo $dimas; ?>';">
  <input type="button" name="fgfgf2" value="Setting Pejabat" onClick="location.href='fito_masuk_alhalimiah_smp.php?id=<? echo $id; ?>&dimas=<? echo $dimas; ?>';">
  <input type="button" name="fgfg" value="Selesai" onClick="window.close()">
  </div></td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</form>
</body>
</html>