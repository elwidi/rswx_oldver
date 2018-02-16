<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1detil WHERE id='$IdDetil'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
if($a[Level]!=11){
echo "MAAF ANDA TIDAK DIIJINKAN AKSES HALAMAN INI";}elseif(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
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
<?
if($IdPo>0){
?><form action="../Farmasi/jnhhh.php">
<?
}else{
?>
<form action="t23.php">
<? } ?><table border="0" cellpadding="2" cellspacing="2">
<?
if($IdPo>0){
?><tr bgcolor="#CCFF99"><?
}else{
?><tr>
<? } ?><td width="339" colspan="3" valign="top">
  <span class="style1">HALAMAN VERIFIKASI DATA  </span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table class="style2" width="347" border="0" cellpadding="2" cellspacing="2">
<?
if($IdPo>0){
$dldf_dfdfddf = mysql_query("SELECT NoPo,NamaSupplier FROM polog77 WHERE id='$IdPo'");
$bs = mysql_fetch_array($dldf_dfdfddf);
?>
<tr>
<td>NOPO</td><td>:</td><td><div align="left"><? echo $bs[NoPo]; ?></div></td>
</tr>
<tr>
<td>SUPPLIER</td><td>:</td><td><div align="left"><? echo $bs[NamaSupplier];?></div></td>
</tr>
<?
}else{
/*?><tr>
<td>ARAHKAN KE PO</td><td>:</td><td><div align="left">
<select name="IdPo">
<option value="-">--Pilih Po--</option>
<?
$mn= mysql_query("SELECT id FROM polog77 WHERE Stak=0");
while($hh=mysql_fetch_array($mn)){
?>
<option value="<? echo $hh[id]; ?>" onClick="location.href='cw29.php?IdPo=<? echo $hh[id]; ?>&id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>';"><?
$dldf_df = mysql_query("SELECT NoPo,NamaSupplier FROM polog77 WHERE id='$hh[id]'");
$bi = mysql_fetch_array($dldf_df);
echo $bi[NamaSupplier];
?></option>
<? } ?>
</select>
</div></td>
</tr> 

<? */  } ?>
<tr>
<td width="149">OBAT/ALKES</td>
<td width="8">:</td>
<td width="168"><div align="left"><? echo $ok[NamaObat]; ?></div></td>
</tr>
<tr>
<td>SATUAN</td><td>:</td><td><div align="left"><? echo $ok[NamaSatuan]; ?>
<?
if($IdPo>0){
?>
<input type="hidden" name="id" value="<? echo $IdPo; ?>">
<input type="hidden" name="IdBarang" value="<? echo $ok[IdObat];?>">
<input type="hidden" name="Harga" value="<? echo $ok[HargaBeli]; ?>">
<input type="hidden" name="Satuan" value="<? echo $ok[IdSatuan]; ?>">
<input type="hidden" name="baya" value="2">
<input type="hidden" name="asep" value="<? echo $id; ?>">
<?
}else{
?><input type="hidden" name="id" value="<? echo $id; ?>">
<? } ?><input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
</div></td>
</tr>
<tr onClick="location.href='b42.php?IdObat=<? echo $ok[IdObat]; ?>&id=<? echo $ok[IdUnit]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  bgcolor="#FFCC99">
<td>STOK</td><td>:</td><td><div align="left"><?
  $IdObat=$ok[IdObat];
  $id = $ok[IdUnit];
   include "stok2.php";?></div></td>
</tr>
<tr>
<td>QTY</td><td>:</td><td><div align="left">
<input <? if($IdPo>0){ ?> disabled="disabled"<? }else{ } ?> name="Qty" type="text" class="style2"  value="<? echo $ok[Qty]; ?>" size="12" maxlength="12"/>
 </div></td>
</tr>
<?
if($ok[Stat]){ 
?>
<tr>
<td>Qty Ok</td><td>:</td><td><div align="left">
 <input <? if($IdPo>0){ }else{ ?> disabled="disabled"<? } ?>  type="text" name="Qty" maxlength="12" size="12" class="style1" value="<? echo $ok[QtyBeri]; ?>">
</div></td>
</tr>
<?
}
?>
<tr valign="top">
  <td>KETERANGAN</td>
  <td>:</td>
  <td><div align="left"><textarea rows="4" cols="36" name="Keterangan" class="style1"><?
  echo $ok[Keterangan];
  ?></textarea></div></td>
</tr>
<?
if($IdPo>0){
?><tr bgcolor="#CCFF99"><?
}else{
?><tr>
<? } ?>
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="fgf" class="style2">
  <input type="button" name="ffg" class="style2" value="Selesai" onClick="window.close()">
  </div></td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</form></div>
</body>
</html>
<?
}?>
