<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjdkldklfdfd  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($kjdkldklfdfd);
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
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
	font-size: 14px;
	font-weight: bold;
}
.style22 {
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
<td width="425" colspan="3"><div align="left" class="style1">
RETUR PENGELUARAN OBAT<br /><?
echo "$ii[RegId]";
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style22">
<tr>
<td width="24" bgcolor="#D4D0C8"><div align="center"><strong>NO</strong></div></td>
<td width="133" bgcolor="#D4D0C8"><strong>RESEP</strong></td>
 
</tr>
<?
$nomer=1;
$ldkfldkfldkfd = mysql_query("SELECT * FROM rj_resep WHERE IdPasien='$id'");
while($vv = mysql_fetch_array($ldkfldkfldkfd)){
$ldkfdldl = mysql_query("SELECT COUNT(id) AS hh FROM returobatjalan WHERE IdResep='$vv[id]'");
$bc = mysql_fetch_array($ldkfdldl);
if($bc[hh]>0){
$warna='bgcolor="#FFCCCC"';
}else{
$warna='';
}
?>
<tr valign="top"  <? echo $warna; ?> onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='d_Dfd.php?id=<? echo $id; ?>&IdResep=<? echo $vv[id]; ?>';">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $vv[NoResep]; ?></div></td>
 
</tr>
<?
$nomer++; }?><tr>
  <td colspan="2" bgcolor="#D4D0C8">&nbsp;</td>
 </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? } ?>