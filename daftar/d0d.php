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
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="891" colspan="3"><div align="left" class="style1">
LIST DATA PASIEN KEMBAR
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="18" bgcolor="#FFCCCC"><strong>NO</strong></td>
<td width="38" bgcolor="#FFCCCC"><strong>NO RM</strong></td>
<td width="239" bgcolor="#FFCCCC"><strong>NAMA PASIEN</strong></td>
<td width="554" bgcolor="#FFCCCC"><strong>ALAMAT</strong></td>
</tr>
<?
$nomer   = 1;
$kdjfkdjfd = mysql_query("SELECT NoPasien,NamaPasien,Alamat FROM datapasien ORDER BY NoPasien ");
while($bb = mysql_fetch_array($kdjfkdjfd)){
if($NoPasien==$bb[NoPasien]){
$nor = $nomer%2;
if($nor==1){
$warna='bgcolor="#CFFEEB"';
}else{
$warna='';
}
?>
<tr valign="top" <? echo $warna; ?>  >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $bb[NoPasien]; ?></div></td>
<td><div align="left"><? echo $bb[NamaPasien]; ?></div></td>
<td><div align="left"><? echo $bb[Alamat]; ?></div></td>
</tr>
<?
$nomer++;
} $NoPasien=$bb[NoPasien]; } ?>
</table>
</div>
</td>
</tr>
</table>

</div>
</body>
</html>