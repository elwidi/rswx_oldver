<?php
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
header('Refresh: 2');
$id = $_GET["id"];
$kiks_sd = mysql_query("SELECT * FROM keluarmasukpasien  WHERE id='$id'");
$ii = mysql_fetch_array($kiks_sd);
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#99FF00';
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
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="567" colspan="3"><div align="left" class="style1">LIST HISTORY PENERIMAAN DP<br /><? 
echo strtoupper($ii[NamaPasien]); echo " ($ii[NoPasien])"; 
?></div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tR>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style2">
<tR>
<td width="28" rowspan="2" bgcolor="#D4D0C8"><strong>NO </strong></td><td width="33" rowspan="2" bgcolor="#D4D0C8"><strong>TGL </strong></td><td colspan="4" bgcolor="#D4D0C8"> <div align="center"><strong>NILAI  </strong></div></td><td width="248" rowspan="2" bgcolor="#D4D0C8"><strong> KETERANGAN</strong></td>
</tR>
<tR>
<td width="48" bgcolor="#D4D0C8"><div align="right"><strong>TUNAI</strong></div></td><td width="55" bgcolor="#D4D0C8"><div align="right"><strong>DEBET</strong></div></td><td width="62" bgcolor="#D4D0C8"><div align="right"><strong>KREDIT</strong></div></td><td width="51" bgcolor="#D4D0C8"><div align="right"><strong>JAM</strong></div></td>
</tR>
<?
$nomer=1;
$dkljfldklfdklfd = mysql_query("SELECT * FROM penerimaandp WHERE MstKey='$ii[MstKey]' ORDER BY id DESC");
while($xx = mysql_fetch_array($dkljfldklfdklfd)){
if($xx[JenisDp]==1){
$warna='bgcolor="#FFCC99"';
}else{
$warna='';
}
?>
<tr  <? echo $warna; ?> onClick="wCompare3wsds = window.open('vrd_A.php?id=<? echo $id; ?>&Detil=<? echo $xx[id]; ?>', 
  'wCompare3wsds', 'width=480,height=420,left=170,Top=160,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3wsds.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo "$xx[tgl]-$xx[bln]-$xx[thn]"; ?></div></td> 
<td><div align="right"><? echo number_format($xx[Tunai]);
$to_1 = $to_1 + $xx[Tunai];
 ?></div></td>
<td><div align="right"><? echo number_format($xx[Db]);
$to_2 = $to_2 + $xx[Db];
 ?></div></td>
<td><div align="right"><? echo number_format($xx[Kk]);
$to_3 = $to_3 + $xx[Kk];
 ?></div></td>
<td><div align="right"><? echo number_format($xx[Jam]);
$to_4 = $to_4 + $xx[Jam];
 ?></div></td>
<td><div align="left"><? echo strtoupper($xx[Keterangan]); ?></div></td>
</tr>
<?
$nomer++; } ?><tr>
  <td colspan="2" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
  <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_1); ?></strong></div></td>
  <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_2); ?></strong></div></td>
    <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_3); ?></strong></div></td>
	  <td bgcolor="#D4D0C8"><div align="right"><strong><? echo number_format($to_4); ?></strong></div></td>
	  <td bgcolor="#D4D0C8"><div align="left"><strong>
	    <?
	  $tot = $to_1+$to_2+$to_3+$to_4;
	  echo number_format($tot); 
	  ?>
	  </strong></div></td>
</tr>
</table>
</div>
</td>
</tR>
</table>
</div>
</body>
</html>
<?
}
?>