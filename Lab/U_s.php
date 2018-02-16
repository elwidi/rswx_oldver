<?php 
session_start();
include "../konek.php";
include "../ceke.php";

$ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
$kjdkdjf_kjkjkkj  = mysql_query("SELECT * FROM txnjalan2 WHERE id='$IdDetil'");
$uu = mysql_fetch_array($kjdkdjf_kjkjkkj);
//
  $kjkfdfd_Dfdfd = mysql_query("SELECT * FROM rujuk_lab WHERE IdDetil='$IdDetil'");
  $pa= mysql_fetch_array($kjkfdfd_Dfdfd);

$kjkfdfd_Dfdfd  = mysql_query("SELECT * FROM tabelbiayax WHERE id='$uu[IdBiaya]'");
$ya = mysql_fetch_array($kjkfdfd_Dfdfd);
if(!$uu[id]){
echo "RECORD SET TIDAK LENGKAP,.....<br>";
}else{
//

//
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
.style33 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left">
<form action="d_dddf4.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="436" colspan="3"><div align="left" class="style4">
<? if($pa[id]){
?><font color="#FF0033"><b><i>
KOREKSI PEMERIKSAAN RUJUKAN  </i></b></font><? 
}else{
 ?> RUJUKAN PEMERIKSAAN  <? } ?>
</div></td>
</tr> 
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style33">
<tr>
<td width="118" bgcolor="#CCFFFF">Nama Biaya</td>
<td width="8" bgcolor="#CCFFFF"><strong>:</strong></td>
<td width="293" bgcolor="#CCFFFF"><div align="left">
<?
echo ucfirst(strtolower($uu[NamaBiaya])); 
?>
</div></td>
</tr>
<tr>
  <td>Tgl Rujuk </td>
  <td><strong>:</strong></td>
  <td><span class="style15 style2 style8  style3">
    <select name="Tgl" class="style33" id="Tgl">
    <?
	if($pa[id]){
	?><option value="<? echo $pa[TglRujuk]; ?>"><?
	 echo $pa[TglRujuk];  ?></option><?
	}else{
	?>  <option value="<? echo date("d")-0; ?>"><? echo date("d")-0; ?></option>
      <?
	  }
		 
$ttg= 1;
while($ttg<32){
?>
      <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
      <? $ttg++; } ?>
    </select>
/
<select name="Bln" class="style1" id="Bln">
<?
if($pa[id]){
?><option value="<? echo $pa[BlnRujuk]; ?>"><? echo $pa[BlnRujuk]; ?></option><?
}else{
?>  <option value="<? echo date("m")-0; ?>">
  <? $bln=date("m")-0;
  include "../bulan.php";   ?>
  </option>
  <? } ?><option value="1">Januari</option>
  <option value="2">Februari</option>
  <option value="3">Maret</option>
  <option value="4">April</option>
  <option value="5">Mei</option>
  <option value="6">Juni</option>
  <option value="7">Juli</option>
  <option value="8">Agustus</option>
  <option value="9">September</option>
  <option value="10">Oktober</option>
  <option value="11">November</option>
  <option value="12">Desember</option>
</select>
/
<select name="Thn" class="style1" id="Thn">
   <?
   if($pa[id]){
   ?><option value="<? echo $pa[ThnRujuk]; ?>"><? echo $pa[ThnRujuk]; ?></option><?
   }
$awale = 2016;
while($awale<=2019){
?>
  <option value="<? echo $awale; ?>"><? echo $awale; ?></option>
  <? $awale++; } ?>
  <option value="2013">2013</option>
</select>
  </span></td>
</tr>
<tr>
  <td>Tgl Selesai </td>
  <td><strong>:</strong></td>
  <td><span class="style15 style2 style8  style3">
    <select name="Tgl2" class="style1" id="Tgl2">
    <?
	if($pa[id]){
	?>
	<option value="<? echo $pa[TglSelesai]; ?>"><?   echo $pa[TglSelesai]; ?></option>
	<? 
	}else{
	?>  <option value="<? echo date("d")-0; ?>"><? echo date("d")-0; ?></option>
      <?
	  }
		 
$ttg= 1;
while($ttg<32){
?>
      <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
      <? $ttg++; } ?>
    </select>
/
<select name="Bln2" class="style1" id="select2">
 <?
 if($pa[id]){
 ?>
 <option value="<? echo $pa[BlnSelesai]; ?>"><?  echo $pa[BlnSelesai]; ?></option>
 <?
 }else{
 ?><option value="<? echo date("m")-0; ?>">
  <? $bln=date("m")-0;
  include "../bulan.php";   ?>
  </option>
  <? } ?>
  <option value="1">Januari</option>
  <option value="2">Februari</option>
  <option value="3">Maret</option>
  <option value="4">April</option>
  <option value="5">Mei</option>
  <option value="6">Juni</option>
  <option value="7">Juli</option>
  <option value="8">Agustus</option>
  <option value="9">September</option>
  <option value="10">Oktober</option>
  <option value="11">November</option>
  <option value="12">Desember</option>
</select>
/
<select name="Thn2" class="style1" id="select3">
  <?
   if($pa[id]){
   ?><option value="<? echo $pa[ThnSelesai]; ?>"><? echo $pa[ThnSelesai]; ?></option><?
   } 
$awale = 2016;
while($awale<=2019){
?>
  <option value="<? echo $awale; ?>"><? echo $awale; ?></option>
  <? $awale++; } ?>
  <option value="2013">2013</option>
</select>
  </span></td>
</tr>
<?
if($pa[id]){
?><tr>
<td>Status Selesai</td><td>:</td>
<td><div align="left">
<select name="Statuse">
 <option value="<? echo $pa[Stat]; ?>"><?
 if($pa[Stat]==0){
 echo "Belum";
 }else{
 echo "Sudah";
 }
 ?></option>
 <option value="0">Belum</option>
<option value="1">Selesai
</select>
</div></td>
</tr><?
}
?>
<tr>
<td>Harga Rujukan </td>
<td><strong>:</strong></td><td><div align="left">
<?
if($pa[id]){
?>
<input name="Nilai" type="text" class="style33" value="<? echo $pa[Nilai]; ?>" size="12" maxlength="14">
<? }else{
?>
<input name="Nilai" type="text" class="style33" value="<? echo $ya[Rujuk]; ?>" size="12" maxlength="14">
<? } ?><input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
<input type="hidden" name="Rec" value="<? echo $pa[id]; ?>">
</div></td>
</tr>
<tr valign="top">
  <td>Keterangan</td>
  <td><strong>:</strong></td>
  <td><div align="left">
  <textarea name="Keterangan" cols="34" rows="3" class="style33" ><? echo $pa[Keterangan]; ?></textarea>
  </div></td>
</tr>
<tr valign="top">
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <input  type="submit" value="Simpan" name="dfdfdfd">
  <input type="button" name="fgfgf" value="Tutup" onClick="window.close()">
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