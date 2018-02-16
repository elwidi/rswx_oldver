<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
 $jhsjdskdad  = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
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
	font-size: 16px;
	font-weight: bold;
	font-style: italic;
}
.style22 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
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
<table border="1" class="style22">
<tr>
<td width="493" colspan="3"><div align="left" class="style1">
LIST DATA DOKTER
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="498" border="0" cellpadding="2" cellspacing="2" class="style22">
<tr>
<td width="29" bgcolor="#000000"><div align="center" class="style2">NO</div></td>
<td width="210" bgcolor="#000000"><span class="style2">NAMA DOKTER</span></td>
<td width="222" bgcolor="#000000"><span class="style2">SPC</span></td>
</tr>
<?
$nomer=1;
$kdjfkdf  = mysql_query("SELECT * FROM dokter WHERE NamaDokter LIKE '$NamaDokter%'");
while($xx = mysql_fetch_array($kdjfkdf)){
$pcd = $nomer%2;
if($pcd==1){
$warna='';
}else{
$warna='bgcolor="#CCFF66"';
}
?>
<tr <? echo $warna; ?>  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"
 onClick="location.href='d9m.php?id=<? echo $id; ?>&IdDokter=<? echo $xx[id]; ?>';">
<td><div align="center"><? echo $nomer; ?></div></td>
<tD><div align="left"><? echo $xx[NamaDokter]; ?></div></tD>
<td><div align="left"><? echo $xx[NamaSpc]; ?></div></td>
</tr>
<?
$nomer++; }?><tr>
  <td colspan="3" bgcolor="#000000">&nbsp;</td>
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