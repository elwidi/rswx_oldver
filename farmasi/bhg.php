<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
  $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
if(!$ii[id]){
echo "DATA TIDAK DIKENAL";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 17px;
}
.style3 {
	color: #000000;
	font-weight: bold;
}
.style4 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div align="center">
<form action="gfgh.php">
<table border="1" class="style2">
<tr>
<td width="527" colspan="3" bgcolor="#006633"><div align="center" class="style3 style4">
SETTING SATUAN <br />
<?
echo "REC : #$id";
?>
</div></td>
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="139">KODE OBAT</td>
<td width="4"><strong>:</strong></td>
<td width="369"><div align="left"><? echo $ii[KodeObat]; ?>
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<tr>
<td>NAMA OBAT</td><td><strong>:</strong></td>
<td><div align="left"><? echo strtoupper($ii[NamaObat]); ?></div></td>
</tr>
<tr>
<td>SATUAN</td><td>:</td><td><div align="left">
<select name="IdSatuan" class="style1">
<?
 $NamaSat = mysql_query("SELECT NamaSatuan,Pengali FROM satuan WHERE id='35'");
 $bx = mysql_fetch_array($NamaSat);

?><option value="35">TABLET</option>
<?
$kes = mysql_query("SELECT id FROM satuan");
while($ss = mysql_fetch_array($kes)){
?>
<option value="<? echo $ss[id]; ?>"><?
$NamaSat = mysql_query("SELECT NamaSatuan FROM satuan WHERE id='$ss[id]' AND id!=35");
$bx = mysql_fetch_array($NamaSat);
echo strtoupper($bx[NamaSatuan]); // echo "($ss[id])";
 ?></option>
<? } ?>
</select>
</div></td>
</tr>
<tr>
<td>PENGALI</td><td>:</td><td><div align="left">
<input name="Pengali" type="text" class="style1" size="20" maxlength="20" value="1">
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input name="ffgfg" type="submit" class="style1" value="Simpan">
<input name="dfdf" type="button" class="style1" onClick="window.close()" value="Tutup">
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left"><iframe src="yuy.php?id=<? echo $id; ?>" width="500" height="200"></iframe></div></td> 
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
