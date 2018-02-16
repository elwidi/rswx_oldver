<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-11' WHERE id='$a[id]'");
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-weight: bold}
.style3 {font-size: 14px}
.style4 {
	font-size: 14px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px;color: #000000}
-->
</style>
<?
if($a[Level]==3){
?>
<SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="../logistik/v_0909090.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1;?>&JenisLap=<? echo $JenisLap; 
?>&TypeLap=<? echo $TypeLap; ?>";
self.close();
//-->
} 
</SCRIPT>

<? }else{
?>
<SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="348u.php?KodePoli=<? echo $KodePoli; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1;?>";
self.close();
//-->
} 
</SCRIPT>
<? } ?>
</head>
<body <? if($ade=='dimas'){ ?> onLoad="win44()"<? } ?>>
<div align="left">
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="477" colspan="3"><div align="center" class="style4"> HALAMAN TARIK DATA PENJUALAN
</div></td>
</tr>
<tr>
<td height="25" colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="3" cellspacing="3" class="style1">
<tr>
<td width="76">PERIODE</td>
<td width="4">:</td>
<td width="392"><div align="left"><span class="style15 style2 style8  style3">
 
  <select name="tgl1" class="style1" id="tgl1">
  <option value="<? echo date("d")-0; ?>"><? echo date("d")-0; ?></option>
    <?
		 
$ttg= 1;
while($ttg<32){
?>
    <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
    <? $ttg++; } ?>
  </select>
-
<select name="tgl2" class="style1" id="tgl2">
    <option value="<? echo date("d")-0; ?>"><? echo date("d")-0; ?></option>
<?
		 
$ttg= 1;
while($ttg<32){
?>
  <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
  <? $ttg++; } ?>
</select>
/
  
<select name="bln1" class="style1" id="bln1">
<option value="<? echo date("m")-0; ?>"><? echo date("m")-0; ?></option>
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
<select name="thn1" class="style1" id="thn1">
<?
$awa=2014;
while($awa<2021){
?>
<option value="<? echo $awa; ?>"><? echo $awa; ?></option>
<?
$awa++; }
?> 
</select>
 <input type="hidden" name="ade" value="dimas">
 
</span>

</div></td>
</tr>
<tr>
<td>PILIH UNIT</td><td>:</td><td><div align="left">
<select name="KodePoli" class="style1">
 <option value="-">--ALL--</option>
<?
$jdkd = mysql_query("SELECT id FROM bagian WHERE id!='3' AND id!=12 
AND id!=11 AND id!=16 AND id!=28 AND id!=80 AND id!=78  AND id!=72 AND id!=73 AND id!=45 ORDER BY id");
while($se= mysql_fetch_array($jdkd)){
?>
<option value="<? echo $se[id]; ?>"><?
$kdjkdjfd  = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$se[id]'");
$m = mysql_fetch_array($kdjkdjfd);
echo strtoupper($m[NamaBagian]); echo " ( $se[id] )";
 ?></option>
<?
}
?>
</select>
</div></td>
</tr>
 <tr>
<td colspan="3"><div align="center">
<input name="dfdf" type="submit" class="style1" value="Sort" />
<input name="dfdf" type="button" class="style1" onClick="window.close()" value="Selesai" />
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
}else{

}?>
