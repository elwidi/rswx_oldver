<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
if(!$x[id]){
header("Location:../../keluar2.php");
}else{
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
<form action="e98.php">
<table border="1">
<tr>
<td height="31" colspan="3"><div align="left" class="style1">
HALAMAN TAMBAH materai
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="107">NO RM</td>
<td width="3">:</td>
<td width="193"><div align="left"><? echo "$x[NoPasien]"; ?></div></td>
<input type="hidden" name="id" value="<? echo $id; ?>">
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left">
<?
echo strtoupper($x[NamaPasien]);
?>
</div></td>
</tr>
<tr>
<td>TGL MASUK</td><td>:</td><td><div align="left"><? echo "$x[TglMasuk]-$x[BlnMasuk]-$x[ThnMasuk]"; ?></div></td>
</tr>
<tr>
<td>JAM MASUK</td><td>:</td><td><div align="left"><? echo $x[JamMasuk]; ?></div></td>
</tr>
</table>

</div>
</td>
</tr>
<Tr>
<td colspan="3" valign="top">
<div align="left">
<table  border="0" cellpadding="2" cellspacing="2" class="style2">
<tr valign="top">
<td width="102">KETERANGAN</td>
<td width="3">:</td>
<td width="208"><div align="left">
<textarea name="Keterangan" cols="30" rows="3" class="style2"></textarea>
</div></td>
</tr>
<Tr>
<td colspan="3">&nbsp;</td>
</Tr>
<tr>
<td colspan="3"><div align="left">
<input name="fggf" type="submit" class="style2" value="Simpan" /> 
<input name="fgf" type="button" class="style2" onClick="window.close()" value="Selesai" />
</div></td>
</tr>
</table>
</div> 
</td>
</Tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>