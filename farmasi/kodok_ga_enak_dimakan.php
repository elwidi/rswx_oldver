<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";  
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
header("Location:../keluar2.php");
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
.style4 {
	color: #990000;
	font-style: italic;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="571" colspan="3"><div align="left" class="style1">
Cek Data Obat Kembar<br />
Pasien : <? echo ucfirst(strtolower($ii[NamaPasien])); echo " ($ii[NoPasien]) "; ?><span class="style4"> .
</span></div></td> 
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="17" bgcolor="#0033CC"><span class="style3">No</span></td>
<td width="73" bgcolor="#0033CC"><span class="style3">Resep</span></td>
<td width="63" bgcolor="#0033CC"><div align="right" class="style3">Tgl</div></td>
<td width="201" bgcolor="#0033CC"><span class="style3">Nama Obat</span></td>
<td width="37" bgcolor="#0033CC"><div align="center" class="style3">Qty</div></td>
<td width="77" bgcolor="#0033CC"><div align="right" class="style3">Harga</div></td>
<td width="57" bgcolor="#0033CC"><div align="right" class="style3">Total</div></td>
<td width="57" bgcolor="#0033CC"><div align="right" class="style3">Petg</div></td>
</tr>
<?
$nomer=1;
$kjdkdfd_Dfdf  = mysql_query("SELECT * FROM jualobat2 where RegId='$ii[MstKey]' ORDER BY KodeObat");
while($vv = mysql_fetch_array($kjdkdfd_Dfdf)){
$no  = $nomer%2;
if($no==1){
$warna='';
}else{
$warna=' bgcolor="#D3F2FE"';
}
if($KodeObat==$vv[KodeObat]){
$class ='class="style4"';
}else{
$class ='';
}  
 ?>
<tr   <? echo $class; ?> valign="top" <? echo $warna; ?>>
<td><div align="center"><?
 echo $nomer; ?></div></td>
<td><div align="left"><? echo "$vv[JamTran]"; ?></div></td>
<td><div align="right"><? echo  "$vv[Tgl]-$vv[Bln]-$vv[Thn]"; ?></div></td> 
<td><div align="left"><? echo ucfirst(strtolower($vv[NamaObat])); ?></div></td>
<td><div align="center"><? echo number_format($vv[Qty]); ?></div></td>
<td><div align="right"><? echo number_format($vv[HargaBeli]); ?></div></td>
<td><div align="right"><? echo number_format($vv[JmlHargaBeli]);
 $tot = $tot + $vv[JmlHargaBeli]; 
 ?></div></td>
 <td><div align="left"><? echo ucfirst(strtolower($vv[Operator])); ?></div></td>
</tr>
 
<?
$nomer++; 
$KodeObat  = $vv[KodeObat];
  } ?>
<tr>
  <td colspan="6" bgcolor="#0033CC"><div align="center" class="style3">Total</div></td>
  <td bgcolor="#0033CC"><div align="right" class="style3"><? echo number_format($tot); ?></div></td>
</tr></table>
</div>
</td>
</tr>
</table>
</body>
</html>
<?
}
?>