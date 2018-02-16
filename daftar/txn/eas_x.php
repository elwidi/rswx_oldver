<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$IdDetil=$_GET["IdDetil"];
if($a[Level]==9){
$jhjdhkdfd = mysql_query("SELECT * FROM icd_ri2 WHERE id='$IdDetil'");
}else{
$jhjdhkdfd = mysql_query("SELECT * FROM icd_ri WHERE id='$IdDetil'");
}
 $ya = mysql_fetch_array($jhjdhkdfd);
if(!$ya[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head> <script language="JavaScript">
	
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
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
.style32 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<form action="ba_a.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="324" colspan="3" valign="top">
  <span class="style3">UPDATE ICD</span></td> 
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style32">
<tr>
<td width="80">Rm</td>
<td width="3">:</td>
<td width="225"><div align="left">
<?
echo ucfirst(strtolower($ya[NoPasien]));
?>
</div></td>
</tr><tr>
<td>Nama Pasien</td><td>:</td><td><div align="left">
<?
echo ucfirst(strtolower($ya[NamaPasien]));
?>
</div></td>
</tr>
<tr>
<td>Diagnosa</td><td>:</td><td><div align="left"><?
echo  ($ya[Diagnosa]);
?>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
</div></td>
</tr>
<tr>
<td>Urutan</td><td>:</td><td><div align="left"><input name="Urutan" type="text" class="style32" value="<? echo $ya[Urutan]; ?>" size="4" maxlength="4"></div></td>
</tr></table>
</div>
</td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="submit" value="Update" name="dfdfd">
<input type="button" name="fgfgf" value="Hapus" onClick="location.href='w87.php?id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>';">
<input type="button" name="fgfgf" value="Selesai" onClick="window.close()"></div></td>
</tr>
</table></form></body>
</html>
<? 
}?>