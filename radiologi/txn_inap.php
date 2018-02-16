<?php 
session_start();
include "../konek.php";
include "../ceke.php";
header('Refresh: 2');
$IdPasien = $_GET["IdPasien"];
$IdStruk = $_GET["IdStruk"];
$NoStruk = $_GET["NoStruk"];
$MstKey = $_GET["MstKey"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==16){
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
}
.style2 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style3 {font-size: 10px}
.style4 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 10px; }
.style5 {color: #FFFFFF}
.style11 {font-size: 9px}
.style13 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style14 {font-size: 12px}
.style15 {font-size: 9px; color: #FFFFFF; }
.style16 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #FFFFFF; }
-->
</style>
</head>
<body>
<div align="center">
<table border="0" cellpadding="1" cellspacing="1">
<tr bgcolor="#000099">
<td height="26" colspan="8">
<div align="center" class="style1 style5">LIST TRANSAKSI STRUK<br>
<? echo "MST KEY : $MstKey ( $IdStruk) "; ?></div></td>
</tr>
<tr>
<td colspan="8"><span class="style15">.
</span></td>
</tr>
<tr bgcolor="#000099">
<td width="18"><span class="style16">NO</span></td>
<td width="84"><span class="style16">NO STRUK</span></td>
<td width="96"><span class="style16">ID BIAYA</span></td>
<td width="206"><span class="style16">NAMA BIAYA</span></td>
<td width="83"><span class="style16">HARGA</span></td>
<td width="69"><div align="center" class="style5"><span class="style13">DISC</span></div></td>
<td width="81"><span class="style16">JML HARGA</span></td>
<td width="81"><span class="style16">USER</span></td>
</tr>
<?
$NoBuk = "MM-$IdStruk";
$nno=1;
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$ddat = mysql_query("SELECT * FROM txninap WHERE MstKey='$MstKey' AND NoBukti like '$NoBuk%'");
}else{
$ddat = mysql_query("SELECT * FROM txninap3 WHERE MstKey='$MstKey' AND NoBukti like '$NoBuk%'");  
}
while($za=mysql_fetch_array($ddat)){
?>
<tr bgcolor="#FFFFFF" class="style4"
  onClick="location.href='hartuti_bojo_sakuwan0.php?IdStruk=<? echo $IdStruk; ?>&MstKey=<? echo $MstKey;  ?>&id=<? echo $za[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center" class="style2 style3"><? echo $nno; ?></div></td>
<td><div align="left" class="style4"><? echo $za[NoBukti]; ?></div></td>
<td><div align="center" class="style4"><? echo $za[KodeBiaya]; ?></div></td>
<td><div align="left" class="style4"><? echo strtoupper($za[NamaBiaya]); ?></div></td>
<td><div align="right" class="style4"><? echo number_format($za[Harga]); ?></div></td>
<td><div align="center" class="style4"><? echo number_format($za[Disc]);  ?></div></td>
<td><div align="right" class="style4"><? echo number_format($za[JumlahHarga]);
$bus = $bus + $za[JumlahHarga]; ?></div></td>
<td><div align="left"><? echo strtoupper($za[Opr]);   ?></div></td>
</tr>
<? $nno++; }?>
<tr>
<td colspan="6"><div align="center"><span class="style13">TOTAL</span></div></td>
<td><div align="right" class="style2 style14"><? echo number_format($bus); ?></div></td>
</tr>
<tr>
<td colspan="8"><span class="style11">.
</span></td>
</tr>
<tr bgcolor="#000099">
<td colspan="8">&nbsp;</td>
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