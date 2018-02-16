<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjf_dfdfdfd  = mysql_query("SELECT * FROM judul_anc WHERE id=1");
$dapa =  mysql_fetch_array($kjf_dfdfdfd);
if($a[Level]==9){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
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
<form action="pao_s.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="567" height="37" colspan="3"><div align="left" class="style1">
MASTER DATA WILAYAH
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="161">NAMA BPS/RB</td>
<td width="3"><strong>:</strong></td>
<td width="375"><div align="left">
<input name="NamaBps" type="text" class="style2" value="<? echo $dapa[NamaBps]; ?>" size="56" maxlength="120"  />
<input type="hidden" name="thn1" value="<? echo $thn1; ?>">
<input type="hidden" name="bln1" value="<? echo $bln1; ?>">
<input type="hidden" name="bln2" value="<? echo $bln2; ?>">
<input type="hidden" name="tgl1" value="<? echo $tgl1; ?>">
<input type="hidden" name="tgl2" value="<? echo $tgl2; ?>">
</div></td>
</tr>
<tr>
<td>WILAYAH</td><td><strong>:</strong></td><td><div align="left">
<input name="Wilayah" type="text" class="style2" value="<? echo $dapa[Wilayah]; ?>" size="56" maxlength="120" />
</div></td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  UPDATE AKHIR : <? echo "$dapa[Opr] / $dapa[TglJam]"; ?>
  </div></td>
  </tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" name="dfdfd" value="Update">
  <input type="button" name="fgfg" value="Tutup" onClick="window.close()"> 
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
}?>
