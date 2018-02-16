<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$kp = mysql_fetch_array($ada);
if(!$kp[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
$kdjkdjfkdf_dfdf = mysql_query("SELECT * FROM cetak_lab WHERE IdPasien='$id'");
$hp= mysql_fetch_array($kdjkdjfkdf_dfdf);
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
}
.style21 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
  }
-->
</style>
</head>
<body>
<div align="left">
<form action="bp09.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3"><div align="left" class="style1">
Menu Opsi Cetak
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2"  class="style21">
<tr>
<td width="137">Nomer Awal</td>
<td width="11">:</td>
<td width="235"><div align="left">
<input name="awal" type="text" class="style21" id="awal" size="4" maxlength="4" value="<? echo $hp[Awal]; ?>" />
<input type="hidden" name="akan" value="<? echo $akan; ?>">
<input type="hidden" name="ak" value="<? echo $ak; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td> 
</tr>
<tr>
<td>Nomer Akhir</td><td>:</td><td><div align="left">
<input name="akir" type="text" class="style21" id="akir" size="4" maxlength="4" value="<? echo $hp[Akir]; ?>" />
</div></td> 
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr> 
<tr>
<td colspan="3"><div align="left">
<input name="kdjfd" type="submit" class="style21" value="Proses"  />
<input name="fgfgf" type="button" class="style21" onClick="location.href='ccddcd.php?ak=<? echo $ak; ?>&akan=<? echo $akan; ?>&id=<? echo $id; ?>';" value="Tampilkan Nomer Hasil" /><?
if($hp[id]){
?>
<input type="button" name="fgfgf" value="Reset" onClick="location.href='c10192.php?id=<? echo $id; ?>&Detil=<? echo $Detil; ?>';" style="background:#FF9933">
<? } ?>
<input name="fgfjhfg" type="button" class="style21" onClick="window.close()" value="Selesai">
</div></td>
</tr>
</table>
</div>
</td>
</tr>

</table>
</form>
</div>
</body>
</html>
<?
}
?>