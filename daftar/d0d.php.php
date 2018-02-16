<?php 
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head></head>
<body>
<div align="left">
<table border="1">
<tr>
<td colspan="3"><div align="left">
LIST DATA PASIEN KEMBAR
</div></td></tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1">
<tr>
<td>NO</td><td>NO RM</td><td>NAMA PASIEN</td><td>DETAIL</td>
</tr>
<?
$nomer   = 1;
$kdjfkdjfd = mysql_query("SELECT NoPasien,NamaPasien,Alamat FROM datapasien ORDER BY NoPasien LIMIT 0,1000");
while($bb = mysql_fetch_array($kdjfkdjfd)){
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $bb[NoPasien]; ?></div></td>
<td><div align="left"><? echo $bb[NamaPasien]; ?></div></td>
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