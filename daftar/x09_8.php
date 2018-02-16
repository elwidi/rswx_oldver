<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ade = $_GET["ade"];
$NamaPasien = $_GET["NamaPasien"];
$NoPasien = $_GET["NoPasien"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head><script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #FFFFFF;
}
.style4 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<form target="_self">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1151" colspan="3" bgcolor="#5ABB52"><?
if($a[KodeBagian]==22){
	       $file='../gambar/rm.gif';
}elseif($a[KodeBagian]==21){
	       $file='../gambar/cs.gif';
		   
}else{
	       $file='../gambar/pendaftaran.gif';
} ?> <img src="<? echo $file; ?>"></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="142"><?
if($ade==3){
?>NO RM<? 
}else{
?>NAMA PASIEN<? } ?></td>
<td width="8">:</td>
<td width="974"><div align="left">
<?
if($ade==3){
?><input type="text" name="NoPasien" maxlength="60" size="20" class="style1"><? 
}else{
?>
<input type="text" name="NamaPasien" maxlength="60" size="20" class="style1">
<? } ?>

<input type="hidden" name="ade" value="<? echo $ade; ?>">
&nbsp;&nbsp;
<input type="submit" value="Submit" name="fgf" class="style1">
<?
if($ade==3){
?><input type="button" name="fgfg" value="NamaPasien" onClick="location.href='x09_8.php';" class="style1" style="background:#99FF66"><?  
}else{
?><input type="button" name="fgfg" value="NoPasien" onClick="location.href='x09_8.php?ade=3';" class="style1">
<? } ?>
<input type="button" name="fgf2" class="style1" value="Cek By Periode"  onClick="wCompare = window.open('juj_D.php?mas=supran', 
  'wCompare', 'width=580,height=200,left=470,Top=190,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();" >
<input type="button" name="fgfg" value="Kembali" onClick="location.href='index.php';" class="style1">
</div></td>
</tr>
</table>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
 <table width="1149" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr  bgcolor="#58BB4F">
<td width="22" bgcolor="#000000" ><span class="style3">NO</span></td>
<td width="40" bgcolor="#000000" ><span class="style4">REGID</span></td>
<td width="40" bgcolor="#000000" ><span class="style4">TGL</span></td>
<td width="70" bgcolor="#000000" ><span class="style4">JAM MASUK</span></td>
<td width="107" bgcolor="#000000" ><span class="style4">NO RM</span></td>
<td width="155" bgcolor="#000000" ><span class="style4">NAMA PASIEN</span></td>
<td width="118" bgcolor="#000000" ><span class="style4">POLI</span></td>
<td width="146" bgcolor="#000000" ><span class="style4">DOKTER</span></td>
<td width="28" bgcolor="#000000" ><div align="center" class="style4">USIA</div></td>
<td width="208" bgcolor="#000000" ><span class="style4">PENJAMIN</span></td>
<td width="66" bgcolor="#000000" ><span class="style4">BARU/LAMA</span></td>
 </tr>
<?
$nomer=1;
$tgl =date("d");
$bln=date("m");
$thn=date("Y");
$pj = strlen($NamaPasien);
$pjk2 = strlen($NoPasien);
$mas = $_GET["mas"];
$tgl1= $_GET["tgl1"];
$tgl2= $_GET["tgl2"];
$bln1= $_GET["bln2"];
$thn1= $_GET["thn1"];

if($mas=='miduk'){
  $msjsmsm = mysql_query("SELECT * FROM rwtjalan_pesan WHERE 
 TglMasuk>=$tgl1 AND TglMasuk<=$tgl2  AND BlnMasuk=$bln1  AND ThnMasuk=$thn1 ORDER BY id desc limit 0,100");
}elseif($pjk2>0){
 $msjsmsm = mysql_query("SELECT * FROM rwtjalan_pesan WHERE NoPasien='$NoPasien' ORDER BY id desc limit 0,100");
}elseif($pj>0){
$msjsmsm = mysql_query("SELECT * FROM rwtjalan_pesan WHERE NamaPasien LIKE '$NamaPasien%' ORDER BY id desc limit 0,100");
}else{
$msjsmsm = mysql_query("SELECT * FROM rwtjalan_pesan  ORDER BY id desc limit 0,230");
}
while($vv = mysql_fetch_array($msjsmsm)){
$re = $nomer %2;
$tg = date("d")-0; $bl=date("m")-0; $th = date("Y");
if($tg==$vv[TglMasuk] && $bl==$vv[BlnMasuk] && $th==$vv[ThnMasuk]){
$warna =' bgcolor="#FF99CC"';
}elseif($re==1){
$warna ='bgcolor="#CCCCCC"';
}else{
$warna ='';
}
 
if($tg==$vv[TglMasuk] && $bl==$vv[BlnMasuk] && $th==$vv[ThnMasuk]){
?>
<tr  <? echo $warna; ?>valign="top"  onClick="wCompare = window.open('sd.php?id=<? echo $vv[id]; ?>', 
  'wCompare', 'width=730,height=100,left=370,Top=200,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
	<? }else{
	?><tr <?  echo $warna; ?>><?
	}?>
<tD><div align="center"><? echo $nomer; ?></div></tD>
<td><div align="left"><? echo $vv[RegId];?></div></td>
<td><div align="left"><? echo "$vv[TglMasuk]-$vv[BlnMasuk]-$vv[ThnMasuk]";?></div></td>
<td><div align="left"><? echo $vv[JamMasuk];?></div></td>
<td><div align="left"><? echo $vv[NoPasien];?></div></td>
<td><div align="left"><? echo strtoupper($vv[NamaPasien]); ?></div></td>
<td><div align="left"><? echo $vv[Bagian]; ?></div></td>
<td><div align="left"><? echo $vv[NamaDokter]; ?></div></td>
<td><div align="center"><? echo $vv[Umur]; ?></div></td>
<td><div align="left"><? echo strtoupper($vv[NamaPer]); ?></div></td>
<td><div align="center"><? echo $vv[LB]; ?></div></td>
</tr>
<?
$nomer++; } ?><tr  bgcolor="#58BB4F" valign="top">
  <tD colspan="10" bgcolor="#000000" >&nbsp;</tD>
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
}?>