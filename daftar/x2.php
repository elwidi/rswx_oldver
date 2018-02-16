<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$NamaDokter  = $_GET["NamaDokter"];
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
<div align="left">
<table width="790" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="782" colspan="3"><div align="left" class="style1">
DATA TELPHONE DOKTER <br>
<form target="_self">
<table border="0" cellpadding="1" cellspacing="1" class="style2">
<tr>
<td width="149">NAMA DOKTER</td>
<td width="8">:</td>
<td width="306"><div align="left">
<input type="text" name="NamaDokter" maxlength="20" size="20" class="style2">
</div></td>
</tr>
</table>
</form>
</div></td>
</tr>
<tr>
<td colspan="3"><hr></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="3" cellspacing="3" class="style2">
<tr>
<td width="18" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="160" bgcolor="#D4D0C8"><strong>NAMA</strong></td>
<td width="290" bgcolor="#D4D0C8"><strong>ALAMAT</strong></td>
<td width="122" bgcolor="#D4D0C8"><strong>TELP </strong></td>
<td width="142" bgcolor="#D4D0C8"><strong>HP</strong></td>
</tr>
<?
$nomer =1;
$kdjfkdk = mysql_query("SELECT * FROM dokter WHERE NamaDokter like '$NamaDokter%' ORDER BY NamaDokter");
while($x = mysql_fetch_array($kdjfkdk)){ 
$mi = $nomer%2;
if($mi==1){
$warna ='bgcolor="#A6FAB0"';
 }else{
$warna ='';}
?>
<tr <? echo $warna; ?> >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo strtoupper($x[NamaDokter]); ?></div></td>
<td><div align="left"><? echo strtoupper($x[Alamat]); ?></div></td>
<td><div align="left"><? echo $x[Telp]; ?></div></td>
<td><div align="left"><? echo $x[Hp]; ?></div></td>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>