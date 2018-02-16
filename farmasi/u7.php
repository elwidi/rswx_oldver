<?
session_start();
include "../konek.php";
include "../salaman.php";
$msjsmjsm = mysql_query("SELECT * FROM satuan WHERE id='$id'");
$ii = mysql_fetch_array($msjsmjsm);
if($a[Level]==4 || $a[Level]==91 || $a[Level]==11){

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
<?
if($ii[id]){
?>
<form action="f_ffff.php">
<?
}else{
?>
<form action="7yyy.php">
<? } ?>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="142"><span class="style1">NAMA SATUAN </span></td>
<td width="3">:</td>
<td width="225"><div align="left">
<input name="NamaSatuan" type="text" class="style1" size="20" maxlength="120" value="<? echo $ii[NamaSatuan]; ?>" />
<input type="hidden" name="id" value="<? echo $ii[id]; ?>">
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input name="dfd" type="submit" class="style1" value="Simpan" />
<input name="fg" type="button" class="style1" onClick="window.close()" value="Selesai" />
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>