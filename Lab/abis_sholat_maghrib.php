<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if(!$bln){
$bln=date("m");
$thn1=date("Y");
}else{
$thn1=$thn1;
$bln=$bln;
}
if($a[Level]==12){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
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
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="854" colspan="3"><div align="left" class="style1">
LAPORAN JUMLAH PEMERIKSAAN LABORATORIUM<br />
<?
include "../bulan.php";
?> 
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<input name="fgfgf" type="button" class="style4" onClick="location.href='index.php';" value="Kembali">
<input name="fgfgf" type="button" class="style4"  value="Export Ke Excel" onClick="location.href='d09m2.php?bln=<? echo $bln; ?>&thn1=<? echo $thn1; ?>';">
<input  type="button" value="Cek Periode" name="fgfg2" class="style4" style="background:#99FF66"    onClick="wCompare_0834m = window.open('../Radiologi/kCik_09.php?dimas=bagus', 
  'wCompare_0834m', 'top=230,width=580,height=240,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_0834m.focus();" >
</div>
</td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table width="522" border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="40" bgcolor="#0066FF"><div align="center" class="style3">No</div></td>
  <td width="154" bgcolor="#0066FF"><span class="style3">Pemeriksaan</span></td>
  <td width="113" bgcolor="#0066FF"><span class="style3">Jenis</span></td>
  <td width="34" bgcolor="#0066FF"><div align="right" class="style3">Jml</div></td>
  <td width="76" bgcolor="#0066FF"><div align="right" class="style3">Harga</div></td>
  <td width="65" bgcolor="#0066FF"><div align="right" class="style3">Total</div></td>
  </tr>
  <?
  $nom=1;
  $kdfdkldkld = mysql_query("SELECT * FROM lab_bulan WHERE Bln='$bln' AND Thn='$thn1'");
  while($bb = mysql_fetch_array($kdfdkldkld)){
  //
  $name=0;
   $pch = explode(".",$bb[KeyID]);
 $kdidkdidkdk = mysql_query("SELECT Harga,Total,id FROM txnjalan2 WHERE IdBiaya='$pch[0]' AND BlnMasuk='$bln' AND ThnMasuk='$thn1'");
 while($nn = mysql_fetch_array($kdidkdidkdk)){
 $Total = $Total + $nn[Total];
 $name++; }
  //
$pak = $nom%2;
if($pak==1){
$warna=' bgcolor="#D8FCC9"';
}else{
$warna=' bgcolor="#FFCCCC"';
}  ?>
  <tr <? echo $warna; ?>    onClick="wCompare_8enere = window.open('c2aa.php?id=<? echo $bb[id]; ?>',    
  'wCompare_8enere', 'width=880,height=440,left=200,Top=129, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_8enere.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <td><div align="center"><? echo $nom; ?></div></td>
  <td><div align="left"><?
  $jkj = mysql_query("SELECT Kelompok1,Tiga FROM tabelbiayax WHERE id='$pch[0]'");
  $ba = mysql_fetch_array($jkj);
  echo $ba[Kelompok1];
  ?></div></td><td><div align="left"><? echo $bb[NamaBiaya]; ?></div></td>
  <td><div align="center"><?
  echo number_format($name);
  ?></div></td>
  <td><div align="right"><?
  echo number_format($ba[Tiga]);
  ?></div></td>
    <td><div align="right"><?
  echo number_format($Total);
  $tata = $tata+$Total;
  $name=0;
  $Total=0;
  
  ?></div></td>
  </tr>
   <?
  $nom++; } ?> <tr>
    <td colspan="5" bgcolor="#0066FF"><div align="center" class="style3">Total</div></td>
    <td bgcolor="#0066FF"><div align="right" class="style3">
      <?
	echo number_format($tata); 
	?>
    </div></td>
  </tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>