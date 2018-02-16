<?
session_start();
include "../konek.php";
include "../salaman.php";
 
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
  $kk = mysql_fetch_array($KDJFKDJFKD); 
  $kdjfkdjkfdjkf = mysql_query("SELECT * FROM podetil77 WHERE id='$IdDetil'");
$ya = mysql_fetch_array($kdjfkdjkfdjkf);
if(!$ya[id]){
echo "DATA TIDAK DIKENAL";
}elseif(!$kk[id]){
header("Location:../keluar2.php");
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
<form action="mudah_2han_benar.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="295" colspan="3"><div align="left" class="style1">
KOREKSI DATA PEMBELIAN<br />
REC : <?
echo $IdDetil; 
?> 
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="95">Nama Obat</td>
  <td width="3">:</td>
  <td width="166"><div align="left"><?
  echo ucfirst(strtolower($ya[NamaBarang])); 
  ?></div></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td>:</td>
    <td><div align="left"><? 
	echo number_format($ya[Harga]);
	?></div></td>
  </tr>
  <tr>
    <td>Satuan</td>
    <td>:</td>
    <td><div align="left"><? echo ucfirst(strtolower($ya[NamaSatuan])); ?></div></td>
  </tr>
  <tr>
  <td>Qty</td><TD>:</TD><TD><div align="left">
  <input type="text" name="Qty" maxlength="12" size="12" value="<? echo $ya[Qty]; ?>" class="style2">
  </div></TD>
  </tr>
  <tr valign="top">
  <td>Keterangan</td><td>:</td><td><div align="left">
  <textarea rows="3" cols="35" name="Keterangan" class="style2"></textarea><?
  //asa=&NamaBarang=&iin=bca&IdDetil=5&id=3
  ?>
  <input type="hidden" name="asa" value="<? echo $asa; ?>">
  <input type="hidden" name="NamaBarang"  value="<? echo $NamaBarang; ?>">
<input type="hidden" name="iin" value="<? echo $iin; ?>">
  <input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
  <input type="hidden" name="id" value="<? echo $id; ?>">
  </div></td>
  </tr>
  <tr>
  <td colspan="3">&nbsp;</td> 
  </tr>
  <tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="fgfgf" class="style2">
  <input type="button" name="fgfgf" value="Selesai" onClick="window.close()" class="style2">
  </div></td>
  </tr>
  </table>
  </div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
}?>