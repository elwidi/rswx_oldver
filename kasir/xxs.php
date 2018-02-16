<?
session_start();
include "../konek.php";
include "../ceke.php";
 $kkdkkd = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'"); 
$ii = mysql_fetch_array($kkdkkd);
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
if($Detil>0){
$kdjfkdjkf = mysql_query("SELECT Diskon FROM diskonrinap WHERE IdPasien='t.$id.$Detil'");
}else{
  $kdjfkdjkf = mysql_query("SELECT Diskon FROM diskonrinap WHERE IdPasien='$id'");
  }
  $yas = mysql_fetch_array($kdjfkdjkf);
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
<form action="d09.php">
<table border="1">
<tr>
<td width="226"><span class="style1">DISKON KAMAR <?
if($Detil>0){
?>transfer<?
}else{
?>UTAMA<? } ?></span></td>
</tr>
<tr>
<td valign="top">
<div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style2">
<tr>
<td width="61">DISKON</td>
<td width="3">:</td>
<td width="144"><div align="left">
<input name="Diskon" type="text" class="style2" size="5" maxlength="5" value="<? echo $yas[Diskon]; ?>" />
<?
if($Detil>0){
?>
<input type="hidden" name="DetilX" value="t.<? echo "$id.$Detil"; ?>">
<input type="hidden" name="Detil" value="<? echo $Detil; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
<?
}else{ ?>
<input type="hidden" name="id" value="<? echo $id; ?>">
<? } ?>
%
</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input name="fgf" type="submit" class="style2" value="Simpan" />
<input name="fgfgf" type="button" class="style2" onclick="window.close()" value="Selesai">
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