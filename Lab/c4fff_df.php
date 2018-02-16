<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfkdjkfd_Fgfl  = mysql_query("SELECT * FROM konco WHERE id='$id'");
$ha = mysql_fetch_array($dfkdjkfd_Fgfl);
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
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="564" colspan="3"><div align="left" class="style1">
LIST DATA AKTIFITAS USER<br>
UNIT LABORATORIUM
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table class="style2" border="1">
<tr>
<td bgcolor="#CCFFFF"><strong>NO</strong></td>
<td bgcolor="#CCFFFF"><strong>TGL</strong></td>
<td bgcolor="#CCFFFF"><strong>NO RM</strong></td>
<td bgcolor="#CCFFFF"><strong>NAMA PASIEN</strong></td>
<td bgcolor="#CCFFFF"><strong>PEMERIKSAAN</strong></td>
<td bgcolor="#CCFFFF"><strong>USER</strong></td>
<td bgcolor="#CCFFFF"><strong>TGL INPUT </strong></td>
<td bgcolor="#CCFFFF"><strong>JAM INPUT</strong></td>
</tr>
<?
$nomer=1;
$kddfkdjfkd  = mysql_query("SELECT * FROM txnjalan2 WHERE Opr='$ha[Nama]' order by id desc");
while($xx = mysql_fetch_array($kddfkdjfkd)){
$pc = explode("-",$xx[TglJam]);
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="center"><? echo "$xx[TglMasuk]-$xx[BlnMasuk]-$xx[ThnMasuk]"; ?></div></td>
<td><div align="center"><? echo $xx[NoPasien]; ?></div></td>
<td><div align="left"><? echo $xx[NamaPasien]; ?></div></td>
<td><div align="left"><? echo $xx[NamaBiaya]; ?></div></td>
<td><div align="left"><? echo $xx[Opr]; ?></div></td>
<td><div align="center"><? echo $pc[0]; ?></div></td>
<td><div align="center"><? echo $pc[1]; ?></div></td>
</tr>
 
<?
$nomer++; } ?><tr>
  <td colspan="8" bgcolor="#CCFFFF">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>