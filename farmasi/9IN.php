<?
session_start();
include "../konek.php";
include "../ceke.php";
 //header('Refresh: 2');
////
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
.style23 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<TR>
<td colspan="3"><div align="left" class="style1">
FROM LAP <?
if($mas=='hari'){
?>NARKOTIK  <? }else{ ?>PSIKOTROPIKA
<? } ?>
<br>
<a href="index.php" style="text-decoration:none">KEMBALI</a> || <A  style="text-decoration:none" href="9IN.php?mas=hari&dimas=sayang&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>" ">NARKOTIK</A> || 
<A style="text-decoration:none href="9IN.php?dimas=sayang&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>">PSIKOTROPIKA</A></div></td>
</TR>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style23">
<tr>
<td bgcolor="#D4D0C8"><strong>NO</strong></td>
<td bgcolor="#D4D0C8"><strong>KODE UL</strong></td>
<td bgcolor="#D4D0C8"><strong>NAMA UL</strong></td>
<td bgcolor="#D4D0C8"><strong>THN</strong></td>
<td bgcolor="#D4D0C8"><strong>BLN</strong></td>
<td bgcolor="#D4D0C8"><strong>KODE PRODUK</strong></td>
<td bgcolor="#D4D0C8"><strong>NAMA PRODUK</strong></td>
<td bgcolor="#D4D0C8"><strong>SATUAN</strong></td>
<td bgcolor="#D4D0C8"><strong>STOK AWAL</strong></td>
<td bgcolor="#D4D0C8"><strong>DR PBF</strong></td>
<td bgcolor="#D4D0C8"><strong>JML PEMASUKAN SARANA</strong></td>
<td bgcolor="#D4D0C8"><strong>JML PENGELUARAN SARANA</strong></td>
<td bgcolor="#D4D0C8"><strong>JML PEMUSNAHAN</strong></td>
<td bgcolor="#D4D0C8"><strong>NO &amp; TGL BAP</strong></td>
<td bgcolor="#D4D0C8"><strong>STOK AKHIR</strong></td>
</tr>
<?
$nomer=1;
if($mas=='hari'){
$jdkdkjdj = mysql_query("SELECT * FROM dataobat WHERE NamaGolongan like 'Nar%'");
}else{
$jdkdkjdj = mysql_query("SELECT * FROM dataobat WHERE NamaGolongan like 'Psi%'");
}
while($nn = mysql_fetch_array($jdkdkjdj)){
?>
<tr>
<td><div align="center"><?
echo $nomer; 
?></div></td>
<td><div align="left">
UL-9738
</div></td>
<td>RS YADIKAJATI MAKMUR</td> 
<td><div align="center"><? echo date("Y");?></div></td>
<td><div align="center"><? echo date("m"); ?></div></td>
<td><div align="left"><? echo $nn[KodeObat]; ?></div></td>
<td><div align="left"><? echo strtoupper($nn[NamaObat]); ?></div></td>
<td><div align="left"><? echo strtoupper($nn[Satuan]); ?></div></td>
<td><div align="center"><? echo $nn[StokAwal]; ?></div></td>
<td><div align="center"><?
$Bulan=date("m")-0;
$Tahun =date("Y");
$kkdjfkdf  = mysql_query("SELECT SUM(Qty) AS hh FROM PoDetil77 WHERE IdBarang='$nn[id]' AND Bln='$Bulan' AND Thn='$Tahun'");
$ik = mysql_fetch_array($kkdjfkdf);
echo number_format($ik[hh]);
?></div></td>
<td><div align="center"><? ?></div></td>
<td><div align="center"><?
$siksisks = mysql_query("SELECT SUM(Qty) AS jj FROM jualobat WHERE Bln='$Bulan' AND Thn='$Tahun' AND KodeObat='$nn[id]'");
$ya = mysql_fetch_array($siksisks);
echo number_format($ya[jj]);
 ?></div></td>
 <td><div align="center"></div></td>
  <td><div align="center"></div></td>
   <td><div align="center"><?
   $c=$nn;
   include "huting.php";
   ?></div></td>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>