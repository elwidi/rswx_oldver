<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
if(!$uu[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
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
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF9966';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//--></script>
</head>
<body>
<div align="left">
<table border="1">
<tr>
<td width="496" colspan="3"><div align="left" class="style1">
LIST DATA ALASAN
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellspacing="2" class="style2">
<tr>
<td width="23" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="295" bgcolor="#D4D0C8"><strong>ALASAN</strong></td>
<td width="70" bgcolor="#D4D0C8"><strong>OPR</strong></td>
<td width="80" bgcolor="#D4D0C8"><strong>TGL</strong></td>
</tr>
<?
$nomer=1;
$kdjkdj = mysql_query("SELECT * FROM alasanbatal ORDER BY id DESC");
while($mm = mysql_fetch_array($kdjkdj)){
$pi = $nomer%2;
if($pi==1){
$warna='bgcolor="#99CC66"';
}else{
$warna='bgcolor="#ffffff"';
} 
?>
<tr <? echo $warna; ?> onClick="location.href='d_vx.php?id=<? echo $id; ?>&IdDetil=<? echo $mm[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo strtoupper($mm[Alasan]); ?></div></td>
<td><div align="left"><? echo strtoupper($mm[Opr]); ?></div></td>
<td><div align="left"><? echo $mm[TglJam]; ?></div></td>
</tr>
<?
$nomer++; } ?><tr>
  <td colspan="4" bgcolor="#D4D0C8">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>