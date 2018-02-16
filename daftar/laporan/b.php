<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
//header('Refresh: 7');

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
	font-size: 24px;
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
<table border="0" cellpadding="0" cellspacing="0">
<tr valign="top">
<td width="959" colspan="3"><div align="left">
 <table border="0" cellpadding="0" cellspacing="0">
 <tr valign="top">
 <td width="108"><img src="../../gb/gb.png" width="121" height="85" /></td>
 <td width="822"><div align="left" class="style1">
 PRODUKTIVITAS (JUMLAH PASIEN) DOKTER RAWAT INAP RS YADIKA
 </div></td>
 </tr>
 </table>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3">&nbsp;</td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="1" cellpadding="0" cellspacing="0" class="style2">
  <tr>
  <td width="24" bgcolor="#D4D0C8"><strong>NO</strong></td>
  <td width="270" bgcolor="#D4D0C8"><strong>specialisasi</strong></td>
  <td width="264" bgcolor="#D4D0C8"><strong>DOKTER</strong></td>
 <?
  $bln=1; 
  while($bln<=12){
  ?>
  <td width="38" bgcolor="#D4D0C8"><div align="center"><strong>
    <? include "../../bulan.php"; ?>
  </strong></div></td>
  <? $bln++; } ?><td bgcolor="#FFFFCC"><div align="right">Total</div></td>
  </tr>
  <?
  $nomer=1;
  $dlkdlkfld = mysql_query("SELECT * FROM specialisasi order by NamaSpc");
  while($vv = mysql_fetch_array($dlkdlkfld)){
  ///
  if($Nam!=$vv[NamaSpc]){
 $nomer=1;  }
  $lsklskdlds  = mysql_query("SELECT * FROM dokter WHERE KodeSpc='$vv[id]'");
  while($xx = mysql_fetch_array($lsklskdlds)){
  //
  ?>
  <tr>
    <td><div align="center"><? echo $nomer; ?></div></td>
    <td><div align="left"><? if($nomer==1){
	echo strtoupper($vv[NamaSpc]);
	}else{
	?>&nbsp;<?
	} ?></div></td>
    <td><div align="left"><? echo $xx[NamaDokter]; ?></div></td>
  <?
  $bg=1;
  while($bg<=12){
$jamajm = mysql_query("SELECT COUNT(id) AS mm FROM keluarmasukpasien WHERE Dokter='$xx[id]'
	AND BlnMasuk='$bg'");
	$mn = mysql_fetch_array($jamajm);  ?> 
	 <td<?  if($mn[mm]>0){ ?> onClick="wCompare = window.open('n6s.php?Bln=<? echo $bg; ?>&id=<? echo $xx[id]; ?>', 
  'wCompare', 'width=580,height=300,left=370,Top=134, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><?  
	
	if($mn[mm]>0){
	echo $mn[mm];
	$ta = $ta +$mn[mm];
	}else{ echo "-";
	}
	  ?></div></td>
	  <? $bg++; }?><td bgcolor="#FFFFCC"><div align="center"><?
	  if($ta>0){
	  echo number_format($ta);
	  $ta2 = $ta2 + $ta;
	  }else{
	  echo ".";
	  }  $ta=0;
	  ?></div></td>
  </tr>

  <?
  $nomer++;
   }  $Nam  =$vv[NamaSpc];

  ?>
  <?
  } ?>  <tr>
    <td colspan="3" bgcolor="#D4D0C8"><div align="center">TOTAL</div></td>
    <?
	$taw =1;
	while($taw<=12){
	?><td bgcolor="#D4D0C8"><div align="center"><?
$jamajm2 = mysql_query("SELECT COUNT(id) AS mm FROM keluarmasukpasien WHERE   BlnMasuk='$taw'");
	$mn2 = mysql_fetch_array($jamajm2);
if($mn2[mm]>0){
	echo number_format($mn2[mm]);
	}else{
	echo ".";
	} 
	?></div></td>
	<? $taw++; } ?>
    <td bgcolor="#D4D0C8"><div align="center"><? echo $ta2; ?></div></td>
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