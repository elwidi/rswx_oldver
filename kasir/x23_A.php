<?php 
session_start();
include "../konek.php";
include "../ceke.php";
  $kjfgfgf_Fgfgfg0009 = mysql_query("SELECT * FROM akti_perawat WHERE id='$id'");
 $yam = mysql_fetch_array($kjfgfgf_Fgfgfg0009);
if(!$yam[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif($a[Level]==9){
 //akti_perawat
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFFFFF;
}
-->
</style>
</head>
<body bgcolor="#990000">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="720" colspan="3"><div align="left">
<span class="style1">YAKIN DATA INI AKAN DI HAPUS</span><br>
<input type="button" name="fgfg" value="Ya" onClick="location.href='f_12083.php?id=<? echo $id; ?>';" >|| 
<input type="button" name="fgfgf" value="Tidak" onClick="window.close()">
</div></td>
</tr>
</table>
</body>
</html>
<? } ?>