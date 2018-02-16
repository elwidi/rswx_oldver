<?php 
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head>
<?
 include "ceka_22.php";
include "ceka_32.php";
include "ceka_42.php";
?>
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
<form action="aops.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="443" colspan="3"><div align="left" class="style1">
TAMBAH DATA LOKASI
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="84">Propinsi</td>
<td width="8">:</td>
<td width="322"><div align="left">
<select name="Pro" class="style2" <? if($IdKel>0 && $IdKot>0 && $IdKec>0){ }else{ ?> disabled="disabled"<? } ?>>
<option value="0">--Propinsi--</option>
<?
$jakaja= mysql_query("SELECT id FROM prop ORDER BY NamaProp");
while($nn = mysql_fetch_array($jakaja)){
?>
<option value="<? echo $nn[id]; ?>"><?
$kkjkdd  = mysql_query("SELECT NamaProp FROM prop WHERE id='$nn[id]'");
$bv = mysql_fetch_array($kkjkdd);
echo $bv[NamaProp];
?></option>
<? } ?>
</select>
</div></td>
</tr>
<tr>
<td width="84">Kota</td>
<td width="8">:</td>
<td width="322"><div align="left">
<?
if($IdKot>0){
$dkjfkdjfkdjfk = mysql_query("SELECT NamaKot FROM kot WHERE id='$IdKot'");
$nb = mysql_fetch_array($dkjfkdjfkdjfk);
echo $nb[NamaKot];
?>
<input type="hidden" name="NamaKot" value="<? echo $nb[NamaKot]; ?>">
<?
}else{
?><input name="text" type="text" class="style2" id="suggest3" autofocus="autofocus"  />
<? } ?>
|| <a href="#" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  
    onClick="wCompare_x098120 = window.open('c3ws3.php', 
  'wCompare_x098120', 'width=600,height=290,left=70,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_x098120.focus();">Detail</a></div></td>
</tr>
<tr>
<td width="84">Kecamatan</td>
<td width="8">:</td>
<td width="322"><div align="left"><?
if($IdKec>0){
$dkjfkdjfkdjfk2 = mysql_query("SELECT NamaKec FROM kecamatan WHERE id='$IdKec'");
$nb2 = mysql_fetch_array($dkjfkdjfkdjfk2);
echo $nb2[NamaKec];
?>
<input type="hidden" name="NamaKec" value="<? echo $nb2[NamaKec]; ?>">
<?
}else{ ?>
<input name="text" type="text" class="style2" id="suggest4" />
<? } ?> ||  <a href="#" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  
    onClick="wCompare_x098120 = window.open('c3ws2.php', 
  'wCompare_x098120', 'width=600,height=290,left=70,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_x098120.focus();">Detail</a>
</div></td>
</tr>
<tr>
  <td>Kelurahan</td>
  <td>:</td>
  <td><?
if($IdKel>0){
$dkjfkdjfkdjfk3 = mysql_query("SELECT NamaKel FROM kelurahan WHERE id='$IdKel'");
$nb3 = mysql_fetch_array($dkjfkdjfkdjfk3);
echo $nb3[NamaKel];
?>
<input type="hidden" name="NamaKel" value="<? echo $nb3[NamaKel]; ?>">
<?
}else{ ?>
<input name="text" type="text" class="style2" id="suggest2" />
<? } ?> || <a href="#" style="text-decoration:none"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  
    onClick="wCompare_x098120 = window.open('c3ws.php', 
  'wCompare_x098120', 'width=600,height=290,left=70,Top=100,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_x098120.focus();">Detail</a> </td>
</tr>
<tr>
  <td>Kode Pos </td>
  <td>:</td>
  <td><input type="text" name="KodePos" maxlength="100" size="30"></td>
</tr>
<tr>
  <td>Rt</td>
  <td>:</td>
  <td><input type="text" name="Rt" maxlength="50" size="30"></td>
</tr>
<tr>
  <td>Rw</td>
  <td>:</td>
  <td><input type="text" name="Rw" maxlength="50" size="30"></td>
</tr>
<tr>
  <td>Jalan</td>
  <td>:</td>
  <td><input type="text" name="Jalan" maxlength="200" size="30"></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="fgfgf">
 <?
 if($IdKel>0 || $IdKec>0 || $IdKot>0){
 ?> <input type="button" name="fgfgf" value="Reset Form" onClick="location.href='x2qaa.php';">
 <? } ?>
  <input type="button" name="ccgfgfgf" value="Selesai" onClick="window.close()">
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