<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if(!$awal){
$awal=0;
}else{
$awal=$awal; 
}
?>
<html>
<head> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9966';
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
.style22 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style222 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
 }
-->
</style>
<?
include "ceka_1.php";
include "ceka_2.php";
include "ceka_3.php";
include "ceka_4.php";
?>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1099"  colspan="3"><div align="left">
<span class="style1">MASTERING DATA LOKASI</span><br>
<table border="0" cellpadding="2" cellspacing="2" class="style22">
<tr>
<td width="974">JALAN :
 <input name="text" type="text" class="style222" id="suggest" />
  KELURAHAN : <input name="text" type="text" class="style222" id="suggest2" />
  KOTA
  :  
  <input name="text" type="text" class="style222" id="suggest3" />
KECAMATAN :  
<input name="text" type="text" class="style222" id="suggest4" /></tr>
<tr>
  <td><div align="left">
  <input    onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   name="fgfgfg" type="button" class="style222" onClick="location.href='index.php';" value="Kembali">
  <input type="button" name="fdfdfd" value="Tambah Data"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  
    onClick="wCompare_x120 = window.open('x2qaa.php', 
  'wCompare_x120', 'width=500,height=390,left=170,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_x120.focus();" class="style222">
  <?
  if($id>0 || $hari=='ayah' || $hari=='mitra' || $hari=='supran' || $hari=='sabar' || $hari=='anak3'){
  ?>
  <input type="button"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    name="fkjgkfglf" value="Reset" onClick="location.href='puasa_9_bulan.php';" class="style222" style="background:#CCCC66">
  <?
  }
  ?>
  <input name="fgfgfgf" type="button" class="style222" onClick="location.href='../keluar.php';" value="Keluar"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
  </div></td>
</tr>
</table>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style22">
<tr>
<td width="18" bgcolor="#CCCCFF"><strong>NO</strong></td>
<td width="94" bgcolor="#CCCCFF"><strong>PROPINSI</strong></td>
<td width="115" bgcolor="#CCCCFF"><strong>KOTA</strong></td>
<td width="124" bgcolor="#CCCCFF"><strong>KECAMATAN</strong></td>
<td width="159" bgcolor="#CCCCFF"><strong>KELURAHAN</strong></td>
<td width="74" bgcolor="#CCCCFF"><strong>KODE POS</strong></td>
<td width="57" bgcolor="#CCCCFF"><strong>RT</strong></td>
<td width="48" bgcolor="#CCCCFF"><strong>RW</strong></td>
<td width="201" bgcolor="#CCCCFF"><strong>JALAN</strong></td>
<td width="47" bgcolor="#CCCCFF"><strong>OPR</strong></td>
<td width="73" bgcolor="#CCCCFF"><strong>TGL JAM</strong></td>
</tr>
<?
$no=1;
if($hari=='sabar'){
$kdjkdfdfD_Dfdfd = mysql_query("SELECT * FROM kota WHERE Kecamatan='$Kecamatan'");
}elseif($hari=='supran'){
$kdjkdfdfD_Dfdfd = mysql_query("SELECT * FROM kota WHERE Kecamatan='$Kecamatan'");
}elseif($hari=='ayah'){
$kdjkdfdfD_Dfdfd = mysql_query("SELECT * FROM kota WHERE Kelurahan='$Kelurahan'");
}elseif($hari=='mitra'){
$kdjkdfdfD_Dfdfd = mysql_query("SELECT * FROM kota WHERE Kota='$Kota'");
}elseif($id>0 || $hari=='anak3'){
$kdjkdfdfD_Dfdfd = mysql_query("SELECT * FROM kota WHERE id='$id'");
}elseif($ada==2){
$kdjkdfdfD_Dfdfd = mysql_query("SELECT * FROM kota ORDER BY $ada LIMIT $awal,320");
}else{
$kdjkdfdfD_Dfdfd = mysql_query("SELECT * FROM kota  WHERE Kota like 'Bekas%'");
}
while($nn = mysql_fetch_array($kdjkdfdfD_Dfdfd)){
$war = $no%2;
if($war==1){
$warna='bgcolor="#FFFF99"';
}else{
$warna='  bgcolor="#CCFFCC"';
 }
?>
<tr <? echo $warna; ?> valign="top"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  
    onClick="wCompare_x120 = window.open('abis_sholat_tahajud.php?Detil=<? echo $nn[id]; ?>', 
  'wCompare_x120', 'width=500,height=390,left=170,Top=130,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_x120.focus();" >
<td><div align="center"><? echo $no; ?></div></td>
<td><div align="left"><? $nam=ucfirst(strtolower($nn[Propinsi]));
echo $nam;
//
$TglJam=date("d.m.Y-H:i:s");
 ?></div></td>
<td><div align="left"><? $nam2=ucfirst(strtolower($nn[Kota]));
echo $nam2;
 
?></div></td>
<td><div align="left"><? $nam3= ucfirst(strtolower($nn[Kecamatan]));
//
echo $nam3; 
 //

?></div></td>
<td><div align="left"><? $nam4=ucfirst(strtolower($nn[Kelurahan]));
//
echo $nam4;
 ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[KodePos]));?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Rt]));?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Rw]));?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Jalan]));?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Opr]));?></div></td>
<td><div align="left"><? echo $nn[TglJam];?></div></td>
</tr>
<?
$no++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>