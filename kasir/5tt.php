<?php
session_start();
include "../konek.php";
include "../salaman.php";
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
if(!$x[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head><style type="text/css">
<!--
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style6 {color: #FFFFFF; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2" >
<tr>
<td width="18" bgcolor="#990000"><span class="style6">NO</span></td>
<td width="66" bgcolor="#990000"><span class="style6">TGL</span></td>
<td width="57" bgcolor="#990000"><span class="style6">JAM</span></td>
<td width="124" bgcolor="#990000"><span class="style6">ALASAN</span></td>
<td width="128" bgcolor="#990000"><span class="style6">INFO</span></td>
</tr>
<?
$nomer=1;
$kdfdkjfd = mysql_query("SELECT * FROM dataupdate WHERE IdUpdate='x.$id'");
while($vv = mysql_fetch_array($kdfdkjfd)){
$pc = $nomer%2;
if($pc==1){
$warna='';
}else{
$warna=' bgcolor="#CCCCCC"';
}
?>
<tr valign="top" <? echo $warna; ?>>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="right"><? echo $vv[Tgl]; ?></div></td>
<td><div align="center"><? echo $vv[Jam]; ?></div></td>
<td><div align="left"><? echo $vv[Alasan]; ?></div></td>
<td><div align="left"><? echo $vv[Info]; ?></div></td>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</body>
</html>
<?
}
?>