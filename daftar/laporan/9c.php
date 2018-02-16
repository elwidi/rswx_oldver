<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$Thn=date("Y");
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
.style4 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1021" colspan="3"><div align="left">
<span class="style1">LAPORAN EFEKTIFITAS ASURANSI PADA PASIEN THN 2014</span> <br />
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="button" name="fgfgf" value="Kembali" onClick="location.href='../index.php';">
 <input type="button" name="fgfgf" value="Export Ke Excel" onClick="location.href='d09m3.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>';">
 </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="989" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="27" bgcolor="#003399"><span class="style3">NO</span></td>
<td width="780" bgcolor="#003399"><span class="style3">NAMA PER</span></td>
<?
$dap=date("m")-0;
 $awal =1;
while($awal<=$dap){?><td width="71" bgcolor="#003399"><div align="center"><span class="style3">
  <? $bln=$awal; 
include "../../bulan3.php";?>
</span></div></td>
<? $awal++; } ?><td width="85" bgcolor="#003399"><div align="center"><strong class="style3">TOTAL</strong></div></td>
</tr>
<?
$nomer = 1;
$ldjfldkfld = mysql_query("SELECT * FROM dataperusahaan order by NamaPer");
while($kk = mysql_fetch_array($ldjfldkfld)){
$pcd = $nomer%2;
if($pcd==1){
$warna='bgcolor="#E2FEEF"';
}else{
$warna='';
} 
?>
<tr <? echo $warna; ?> > 
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($kk[NamaPer]));  ?></div></td>
<? $awal =1;
while($awal<=$dap){
   $kdjfkdjfkd_009 = mysql_query("SELECT COUNT(id) AS hh FROM rwtjalan WHERE KodePer='$kk[id]' AND BlnMasuk='$awal' AND ThnMasuk=2014");
  $hb = mysql_fetch_array($kdjfkdjfkd_009);
  ?><td width="71" <? if($hb[hh]>0){?>
  onClick="wCompare = window.open('q2.php?hari=ini&Bln=<? echo $awal; ?>&id=<? echo $kk[id]; ?>', 
  'wCompare', 'width=580,height=300,left=370,Top=134, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center">
  <? 
  if($hb[hh]>0){
   echo $hb[hh];
  $kolom = $kolom + $hb[hh];
  }else{
  echo "-";
  }
    ?>
</div></td> 
<? $awal++; } ?><td><div align="center"><? if($kolom>0){
echo $kolom;
}else{
echo "-"; 
} $kolom=0;  ?></div></td>
</tr>
 
<?
$nomer++;
} ?>
<tr   >
<td colspan="2" bgcolor="#003399"><div align="center" class="style3">TOTAL</div></td> 
<?
  $awal =6;
while($awal<=12){?>  
  <td bgcolor="#003399"><div align="center"><span class="style3">
    <?
  $ksjs = mysql_query("SELECT COUNT(id) AS hg FROM rwtjalan WHERE BlnMasuk='$awal' AND ThnMasuk=2014");
  $pka = mysql_fetch_array($ksjs);
  if($pka[hg]>0){
  echo number_format($pka[hg]);
  }else{
  echo "-";
  }  ?>
  </span></div></td> 
  <?
  $awal++; } ?>
  <td bgcolor="#003399"><span class="style4"></span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>