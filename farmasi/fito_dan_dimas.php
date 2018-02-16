<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
if(!$bln){
$bln=date("m");
$thn1=date("Y");
}else{
$bln=$bln;
$thn1=$thn1;
}
$ikiki_sdsds = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
$ii = mysql_fetch_array($ikiki_sdsds);
if(!$ii[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11  || $a[Level]==3  || $a[Level]==12){
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
.style12 {
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
<td width="1009" colspan="3"><div align="left" class="style1">
HISTORY DATA<br><?  echo strtoupper($ii[NamaObat]); ?>
</div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table width="921" border="1" class="style12">
<tr>
<td width="18">NO</td>
<td width="110">TGL</td>
<td width="64"><div align="center">NO RM</div></td>
<td width="159">NAMA PASIEN</td>
<td width="206">DOKTER</td>
<td width="154">POLI</td>
<td width="51">MSK</td>
<td width="48"><div align="center">KELUAR</div></td>
<td width="53"><div align="center">TOTAL</div></td>
</tr>
<?
$tgl=1; $nomer=1;
while($tgl<=31){
//
$kiksik_s = mysql_query("SELECT * FROM jualobat where Tgl='$tgl' AND Bln=$bln AND Thn=$thn1");
while($aa = mysql_fetch_array($kiksik_s)){
//
?>
<tr>
<td><div align="center"><? echo $nomer;?></div></td>
<td><div align="left"><? 
echo "$tgl ";
include "../bulan.php"; ?></div></td>
<td><div align="center"><? echo $aa[NoPasien]; ?></div></td>
<td><div align="left"><? echo strtoupper($aa[NamaPasien]); ?></div></td>
<td><div align="left"><? echo $aa[NamaDokter]; ?></div></td>
<td><div align="left"><?
$kijs= mysql_query("SELECT NamaBagian FROM bagian WHERE id='$aa[IdDepo]'");
$bb = mysql_fetch_array($kijs);
echo strtoupper($bb[NamaBagian]); 
?></div></td>
<td><div align="center"></div></td>
<td><div align="center"><? echo number_format($aa[Qty]);
$tot_1 = $tot_1 + $aa[Qty];
 ?></div></td>
<td><div align="center"><? echo number_format($aa[JmlHargaBeli]); ?></div></td>

<?  
$nomer++; ?>
</tr><? 
  }  
  $kiksik_s2 = mysql_query("SELECT * FROM PoDetil77 where Tgl='$tgl' AND Bln=$bln AND Thn=$thn1");
while($aa2 = mysql_fetch_array($kiksik_s2)){
//
$df98di = mysql_query("SELECT * FROM polog77 WHERE id ='$aa2[IdPo77]'");
$mk = mysql_fetch_array($df98di);
 ?>
<tr>
<td><div align="center"><? echo $nomer;?></div></td>
<td><div align="left"><? 
echo "$tgl ";
include "../bulan.php"; ?></div></td>
<td colspan="2"><div align="center"><? echo $mk[NoPo]; 
 ?></div></td>
  <td colspan="2"><div align="left"><?
 echo strtoupper($mk[NamaSupplier]); 
?></div></td>
<td><div align="center"><? echo number_format($aa2[Qty]); 
$tot_2 = $tot_2 + $aa2[Qty];
?></div></td>
<td><div align="center"></div></td>
<td><div align="center"><? echo number_format($aa2[Total]); ?></div></td>
<? $tot_1 = $tot_1 + $aa2[Total];?>

<?  
$nomer++; ?>
</tr>

<? 
  } ?>
<?
$tgl++; } ?><tr>
  <td colspan="6"><div align="center">TOTAL</div></td>
  <td><div align="center"><? echo $tot_1; ?></div></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
</table>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<? 
}
?>