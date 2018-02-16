<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
if(!$kp[id]){
echo "RECORD SET DATA TIDAK LENGKAP";
}else{
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
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="592" colspan="3"><div align="left" class="style1">
LIST KOMPONEN
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="23" bgcolor="#003399"><span class="style3">NO</span></td>
<td width="174" bgcolor="#003399"  ><span class="style3">NAMA BIAYA</span></td>
<td width="53" bgcolor="#003399"><div align="center" class="style3">REC</div></td>
<td colspan="2" bgcolor="#003399"><span class="style3">KOMPONEN</span></td>
</tr>
<?
$noma =1; $nee=1;
$kdkdkdk = mysql_query("SELECT * FROM txnjalan2 WHERE RegId='$kp[RegId]'");
while($cc = mysql_fetch_array($kdkdkdk)){
//
 $no=1;
$jkkj = mysql_query("SELECT * FROM anak_labe WHERE IdBiaya='$cc[IdBiaya]'");
while($ya = mysql_fetch_array($jkkj)){
//
$pa = $nee%2;
if($pa==1){
$warna='';
}else{
$warna=' bgcolor="#DCFECB"';
}
?>
<tr <? echo $warna; ?>>
<td><?
if($no==1){
echo $noma;
}else{
echo ".";
}  ?></td><td><div align="left"><?
if($no==1){
 echo $cc[NamaBiaya];
 }else{
 echo ".";
 }  ?></div></td>
 <td><div  align="center"><? echo "#$ya[id]"; ?></div></td>
 <td width="288"><div align="left"><?
 echo $ya[Param]; 
 ?></div></td>
 <td width="20"><div align="center">
 <?
 $yahe = mysql_query("SELECT id FROM teks_lab WHERE Stak='$ya[id].$fito'");
$gh = mysql_fetch_array($yahe);
 ?>
 <input type="checkbox" name="Ambil" <? if($gh[id]){ ?> checked="checked"<? } ?>  value="1" onClick="location.href='bass.php?Kunci=<? echo "$ya[id].$fito";  ?>&bele=<? echo $ya[id]; ?>&fas=<? echo $fas; ?>&fito=<? echo $fito; ?>';" > 
 </div></td>
</tr>
<? $no++; $nee++;   } ?>
<? $noma++; } ?>
</table>
</div>
</td>
</tr>
</table>
</body>
</html>
<?
}
?>