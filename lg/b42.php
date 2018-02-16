<?php 
session_start();
include "../konek.php";
include "../ceke.php";
header('Refresh: 2');
 $sdksjksjdsk = mysql_query("SELECT * FROM bagian WHERE id='$id'");
$uy = mysql_fetch_array($sdksjksjdsk);
//
$kdjfkdjfkd = mysql_query("SELECT * FROM dataobat WHERE id='$IdObat'");
$nb = mysql_fetch_array($kdjfkdjfkd);
if(!$nb[id]){
echo "DATA OBAT TIDAK DIKENAL,....<br>";
}elseif(!$uy[id]){
echo "DATA BAGIAN TIDAK DIKENAL";
}else{
?>
<html>
<head><style type="text/css">
<!--
 .style3 {font-size: 15px; font-family: Arial, Helvetica, sans-serif; }
 .style2 {font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
  
-->
</style></head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr class="style3">
<td width="437" colspan="3"><div align="left"><strong>
   LIST DATA HISTORY<br />
   <font color="#990000">
  <?
echo strtoupper($uy[NamaBagian]); 
?>
   </font><br>
OBAT : <? echo $nb[NamaObat]; ?></font></strong></div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<TR>
<TD width="414" colspan="2" valign="top">
<div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style2">
<TR>
<TD width="83">STOK AWAL </TD>
<TD width="8">:</TD>
<TD width="142"><div align="left">
<?
$KeyID="$id-$IdObat";
  $kksjsksd_23232322223 = mysql_query("SELECT Pengali  FROM stok_opm WHERE KeyID='$KeyID'");
$hh = mysql_fetch_array($kksjsksd_23232322223);
echo "$hh[Pengali]";
?>
</div></TD>
</TR>
</table>
</div>
</TD>
</TR>
 <tr>
<td colspan="2" valign="top">
<div align="left">
<table width="432" class="style2" border="1">
<tr>
<td width="19">NO</td>
<td width="106">TGL</td>
<td width="64">MASUK</td>
<td width="123"><div align="center">KELUAR</div></td>
<td width="86">AKHIR</td>
</tr>
<?
 //$u7767sds_oi9d89fdfkdkfkdmfdmfkdmfkd  = mysql_query("SELECT * FROM oder_1detil WHERE IdObat='$IdObat' AND IdUnit='$id' AND Stat=2");
 $awal=1;
 while($awal<32){?>
<tr>
<td><div align="center"><? 
echo $awal; 
?></div></td><td><div align="left"><?
echo "$awal ";
$bln=date("m")-0;
$thn1=date("Y");
include "../bulan2.php";
?></div></td>
<TD><div align="center"><?
 $u7767sds_oi9d89fdfkdkfkdmfdmfkdmfkd  = mysql_query("SELECT SUM(Qty) as jj FROM oder_1detil WHERE IdObat='$IdObat' AND IdUnit='$id' AND Stat=2
AND Tgl='$awal' AND Bln='$bln'");
$ua = mysql_fetch_array($u7767sds_oi9d89fdfkdkfkdmfdmfkdmfkd);
if($ua[jj]>0){
echo number_format($ua[jj]);
}else{
echo "-";
} ?></div></TD>
<td><div align="center"><?
$kdfdfd_dlmfldfd = mysql_query("SELECT SUM(Qty) AS hh FROM jualobat WHERE KodeObat='$IdObat' AND Tgl='$awal' AND Bln='$bln' AND  IdDepo='$id'");
$nv = mysql_fetch_array($kdfdfd_dlmfldfd);
if($nv[hh]>0){
echo $nv[hh];
}else{
echo "-";
}?></div></td>
<td><div align="right"><?
$sisa = $ua[jj]-$nv[hh];
if($sisa>0){
echo number_format($sisa); 
}else{
?><font color="#990000">-</font><?
} ?></div></td>
</tr>
<? $awal++; } ?>
 </table>
</div>
</td>
</tr>
 
</table>
</div></td>
</tr>
</table>
</div>
</body>
 </html>
<?
}?>