<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$naman = mysql_query("SELECT * FROM tabelrj WHERE id='$Tarif'");
$ga = mysql_fetch_array($naman);
 if(!$ga[id]){
echo "Record Tarif Tidak Dikenal";
}elseif($a[Level]==3 || $a[Level]==16){?>
 <html>
 <head><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
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
<form action="siak.php">
<table border="0" class="style2" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3"><div align="left">
Setting Jasa Dokter<br />
<font color="#990000"><? echo $ga[NamaBiaya];  ?> Rp.<? echo number_format($ga[Harga]); ?>

<input type="hidden" name="Tarif" value="<? echo $ga[id]; ?>" /></font>
</div></td>
</tr>
<tr>
<td>Dokter</td><td>:</td><td><div align="left">
<select name="Dokter">
 <option value="">-Pilih Dokter-</option>
<?
$naman = mysql_query("SELECT * FROM dokter ");
while($v = mysql_fetch_array($naman)){
?><option value="<? echo $v[id]; ?>"><?
echo $v[NamaDokter]; ?></option>
<? } ?></select>
</div></td>
</tr>
<tr>
<td width="93">JasaDokter</td>
<td width="13">:</td>
<td width="276"><div align="left">
<input type="text" name="JasaDokter" maxlength="14" size="12" />
</div></td>
</tr>
<tr>
  <td>JasaAsisten</td>
  <td>:</td>
  <td><input type="text" name="JasaAsisten" maxlength="14" size="12" /></td>
</tr>
<tr>
  <td>JasaAlat</td>
  <td>:</td>
  <td><input type="text" name="JasaAlat" maxlength="14" size="12" /></td>
</tr>
<tr>
  <td>JasaOpr</td>
  <td>:</td>
  <td><input type="text" name="JasaOpr" maxlength="14" size="12" /></td>
</tr>
<tr>
  <td>JasaInsentif</td>
  <td>:</td>
  <td><input type="text" name="JasaInsentif" maxlength="14" size="12" /></td>
</tr>
<tr>
  <td>JasaRs</td>
  <td>:</td>
  <td><input type="text" name="JasaRs" maxlength="14" size="12" /></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="fgfgf" />
  <input type="button" name="fgfgf" value="Keluar" onClick="window.close()" />
  </div></td>
  </tr>
</table>
</form>
</div>
</body>    </html>
<? } ?>