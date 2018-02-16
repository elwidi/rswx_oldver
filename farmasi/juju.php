<?
session_start();
include "../konek.php";
include "../ceke.php";
$kjfkdjfkdjfdkj = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'");
$ha  =  mysql_fetch_array($kjfkdjfkdjfdkj);
if(!$ha[id]){
echo "DATA TIDAK LENGKAP";
}else{
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
.style22 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>
</head>
<body>
<div align="left">
<form action="ddfdfdfdfd.php">
<table border="0" cellpadding="2" class="style22" cellspacing="2">
<tr>
<td colspan="3"><div align="left" class="style3">
HALAMAN TENTUKAN TGL TUKAR<br />
FAKTUR : <? echo $ha[NoFaktur];  ?>
</div></td>
</tr>
<tr>
<td>Tgl Tukar</td><TD>:</TD><td><div align="left">
  <span class="style15 style2 style8  style3">
  <select name="TglTukar" class="style1"><?
  if($ha[TglTukar]>0){
 ?>
  <option value="<? echo $ha[TglTukar]; ?>"><?  echo $ha[TglTukar];   ?></option>
    <? 
	}else{
  ?>
    <option value="<? echo date("d")-0; ?>"><? echo date("d"); ?></option>
    <?
	}
		 
$ttg= 1;
while($ttg<32){
?>
    <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
    <? $ttg++; } ?>
  </select>
  <select name="BlnTukar" class="style1" >
    <?
	if($ha[BlnTukar]>0){
	?><option value="<? echo $ha[BlnTukar]; ?>">
<? echo $ha[BlnTukar]; ?></option>      <? 
	}else{
	?><option value="<? echo date("m")-0; ?>">
      <? 
	  } $bln=date("m")-0; $thn1='';
	include "../bulan.php";   ?>
      </option>
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
<select name="ThnTukar" class="style1" >
  <?
  if($ha[ThnTukar]>2012){
  ?><option value="<? echo $ha[ThnTukar]; ?>"><? echo $ha[ThnTukar]; ?></option><? 
  } 
$awale = 2014;
while($awale<=2017){
?>
  <option value="<? echo $awale; ?>"><? echo $awale; ?></option>
  <? $awale++; } ?>
</select>
  </span>
  <input type="hidden" name="dimas" value="<? echo $dimas; ?>" />
<input type="hidden" name="id" value="<?  echo $id; ?>" /> 
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="submit" value="SImpan" name="fgfgf" />
 <input type="button"  name="kdjkdjfkd" value="Selesai" onClick="window.close()" />
</div></td>
</tr>
</table>
</form></div>
</body>
</html>
<? } ?>