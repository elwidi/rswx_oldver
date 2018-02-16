<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$KodeICD = $_GET["KodeICD"];
$NamaICD = $_GET["NamaICD"];
$jhsjdskdad  = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
if(!$uu[id]){
header("Location:../keluar2.php");
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
</style> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00FFFF';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<div align="left">
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="862" colspan="3"><div align="left" class="style1">
LIST DATA ICD
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="824" height="68" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="20" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="78" bgcolor="#D4D0C8"><strong>KODE</strong></td>
<td width="320" bgcolor="#D4D0C8"><strong>DIAGNOSA</strong></td> 
<td width="380" bgcolor="#D4D0C8"><strong>TERJEMAHAN</strong></td> 
</tr>
<?
$nomer = 1;
if($KodeICD!=''){
$jhdjsjs = mysql_query("SELECT * FROM icdx WHERE  ICD_CODE='$KodeICD'");
}elseif($NamaICD!=''){
$jhdjsjs = mysql_query("SELECT * FROM icdx WHERE   	TERJEMAHAN LIKE '$NamaICD%' LIMIT 0,50");
}
while($mm = mysql_fetch_array($jhdjsjs)){
$per  = $nomer%2;
if($per==1){
?>
<tr bgcolor="#FFFF99"  onClick="location.href='d_ff.php?id=<? echo $id; ?>&IdDetil=<? echo $mm[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" valign="top"><? 
}else{
?>
<tr   onClick="location.href='d_ff.php?id=<? echo $id; ?>&IdDetil=<? echo $mm[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" valign="top">
<? } ?>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $mm[ICD_CODE]; ?></div></td>
<td><div align="left"><? echo strtoupper($mm[DESCRIPTION]); ?></div></td>
<td><div align="left"><? echo strtoupper($mm[TERJEMAHAN]); ?></div></td>
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
