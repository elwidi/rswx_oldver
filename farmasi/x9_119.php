<?
session_start();
include "../konek.php";
include "../salaman.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
if($kk[Stak]==2){
header("Location:./mana_d.php?id=$id");
}elseif(!$kk[id]){
header("Location:./index.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){
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
<form action="b50.php">
<table border="0" cellpadding="2" cellspacing="2">
<tR>
<TD colspan="3"><div align="left" class="style1">
UPDATE NOMER PO
</div></TD>
</tR>
<tr class="style2">
<td width="80">NO PO</td>
<td width="3">:</td>
<td width="225"><div align="left">
<input type="text" class="style2" name="NoPo" maxlength="70" size="20" value="<? echo $kk[NoPo]; ?>" />
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Update" name="fgfgf" class="style1">
  <input type="button" name="djhjffd" value="Selesai" onClick="window.close()" class="style1">
  </div></td>
  </tr>
</table>
</form></div>
</body>
</html>
<?
}
?>