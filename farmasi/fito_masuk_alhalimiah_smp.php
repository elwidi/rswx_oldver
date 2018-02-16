<?
session_start();
include "../konek.php";
include "../ceke.php";
$kjkfdjfd_Dfdfd998989 = mysql_query("SELECT * FROM pejabat_nya WHERE id=1");
$ga = mysql_fetch_array($kjkfdjfd_Dfdfd998989);
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<form action="jdjdj_ddf.php">
<table  border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="467" height="38" colspan="3"><div align="left" class="style1">
SETTING PEJABAT BERWENANG 
</div></td>
</tr>
<TR>
<td colspan="3" valign="top">
<input type="hidden" name="id" value="<? echo $id; ?>">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
 <tr>
<td width="66">Nama 1</td>
<td width="8">:</td>
<td width="267"><div align="left">
	<input name="NamaSatu" type="text" class="style1" value="<? echo $ga[NamaSatu]; ?>"  size="34" maxlength="100" />
</div></td>
</tr>
<tr>
<td>Jabat 1</td><td>:</td><td><div align="left">
	<input name="JabatSatu" type="text" class="style1" value="<? echo $ga[JabatSatu]; ?>"  size="34" maxlength="100" />
</div></td>
</tr>
<tr>
<td>Nama 2</td><td>:</td><td><div align="left">
	<input name="NamaDua" type="text" class="style1" value="<? echo $ga[NamaDua]; ?>"  size="34" maxlength="100" />
</div></td>
</tr>
<tr>
<td>Jabat 2</td><td>:</td><td><div align="left">
	<input name="JabatDua" type="text" class="style1" value="<? echo $ga[JabatDua]; ?>"  size="34" maxlength="100" />
</div></td>
</tr>
<tr>
<td>Nama 3 </td><td>:</td><td><div align="left">
	<input name="NamaTiga" type="text" class="style1" value="<? echo $ga[NamaTiga]; ?>"  size="34" maxlength="100" />
</div></td>
</tr>
<tr>
<td>Jabat 3 </td><td>:</td><td><div align="left">
	<input name="JabatTiga" type="text" class="style1" value="<? echo $ga[JabatTiga]; ?>"  size="34" maxlength="100" />
</div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Update" name="fgfg">
  <input type="button" name="fgfgf" value="Selesai" onClick="window.close()">
  </div></td>
  </tr>
</table>
</div>
</td>
</TR>
</table>
</form>
</html>
