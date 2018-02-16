<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
  $Bus = mysql_query("SELECT * FROM labumum WHERE id=$hari");
$x = mysql_fetch_array($Bus);
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
<div align="center">
<form action="m_000.php">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td height="34" colspan="3"><div align="center">
GANTI NAMA <?
if($anak=='ela'){
$Nama=$x[NamaDokter];
?>DOKTER<? }else{ ?>RUJUKAN<?
$Nama=$x[NamaPerujuk]; } ?>
</div></td>
</tr>
<tr>
<td width="92">NAMA ASLI</td>
<td width="3">:</td>
<td width="191"><div align="left"><?
 echo $Nama; ?></div></td>
</tr>
<tr valign="top">
<td>DI GANTI</td><td>:</td><td><div align="left">
  <input name="NamaDokter_1" type="text" value="" size="20">
</div></td>
<input type="hidden" name="fito" value="<? echo $fito; ?>">
<input type="hidden" name="xe" value="<? echo $xe; ?>">
<input type="hidden" name="hari" value="<? echo $hari; ?>">
<input type="hidden" name="anak" value="<? echo $anak; ?>">
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3"><div align="center">
<input type="submit" value="Ganti" name="fgf">
<input type="button" name="fggf" value="Selesai" onClick="window.close()">
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}else{}?>