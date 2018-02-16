<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$anak  = $_GET["anak"];
 $ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
if(!$ii[id]){
header("Location:./index.php");
}elseif($a[Level]==16){
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
.style3 {
	color: #FFFFFF;
	font-weight: bold;
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
	//-->
	</script>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="456" colspan="3"><div align="left" class="style1">
LIST DATA TARIF RADIOLOGI<br />
KEY SORT : <? echo $NamaBiaya; ?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="442" border="1" class="style2">
<tr>
<td width="24" bgcolor="#333333"><span class="style3">NO</span></td>
<td width="44" bgcolor="#333333"><span class="style3">REC</span></td>
<td width="44" bgcolor="#333333"><span class="style3">KODE</span></td>
<td width="269" bgcolor="#333333"><span class="style3">NAMA BIAYA</span></td>
<td width="77" bgcolor="#333333"><div align="right" class="style3">HARGA</div></td> 
</tr> 
<?
$nomer =1;
 $ksik= mysql_query("SELECT * FROM  tarif WHERE   NamaBiaya LIKE '%$NamaBiaya%' LIMIT 0,120");
while($xx = mysql_fetch_array($ksik)){
$vare = 100;
 ?>
<tR  onClick="location.href='d_Df.php?id=<? echo $id; ?>&IdBiaya=<? echo $xx[id]; ?>';"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
 <td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $xx[id];?></div></td> 
<td><div align="left"><? echo $xx[KodeBiaya];?></div></td> 
<td><div align="left"><? echo strtoupper($xx[NamaBiaya]); ?></div></td>
<td><div align="right"><? echo number_format($xx[Tiga]); ?></div></td>
</tR>
<?
$nomer++; } ?>
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