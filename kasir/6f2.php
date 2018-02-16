<?php
session_start();
include "../konek.php";
include "../salaman.php";
include "../ceke.php";
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$ii = mysql_fetch_array($PasieR);
 $splo = explode("-",$ii[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan); 
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF99CC';
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
	font-size: 12px;
}
.style122 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	font-style: italic;
	color: #FFFFFF;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2"> 
<tr>
<td width="840" colspan="3"><div align="left" class="style1">
LIST DETAIL PEMBAYARAN DP
</div></td>
</tr>
<TR>
<TD colspan="3" valign="top"> 
<div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td width="127">MST KEY</td>
<td width="10">:</td>
<td width="383"><div align="left"><? echo $ii[MstKey];?></div></td>
</tr>
<tr>
  <td>NO RM </td>
  <td>:</td>
  <td><div align="left"><? echo $ii[NoPasien]; ?></div></td>
</tr>
<tr>
  <td>NAMA PASIEN </td>
  <td>:</td>
  <td><div align="left"><? echo strtoupper($ii[NamaPasien]); ?></div></td>
</tr>
<tr>
  <td>KELAS</td>
  <td>:</td> 
  <td><div align="left"><? echo strtoupper($j[NamaRuangan]); ?></div></td>
</tr>
</table>
</div></TD>
</TR>
<TR>
  <TD colspan="3" valign="top"><div align="left">
  <table width="785" border="1" cellpadding="1" cellspacing="1" class="style122">
  <tr>
  <td width="21" bgcolor="#D4D0C8"><strong>NO</strong></td>
  <td width="58" bgcolor="#D4D0C8"><strong>TGL</strong></td>
  <td width="106" bgcolor="#D4D0C8"><strong>JENIS BAYAR</strong></td>
  <td width="145" bgcolor="#D4D0C8"><strong>SARANA</strong></td>
  <td width="60" bgcolor="#D4D0C8"><div align="right"><strong>JAM</strong></div></td>
  <td width="71" bgcolor="#D4D0C8"><div align="right"><strong>KK</strong></div></td>
  <td width="57" bgcolor="#D4D0C8"><div align="right"><strong>DB</strong></div></td>
  <td width="58" bgcolor="#D4D0C8"><div align="right"><strong>TUNAI</strong></div></td>
  <td width="173" bgcolor="#D4D0C8"><strong>PERUSAHAAN</strong></td>
   </tr>
  <?
  $nomer=1;
  $DJFHJDFDJDdfdd = mysql_query("SELECT * FROM penerimaandp WHERE MstKey='$ii[MstKey]'");
  while($xs = mysql_fetch_array($DJFHJDFDJDdfdd)){
if($FiLaDim[Sembilan]=='on' && $xs[id]!=$Detil){
?>  <tr  onClick="location.href='6f2.php?id=<? echo $id; ?>&Detil=<? echo $xs[id]; ?>';" valign="top" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<?
}elseif($xs[id]==$Detil && $FiLaDim[Sembilan]=='on'){
?><tr bgcolor="#000000" class="style3"><? 
}else{  ?>
  <tr  bgcolor="#CCFFCC">
  <? } ?>
  <td><div align="center"><?  echo $nomer; ?></strong></div></td>
  <td><div align="left"><?  echo "$xs[tgl]-$xs[bln]-$xs[thn]";  ?></div></td>
  <td><div align="left">
    <?   
  $asa = number_format($xs[JenisDp]);
  if($asa=='0'){
  echo "DP";
  }elseif($asa==1){
  echo "PELUNASAN";
  }else{
  echo "?";
  }
  ?>
   </div></td>
  <td><div align="left"><?  echo strtoupper($xs[NamaType]);  ?></div></td>
   <td><div align="right"><?  echo number_format($xs[Jam]);
   $tot_1 = $tot_1 + $xs[Jam];  ?></div></td>
    <td><div align="right"><?  echo number_format($xs[Kk]); 
	   $tot_2 = $tot_2 + $xs[Kk]; ?></div></td>
  <td><div align="right"><?  echo number_format($xs[Db]);
     $tot_3 = $tot_3 + $xs[Db];  ?></div></td>
    <td><div align="right"><?  echo number_format($xs[Tunai]); 
	   $tot_4 = $tot_4 + $xs[Tunai]; ?></div></td>
	<TD><div align="left"> 
	  <?
	  if($xs[id]==$Detil){
?><input name="fgfgf" type="button" class="style122"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="HAPUS"   onClick="location.href='jn_6.php?id=<? echo $id; ?>&Detil=<? echo $Detil; ?>';">
	  <? 
}else{
	echo strtoupper($xs[NamaPer]); 
	} ?>
 </div></TD>
   </tr>
  
  <?
  $nomer++; } ?>
  <tr valign="top">
    <td colspan="4" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($tot_1); ?></strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($tot_2); ?></strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($tot_3); ?></strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($tot_4); ?></strong></div></td>
	<td><div align="left"><?
	$total = $tot_1 + $tot_2 + $tot_3 + $tot_4;
	echo number_format($total); 
	?></div></td>
  </tr></table>
  <span class="style3">.</span></div></TD>
</TR>
</table>
</div>
</body>
</html>
<?
}
?>