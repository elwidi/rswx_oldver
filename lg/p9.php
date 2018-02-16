<?php 
session_start();
include "../konek.php";
include "../ceke.php";
include "../hari.php";
$ldfkldfld = mysql_query("SELECT * FROM dataobat WHERE id='$IdObat'");
$hh = mysql_fetch_array($ldfkldfld);
$i8diu = mysql_query("SELECT * FROM  stok_opm WHERE KeyID='$a[KodeBagian]-$hh[id]'");
$ub = mysql_fetch_array($i8diu);//
/*
if($ub[id]){
echo "DATA INI SUDAH PERNAH DIINPUT,.. <br>TGL $ub[Tgl]-$ub[Bln]-$ub[Thn] JAM : $ub[Jam] OLEH : $ub[Opr]";
}else{
//
*/
?>
<html>
<head><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("m12w.php?kakang=<? echo $kakang; ?>&NamaObat=<? echo $NamaObat; ?>&id=<? echo $id; ?>&ukur=<? echo $ukur; ?>", "wCompare", "width=580,height=440,left=270,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
 
//--></script> 
<style type="text/css">
<!--
.style1 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold; color:#000099
}
.style2 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	color:#000066
 }
-->
</style>
</head>
<body  <? if($anak==3){ ?> onLoad="toCompare()" <? } ?>>
<div align="left">
<?
if($hh[id]){
?>
<form action="7bv.php">
<?
}else{
?>
<form target="_self">
<? } ?><table >
<tr class="style1">
<td width="479" colspan="3"><div align="left">
HALAMAN INPUT STOK OPNAME<br />
OBAT &amp; ALKES
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="101">USER</td>
<td width="8">:</td>
<td width="319"><div align="left"><? echo strtoupper($a[Nama]); ?></div></td>
</tr>
<tr>
<td>BAGIAN</td><td>:</td><td><div align="left"><? 
$udujdd = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$a[KodeBagian]'");
$yh = mysql_fetch_array($udujdd);
echo $yh[NamaBagian];
?></div></td>
</tr>
<tr>
  <td>TGL</td>
  <td>:</td>
  <td><div align="left"><?
    echo date("d"); $bln=date("m"); $thn1=date("Y");
  include "../bulan.php"; 
  ?></div></td>
</tr>
<?
if($hh[id]){
?>
<tr>
<td>NAMA OBAT</td><td>:</td><td><div align="left"><?
echo strtoupper($hh[NamaObat]);
?>
<input type="hidden" name="IdObat" value="<? echo $IdObat; ?>">
</div></td>
<tr>
 <td>QTY</td><td>:</td><td><div align="left">
<input type="text" name="Qty" maxlength="12" value="0" disabled="disabled" size="12" class="style2">
</div></td>
</tr>
<tr>
<td>Hna</td><td>:</td><td><div align="left">
<input name="Hna" type="text" class="style2" value="<? echo $hh[Hna]; ?>" size="12" maxlength="12">
</div></td>
</tr>
<tr>
<td>Tgl Exp</td><td>:</td><td><div align="left">
<input type="text" name="TglExp" maxlength="2" size="2"  value="<? echo $ub[Tgl]; ?>">
-
<input type="text" name="BlnExp" maxlength="2" size="2" value="<? echo $ub[Bln]; ?>">
 -
 <input type="text" name="ThnExp" maxlength="4" size="4" value="<? echo $ub[Thn]; ?>">

</div></td>
</tr>
<?
}else{
?><tr>
  <td>OBAT / ALKES </td>
  <td>:</td>
  <td><div align="left">
  <input type="text" name="NamaObat" maxlength="120" size="23" class="style2">
  <input type="hidden" name="anak" value="3">
  <input type="hidden" name="kakang" value="mas">
  </div></td>
</tr>
<? } ?>
</table>
</div></td>
</tr>
<tr class="style1">
  <td colspan="3"><div align="left">
  <input  type="submit" value="Submit" name="fgf" class="style2">
  <?
  if($hh[id] || $anak==3){
  ?>
  <input type="button" name="dkjfkdjf" value="Reset" onClick="location.href='p9.php';" class="style2">
  <? 
  }
  ?>
  <input type="button" name="fgfgf" value="Close Data"    onClick="wCompare_c21d_0_dd1d32 = window.open('../Farmasi/x12_09.php?id=<? echo $vv[id]; ?>', 
  'wCompare_c21d_0_dd1d32', 'width=780,height=140,left=270,Top=250,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_c21d_0_dd1d32.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style2">  
  <input type="button" name="fgfgf" value="Tampil Keluar"    onClick="wCompare_c21d1d32 = window.open('x12_mna.php?id=<? echo $vv[id]; ?>', 
  'wCompare_c21d1d32', 'width=780,height=240,left=70,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_c21d1d32.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  class="style2"> 
  <input type="button" name="fgfgf" value="Kembali" onClick="location.href='index.php';" class="style2">
  </div></td>
</tr> 
<tr valign="top">
<td colspan="3" ><div align="left">
 <iframe src="7cxs.php" width="600" height="300" frameborder="0"></iframe>
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? // } ?>