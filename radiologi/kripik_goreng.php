<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$IdDokter = $_GET["IdDokter"];
 $PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
if(!$x[id]){
header("Location:./diono.php");
}
  ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 12px;
	font-weight: bold;
	color: #FFFFFF;
}
.style4 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
-->
</style>
</head>
<body>
<div align="center">
<form action="kopen_kebun_karet.php"> 
<table width="362" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
<tr bgcolor="#FFFF99">
<td height="54" colspan="3" bgcolor="#333333"><div align="center" class="style1">MENU CETAK STRUK PASIEN<br>
<? echo strtoupper($x[NamaPasien]); echo "($x[NoPasien])"; ?></div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="120"><div align="left"><span class="style4">NOMER STRUK</span></div></td>
<td width="3"><div align="center"><span class="style4">:</span></div></td>
<td width="219"><div align="left" class="style4">MM-
    <input name="NoStruk" type="text" class="style4" size="20" maxlength="20">
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<tr>
<td height="80" colspan="3">&nbsp;</td>
</tr>
<tr bgcolor="#FFFF99">
<td colspan="3" bgcolor="#333333"><div align="center">
  <input name="sdd" type="submit" class="style4" value="Submit">
 
<input name="fgfg" type="button" class="style4" onClick="window.close()" value="Kembali">
 </div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
 