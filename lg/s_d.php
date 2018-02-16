<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if(!$Bln){
$Bln=date("m")-0;
$Thn=date("Y");
}else{
$Bln=$Bln;
$Thn=$Thn;
}
 ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CC99';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
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
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="608" colspan="3"><div align="left">
<span class="style1">LAPORAN MUTASI DATA OBAT</span><br>
<?
$bln=$Bln; $thn1=$Thn;
include "../bulan.php";
 ?><br>
<span class="style2"><a  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  href="index.php" style="text-decoration:none">KEMBALI</a> || 
 ||</span> <span class="style2">
 <a  href="#" style="text-decoration:none"  onClick="wCompare4f3w12 = window.open('c2a0.php', 
  'wCompare4f3w12', 'width=400,height=140,left=170,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f3w12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">CEK PERIODE</a></span> </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="435" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="29" bgcolor="#ECE9D8"><strong>NO</strong></td>
 <td width="191" bgcolor="#ECE9D8"><strong>UNIT</strong></td>
<td width="83" bgcolor="#ECE9D8" ><div align="right"><strong>TOTALBELI</strong></div></td>
<td    bgcolor="#ECE9D8" ><div align="right"><strong>TOTALJUAL</strong></div></td>
</tr>
  
<?
$nomer=1;
$kdjfkdjfkd_jhjhj = mysql_query("SELECT * FROM bagian WHERE NamaBagian !='' AND NamaBagian LIKE 'POLI%' ORDER BY NamaBagian");
while($rt = mysql_fetch_array($kdjfkdjfkd_jhjhj)){
//
$UJDUH= mysql_query("SELECT  TotBeli,TotJual FROM oder_1detil WHERE IdUnit='$rt[id]' AND Bln=$Bln AND Thn=$Thn");
while($yh = mysql_fetch_array($UJDUH)){
$TotBeli = $TotBeli + $yh[TotBeli];
$TotJual = $TotJual + $yh[TotJual];
 }
//
?>
<tr  onClick="wCompare4f4d12 = window.open('s6a.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $rt[id]; ?>', 
  'wCompare4f4d12', 'width=780,height=500,left=270,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f4d12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $rt[NamaBagian]; ?></div></td>
<td><div align="right"><?
echo number_format($TotBeli);
$beli = $beli+$TotBeli;
 ?></div></td>
<td><div align="right"><?
echo number_format($TotJual);
$jual  = $jual+$TotJual;
 $TotJual=0; $TotBeli=0;
 ?></div></td>
</tr>

<?
$nomer++; } ?>
<tr>
  <td colspan="2" bgcolor="#ECE9D8"><div align="center"><strong>TOTAL</strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong>
    <?
  echo number_format($beli); 
  ?>
  </strong></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><strong>
    <?
  echo number_format($jual); 
  ?>
  </strong></div></td>
</tr></table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>