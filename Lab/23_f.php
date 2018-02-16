<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$dataa = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$z = mysql_fetch_array($dataa);
//
	$ndsa = "$z[id].$z[RegId]";
	$djkdjkdfd = mysql_query("SELECT id,NoUrut FROM urutanlab WHERE RegId='$ndsa'");
	$bf = mysql_fetch_array($djkdjkdfd);
	//
	if(!$bf[id]){
	header("Location:../keluar2.php");
 }elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="center">
<form action="ggg.php">
<table border="1">
<tr>
<td  colspan="3"><div align="center">
PEMBATALAN NOMER URUT<br />
<?
echo $z[RegId];
?>
</div></td>
</tr>
<tr>
<td colspan="3"><span class="style1">.</span></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="98">NO URUT</td>
<td width="8">:</td>
<td width="94"><div align="left">
<?
echo "$bf[NoUrut]";
?>
</div></td>
</tr>
<tr valign="top">
  <td>ALASAN </td>
  <td>:</td>
  <td><div align="left">
  <textarea rows="2" cols="30" name="Alasan"></textarea>
  <input type="hidden" name="id" value="<? echo $id; ?>">
  </div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3"><div align="center">
<input type="submit" value="Batalkan" onClick="location.href='';">
<input type="button" name="Ss" value="Selesai" onClick="window.close()">
</div></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
}else{

}
?>