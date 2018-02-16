<?php 
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}

.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	 }
.style3 {color: #FFFFFF}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
	color: #990000;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="ffff_f.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td height="45" colspan="3" bgcolor="#003399"><div align="left" class="style1 style3">
UPDATE NAMA DOKTER PENANGGUNG JAWAB LAB
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr valign="top" class="style2">
<td width="85" >Nama Dokter</td>
<td width="3">:</td>
<td width="347"><div align="left"><?
$kfjgkfgf_Fgfgflflfgm = mysql_query("select * from dokter_lab where id=1");
$ya_p = mysql_fetch_array($kfjgkfgf_Fgfgflflfgm);
 ?>
<textarea rows="4" class="style2" cols="40" name="NamaDokter"><? echo $ya_p[NamaDokter];	
 ?></textarea> 
 </div></td>
</tr>
<tr>
<td colspan="3"><span class="style5">Update Terakhir  : <? echo ucfirst(strtolower($ya_p[Opr])); echo " || $ya_p[TglJam]";  ?></span></td> 
</tr>
<tr>
<td colspan="3"> </td>
</tr>
<tr>
<td colspan="3" bgcolor="#003399"><div align="left">
<input type="submit" value="Update" name="fgfgf" class="style2">
<input type="button" name="fgfgff" value="Selesai" onClick="window.close()" class="style2">
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>