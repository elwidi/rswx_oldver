<?php 
session_start();
include "../konek.php";
include "../ceke.php";
////
 $kdjkfdfddfdddf_Dfdf  = mysql_query("SELECT * FROM teks_lab WHERE id='$supran'");
$yk = mysql_fetch_array($kdjkfdfddfdddf_Dfdf);
///
 $ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$ss = mysql_fetch_array($ada);
$kjdkdfd_Dfdfdf = mysql_query("SELECT * FROM urutanlab where id='$fas'");
$dapa = mysql_fetch_array($kjdkdfd_Dfdfdf);
$kdjfdkjfdkjfkdfd = mysql_query("SELECT * FROM teks_lab WHERE NoBukti LIKE '$fas-%' ORDER BY id desc");
$po = mysql_fetch_array($kdjfdkjfdkjfkdfd);
if(!$dapa[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif(!$ss[id]){
echo "RECORD SET TIDAK LENGKAP";
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
.style3 {color: #FFFF66}
-->
</style>
</head>
 <? if($yk[id]){
 $warna2='';
 }else{
 $warna2='bgcolor="#D1FECB"';
 }?>
<body <? echo $warna2; ?> >
<div align="left">
<?
 if($yk[id]){
?><form action="fgfGFFgf22.php">
<?  }else{
?>
<form action="fgfGFFgf.php">
<? } ?><table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3" ><div align="left" class="style1">
LENGKAPI HASIL PEMERIKSAAN<br />
<?
echo "$dapa[IdPasien]";
?>
<span class="style3"> .</span></div></td>
</tr>
<tr valign="top">
<td class="style2">Header</td>
<td>:</td><td><div align="left">
<textarea name="Judul" cols="40" rows="2" class="style2"><? echo $po[Judul]; ?></textarea>
</div></td>
</tr>
<tr valign="top" class="style2">
<td width="96">Var</td>
<td width="3">:</td>
<td width="387"><div align="left">
<textarea name="Var" cols="40" rows="2" class="style2"><? echo $yk[Vare]; ?></textarea>
</div></td>
</tr>
<tr valign="top" class="style2">
  <td>Keterangan</td>
  <td>:;</td>
  <td><textarea name="Isian" cols="40" rows="4" class="style2"><? echo $yk[Isian]; ?></textarea>
  <input type="hidden" name="Kunci" value="<? echo $supran; ?>">
  <input type="hidden" name="fas" value="<? echo $fas; ?>">
  <input type="hidden" name="fito" value="<? echo $fito; ?>">
   </td>
</tr>
<tr valign="top">
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <td colspan="3" ><div align="left">
  <input name="fgfgf" type="submit" class="style3"   style="background:#000099" value="Simpan" >
  <input name="fgfgf" type="button" class="style3"  style="background:#000099" onClick="window.close()" value="Selesai" >
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