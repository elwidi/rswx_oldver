<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";  
 
?>
<html>
<head></head>
<body bgcolor="#990000">
 <em><strong><font color="#FFFFFF" size="5" face="Arial, Helvetica, sans-serif">
 <?
   $iiiiid = mysql_query("SELECT id,Min,NamaObat,StokAwal FROM dataobat WHERE id='$IdObat'");
$c= mysql_fetch_array($iiiiid);
//
?>
 SEKEDAR INFO STOK <? echo strtoupper($c[NamaObat]); ?><br> 
 SUDAH DALAM BATAS MINIM<bR>
MIN: <? echo "$c[Min]"; ?> 
<br>
REAL STOK : 
<? 
include "huting.php";
 ?>
 </font></strong></em>
</body>
</html>