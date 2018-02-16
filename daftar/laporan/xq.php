<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
include "../../hari.php";
$id = $_GET["id"];
$FJGKFJKFJKDF = mysql_query("SELECT * FROM kelas WHERE id='$id'");
$uu = mysql_fetch_array($FJGKFJKFJKDF);
if(!$uu[id]){
header("Location:../../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
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
<td width="344" colspan="3"><div align="left" class="style1">
LIST DETAIL DATA <br /><? echo strtoupper($uu[NamaKelas]);  ?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style2">
<tr>
<td width="17" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="239" bgcolor="#D4D0C8"><strong>NO RUANGAN</strong></td>
<td width="66" bgcolor="#D4D0C8"><div align="center"><strong>BED</strong></div></td>
</tr>
<?
$nomer=1;
$uj = mysql_query("SELECT * FROM ruangan WHERE KodeKelas='$uu[KodeKelas]' ORDER BY NoBed");
while($b= mysql_fetch_array($uj)){
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><?
echo strtoupper($b[NamaRuangan]);  
?></div></td><td><div align="center"><? echo $b[NoBed]; ?></div></td>
</tr>
<?
$nomer++; } ?><tr>
  <td colspan="3" bgcolor="#D4D0C8">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>