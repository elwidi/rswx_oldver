<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dataa = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$z = mysql_fetch_array($dataa);
if($a[Level]==12){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {font-family: "Times New Roman", Times, serif}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</head>
<body>
<div align="left">
<form action="d_812.php">
<table border="1">
<tr>
<td colspan="3"><div align="center">
<span class="style4">UPDATE DATA HASIL PEMERIKSAAN</span><br />
 </div></td>
</tr>
<tr>
<td colspan="3"><div align="center">
<input type="submit" class="style4" value="Lakukan Proses Upload Data"  />
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="660" border="0" cellpadding="2" cellspacing="2" class="style4">
   <tr>
<td width="24" bgcolor="#66CC00"><span class="style4">NO</span></td>
<td width="119" bgcolor="#66CC00" class="style4">NAMA BIAYA</td>
<td width="156" bgcolor="#66CC00"><span class="style4">HASIL</span></td>
<td width="107" bgcolor="#66CC00"><span class="style4">NILAI NORMAL</span></td>
<td width="108" bgcolor="#66CC00"><span class="style4">SATUAN</span></td>
<td bgcolor="#66CC00"><span class="style4">KETERANGAN</span></td>
</tr>
<input type="hidden" name="Yara" value="meter">
  <? 
   $ke=1;
    	$jkop = mysql_query("SELECT * FROM cetak_hasil_sub_labinap WHERE RegId='$z[MstKey]' AND NoBukti ='LAB-$NoBukti'");
 while($sp =  mysql_fetch_array($jkop)){
 ?>
 <tr>
<td bgcolor="#FFFFFF"><div align="center"><? echo $ke; ?></div></td>
<td bgcolor="#FFFFFF"><div align="left"><? echo strtoupper($sp[NamaBiaya]); ?></div></td>
<td bgcolor="#FFFFFF"><div align="left">
<input name="Hasil_<? echo $sp[id];?>" type="text" class="style4" value="<? echo $sp[Hasil]; ?>" size="20" maxlength="100">
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="NoBukti" value="<? echo $NoBukti; ?>">
</div></td>
<td bgcolor="#FFFFFF"><div align="left">
 <? echo $sp[NilaiNormal]; ?> 
<input name="NilaiNormal_<? echo $sp[id];?>" type="hidden" class="style1" value="<? echo $sp[NilaiNormal]; ?>" size="20" maxlength="100">
</div></td>
<td bgcolor="#FFFFFF"><div align="left"><? echo $sp[Satuan]; ?>
<input name="Satuan_<? echo $sp[id];?>" type="hidden" class="style1" value="<? echo $sp[Satuan]; ?>" size="20" maxlength="100">
<?
//if($Yara=='meter'){
?>
<input type="hidden" name="Yara" value="meter" />
<input type="hidden" name="Kap" value="<? echo $Kap; ?>" />
</div></td>
<td width="67" bgcolor="#FFFFFF"><div align="left"><? echo $sp[Keterangan]; ?>
<input name="Keterangan_<? echo $sp[id];?>" type="hidden" class="style1" value="<? echo $sp[Keterangan]; ?>" size="20" maxlength="100"> </div></td>
 </tr>

  <? $ke++;  
  ?>
<?
$nomer++; } ?> <tr>
   <td colspan="6" bgcolor="#FFFFFF">&nbsp;</td>
   </tr></table>
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
