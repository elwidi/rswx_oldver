<?
session_start();
include "../ceke.php";
 include "../konek.php";
///
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
//
$kjd_ddd = mysql_query("SELECT * FROM persalinan WHERE IdRj='$id'");
$ya = mysql_fetch_array($kjd_ddd);
if(!$hh[id]){
echo "RECORD SET DATA TIDAK LENGKAP";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style3 {color: #99CC33}
-->
</style>
</head>
<body>
<div align="left">
<form action="e4_445.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="459" colspan="3"><div align="left" class="style2">
INPUT DATA PERSALINAN<br />
<?
echo strtoupper($hh[NamaPasien]);  ?> ( <font color="#990000"><i><? echo "$hh[NoPasien]"; ?></i></font>)<? 
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="97">Tgl</td>
<td width="8">:</td>
<td width="315"><div align="left">
    <select name="Tgl" class="style1" id="Tgl">
  <?
  if($ya[id]){
  ?>
  <option value="<? echo $ya[Tgl]; ?>"><? echo $ya[Tgl];  ?></option>
  <? 
  }else{
  ?>  <option value="<? echo $hh[TglMasuk]; ?>"><? echo $hh[TglMasuk];  ?></option>
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
  if($ya[id]){
  ?>
  <option value="<? echo $ya[Bln]; ?>"><? echo $ya[Bln];  ?></option>
  <? 
  }else{
  ?> <option value="<? echo $hh[BlnMasuk]; ?>">
  <? $bln=$hh[BlnMasuk];
  include "../bulan.php";   ?>
  </option>  <? } ?>

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
<select name="Thn" class="style1" id="Thn">
  <?
  if($ya[id]){
  ?>
  <option value="<? echo $ya[Thn]; ?>"><? echo $ya[Thn];  ?></option>
  <? 
  }else{
  ?><option value="<? echo $hh[ThnMasuk]; ?>"><? echo $hh[ThnMasuk]; ?></option>
  <?
  } 
$awale = 2014;
while($awale<=2015){
?>
  <option value="<? echo $awale; ?>"><? echo $awale; ?></option>
  <? $awale++; } ?>
  <option value="2013">2013</option>
</select>
  </span> </div></td>
</tr>
<tr valign="top">
  <td>Keterangan</td>
  <td>:</td>
  <td><div align="left">
  <textarea name="Keterangan" cols="40" rows="3" class="style1" ><? echo $ya[Keterangan]; ?></textarea>
  </div>
  <input type="hidden" name="id" value="<? echo $id; ?>">
  </td>
</tr>
<tr valign="top">
  <td>Opr/<span class="style3">Wktu</span></td>
  <td>:</td>
  <td><div align="left"><?
  echo $a[Nama];  echo " ";
  echo date("d.m.Y-H:i:s");
  ?></div></td>
</tr>
<tr valign="top">
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="fgfgf" class="style1"><?
  if($ya[id]){
  ?>
  <input type="button" name="fgfgf" value="Hapus"  class="style1"  onClick="wCompares2_01012 = window.open('x2_a0i.php?id=<? echo $id; ?>', 
  'wCompares2_01012', 'width=680,height=120,left=60,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01012.focus();" >
 <? } ?> <input type="button" name="fgfgf" value="Selesai" onClick="window.close()" class="style1">
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