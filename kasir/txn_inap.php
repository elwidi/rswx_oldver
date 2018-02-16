<?php
session_start();
include "../konek.php";
include "../ceke.php";
 $Id = $_GET["IdPasien"];
$IdStruk = $_GET["IdStruk"];
$NoStruk = $_GET["NoStruk"];
$MstKey = $_GET["MstKey"];
 if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 ||  $a[Level]==3||  $a[Level]==112 || $a[Level]==16){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffFFFF'
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 14px;
	font-weight: bold;
	color: #000000;
}
.style2 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style3 {font-size: 10px}
.style4 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 10px; }
.style5 {color: #FFFFFF}
.style11 {font-size: 9px}
.style13 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style14 {
	font-size: 12px;
	font-weight: bold;
	color: #000000;
}
.style15 {font-size: 9px; color: #FFFFFF; }
.style17 {color: #000000}
.style20 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #000000; font-weight: bold; }
.style21 {color: #000000; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="center">
<table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#000099">
<td height="26" colspan="8" bgcolor="#65BC5E">
<div align="center" class="style1 style5"><span class="style17">LIST TRANSAKSI STRUK</span><br>
<? echo "MST KEY : $MstKey ( $IdStruk) "; ?></div></td>
</tr>
<tr bgcolor="#000099">
<td width="18" bgcolor="#65BC5E"><span class="style20">NO</span></td>
<td width="84" bgcolor="#65BC5E"><span class="style20">NO STRUK</span></td>
 <td width="206" bgcolor="#65BC5E"><span class="style20">NAMA BIAYA</span></td>
<td width="83" bgcolor="#65BC5E"><div align="right"><span class="style20">HARGA</span></div></td>
 <td width="81" bgcolor="#65BC5E"><div align="right"><span class="style20">TOTAL</span></div></td>
<td width="81" bgcolor="#65BC5E"><span class="style20">USER</span></td>
</tr>
<?
$NoBuk = "MM-$IdStruk";
 $nno=1;
 if($a[Level]==16){
 $ddat = mysql_query("SELECT * FROM txninap3 WHERE MstKey='$MstKey' AND NoBukti='$NoBuk' AND KodeBagian='x'");  
 }else{
 $ddat = mysql_query("SELECT * FROM txninap3 WHERE MstKey='$MstKey' AND NoBukti='$NoBuk'  AND KodeBagian!='x'");  
 } while($za=mysql_fetch_array($ddat)){
?>
<tr bgcolor="#FFFFFF" class="style4"
  onClick="location.href='hartuti_bojo_sakuwan0.php?IdPasien=<? echo $IdPasien; ?>&IdStruk=<? echo $IdStruk; ?>&MstKey=<? echo $MstKey;  ?>&Id=<? echo $Id; ?>&IdBiaya=<? echo $za[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center" class="style2 style3"><? echo $nno; ?></div></td>
<td><div align="left" class="style4"><? echo $za[NoBukti];  ?></div></td>
 <td><div align="left" class="style4"><? echo ucfirst(strtolower($za[NamaBiaya])); ?></div></td>
<td><div align="right" class="style4"><? echo number_format($za[Harga]); ?></div></td>
 <td><div align="right" class="style4"><? echo number_format($za[Total]);
$bus = $bus + $za[Total]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($za[Opr]));   ?></div></td>
</tr>
<? $nno++; }?>
<tr>
<td colspan="4" bgcolor="#65BC5E"><div align="center" class="style17"><strong><span class="style13">TOTAL</span></strong></div></td>
<td bgcolor="#65BC5E"><div align="right" class="style2 style14"><? echo number_format($bus); ?></div></td>
</tr>
<tr>
<td colspan="8"><span class="style11">.
</span></td>
</tr>
 </table>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>