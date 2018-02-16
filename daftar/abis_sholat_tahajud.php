<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfkjdkfd_Dfdfd = mysql_query("SELECT * FROM kota WHERE id='$Detil'");
$ya  =  mysql_fetch_array($kdjfkjdkfd_Dfdfd);
  if(!$ya[id]){
echo "RECORD SET TIDAK LENGKAP,....";
}else{
?>
<html>
<head>
<?
 include "ceka_22.php";
include "ceka_32.php";
include "ceka_42.php";
?>
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
<form action="saa.php">
<table border="1">
<tr>
<td width="403" colspan="3"><div align="left" class="style1">
TAMBAH DATA LOKASI
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="84">Propinsi</td>
<td width="8">:</td>
<td width="290"><div align="left">
 <select name="Pro" class="style2">
<option value="<? echo $ya[Propinsi]; ?>"><? echo $ya[Propinsi]; ?></option>
<?
$jakaja= mysql_query("SELECT * FROM prop ORDER BY NamaProp");
while($nn = mysql_fetch_array($jakaja)){
?>
<option value="<? echo $nn[NamaProp]; ?>"><?
 echo $nn[NamaProp];
?></option>
<? } ?>
</select>
</div></td>
</tr>
<tr>
<td width="84">Kota</td>
<td width="8">:</td>
<td width="290"><div align="left">
<?
if($IdKot>0){
$dkjfkdjfkdjfk = mysql_query("SELECT NamaKot FROM kot WHERE id='$IdKot'");
$nb = mysql_fetch_array($dkjfkdjfkdjfk);
echo $nb[NamaKot];
?>
<input type="hidden" name="NamaKot" value="<? echo $nb[NamaKot]; ?>">
<?
}else{
?><input name="NamaKot" type="text" class="style2" id="suggest3"  value="<? echo $ya[Kota]; ?>" autofocus="autofocus"  />
<? } ?>
</div></td>
</tr>
<tr>
<td width="84">Kecamatan</td>
<td width="8">:</td>
<td width="290"><div align="left"><?
if($IdKec>0){ 
$dkjfkdjfkdjfk2 = mysql_query("SELECT NamaKec FROM kecamatan WHERE id='$IdKec'");
$nb2 = mysql_fetch_array($dkjfkdjfkdjfk2);
echo $nb2[NamaKec];
?>
<input type="hidden" name="NamaKec" value="<? echo $nb2[NamaKec]; ?>">
<?
}else{ ?>
<input name="NamaKec" type="text" class="style2" id="suggest4" value="<? echo $ya[Kecamatan]; ?>" />
<? } ?>
</div></td>
</tr>
<tr>
  <td>Kelurahan</td>
  <td>:</td>
  <td><?
if($IdKel>0){
$dkjfkdjfkdjfk3 = mysql_query("SELECT NamaKel FROM kelurahan WHERE id='$IdKel'");
$nb3 = mysql_fetch_array($dkjfkdjfkdjfk3);
echo $nb3[NamaKel];
?>
<input type="hidden" name="NamaKel" value="<? echo $nb3[NamaKel]; ?>">
<?
}else{ ?>
<input name="NamaKel" type="text" class="style2" id="suggest2" value="<? echo $ya[Kelurahan]; ?>">
<? } ?></td>
</tr>
<tr>
  <td>Kode Pos </td>
  <td>:</td>
  <td><input name="KodePos" type="text" class="style2" value="<? echo $ya[KodePos]; ?>" size="30" maxlength="100"></td>
</tr>
<tr>
  <td>Rt</td>
  <td>:</td>
  <td><input name="Rt" type="text" class="style2" value="<? echo $ya[Rt]; ?>" size="30" maxlength="50">
  <input type="hidden" name="Detil" value="<? echo $Detil; ?>">
  </td>
</tr>
<tr>
  <td>Rw</td>
  <td>:</td>
  <td><input name="Rw" type="text" class="style2" value="<? echo $ya[Rw]; ?>" size="30" maxlength="50"></td>
</tr>
<tr>
  <td>Jalan</td>
  <td>:</td>
  <td><input name="Jalan" type="text" class="style2" value="<? echo $ya[Jalan]; ?>" size="30" maxlength="200"></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input name="fgfgf" type="submit" class="style2" value="Simpan">
  
  <input name="ccgfgfgf" type="button" class="style2" onClick="window.close()" value="Selesai">
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
<? } ?>