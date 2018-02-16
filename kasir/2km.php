<?
session_start();
include "../konek.php";
include "../ceke.php";
 $kkdkkd = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'"); 
$ii = mysql_fetch_array($kkdkkd);
//
$ldjfdfldldf = mysql_query("SELECT * FROM txninap3 WHERE id='$Detil'");
$up = mysql_fetch_array($ldjfdfldldf);
if(!$ii[id] || !$up[id]){
header("Location:../keluar2.php");
}else{
$kdjfkdjkd  = mysql_query("SELECT * FROM diskontarifrinap WHERE IdTxn='$Detil'");
$pb = mysql_fetch_array($kdjfkdjkd);
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
<body bgcolor="#FFFF99">
<div align="left">
<form action="y665.php">
<table border="1">
<tr>
<td width="396" colspan="3"><div align="left" class="style1">
HALAMAN BERIKAN DISKON
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2"  class="style2">
<tr>
<td width="109">NAMA BIAYA</td>
<td width="3">:</td>
<td width="262"><div align="left"><? echo $up[NamaBiaya]; ?></div></td>
</tr>
<tr>
<td>HARGA</td><td>:</td><td><div align="left">
<input type="text" name="Harga" value="<? echo ($up[Total]);?>" maxlength="12" size="12" class="style1"></div></td>
</tr>
<tr>
<td>DISKON</td><td>:</td>
<td>
  <div align="left">
    <input name="Diskon" type="text" class="style2" value="<? echo $pb[Diskon]; ?>" size="12" maxlength="12" />
	<input type="hidden" name="id" value="<? echo $id; ?>">
	<input type="hidden" name="Detil" value="<? echo $Detil; ?>">
</div></td></tr>
<tr valign="top">
  <td>KETERANGAN</td>
  <td>:</td>
  <td><div align="left">
  <textarea name="Keterangan" cols="40" rows="2" class="style2">ATAS INSTRUKSI DOKTER <? echo $up[NamaDokter]; ?></textarea>
  </div></td>
</tr>
<tr valign="top">
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="ff">
  <input type="button" name="fgfgf" value="Selesai" onClick="window.close()">
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