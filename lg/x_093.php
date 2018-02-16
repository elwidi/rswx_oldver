<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$is87_08 = mysql_query("SELECT * FROM  stok_opm2 WHERE id='$id'");
$bp = mysql_fetch_array($is87_08);
if(!$bp[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style3 {
	font-size: 16;
	color: #990000;
}
-->
</style>
</head>
<body>
<div align="center">
<table width="359" border="00" cellpadding="2" cellspacing="2">
<tr valign="top">
<td height="59" colspan="3"><div align="center" class="style1">
YAKIN DATA INI AKAN DIHAPUS?<br>
<span class="style3">
<?
echo $bp[NamaBarang];
?>
<br>
<?
echo "$bp[Qty] $bp[NamaSatuan]";
?> 
.</span></div></td>
</tr>
<tr>
<td colspan="3"><div align="center">
<input type="button" name="FFG" value="YA" onClick="location.href='s3ss_0.php?id=<? echo $id; ?>';" />
|| <input  type="button" name="fgfgf" value="Tutup" onClick="window.close()"  />
</div></td>
</tr>
</table>
</div>
</body>
</html>
 <?
}
 ?>