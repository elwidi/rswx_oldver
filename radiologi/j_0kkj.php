<?
session_start();
include "../konek.php";
include "../ceke.php";
if($dimasx=='doa'){
header("Location:../Farmasi/XW_9.php?fito=doa&tgl1=$tgl1&bln1=$bln1&tgl2=$tgl2&thn1=$thn1");
}elseif($dimasx=='sayang'){
header("Location:../Farmasi/semoga_ela_cepet_sembuh.php?hari=taqwa&tgl1=$tgl1&bln1=$bln1&tgl2=$tgl2&thn1=$thn1");
}elseif($dimasx=='pinter'){
header("Location:../keuangan/x2a.php?fito=doa&tgl1=$tgl1&bln1=$bln1&tgl2=$tgl2&thn1=$thn1");
}elseif($dimas=='bagus'){
header("Location:../Lab/abis_sholat_maghrib.php?hari=doa_baik&bln=$bln1&thn1=$thn1");
}elseif($a[Level]==12){
//header("Location:../Lab/a8.php?tgl1=$tgl1&bln1=$bln1&tgl2=$tgl2&thn1=$thn1");
header("Location:../Lab/index.php?hari=doa_baik&tgl1=$tgl1&bln1=$bln1&tgl2=$tgl2&thn1=$thn1");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
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
<td width="986" colspan="3"><div align="left" class="style1">
LAPORAN KUNJUNGAN RADIOLOGI<br>
PERIODE : 
<?
echo "$tgl1 sd $tgl2 ";
$bln=$bln1;
include "../bulan.php";
 ?>
</div></td>
</tr>
<tr>
  <td colspan="3">
  <A href="index.php" style="text-decoration:none">KEMBALI</A> || 
  <a href="a2n.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>" style="text-decoration:none">PER KELAS</a> || 
  <a href="#" style="text-decoration:none">GLOBAL</a> </td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="1" cellpadding="1" cellspacing="1" class="style2">
  <tr>
  <td width="18" rowspan="2" bgcolor="#999999"><strong>NO</strong></td><td width="23" rowspan="2" bgcolor="#999999"><strong>TGL</strong></td><td width="78" rowspan="2" bgcolor="#999999"><strong>NAMA PASIEN</strong></td><td width="161" rowspan="2" bgcolor="#999999"><strong>JENIS PEMERIKSAAN</strong></td>
  <td colspan="4" bgcolor="#999999"><div align="center"><strong>ASAL PASIEN </strong></div></td>
  <td colspan="4" bgcolor="#999999"><div align="center"><strong>HARGA</strong></div></td><td width="63" rowspan="2" bgcolor="#999999"><div align="center"><strong>TOT</strong></div></td><td width="64" rowspan="2" bgcolor="#999999"><div align="center"><strong>PDPT</strong></div></td>
  </tr>
  <tr>
    <td width="48" bgcolor="#999999"><div align="left"><strong>RJ</strong></div></td>
    <td width="49" bgcolor="#999999"><div align="left"><strong>RI</strong></div></td>
    <td width="59" bgcolor="#999999"><div align="left"><strong>LUAR</strong></div></td>
    <td width="59" bgcolor="#999999"><div align="right"><strong>MCU</strong></div></td>
    <td width="62" bgcolor="#999999"><div align="right"><strong>RJ</strong></div></td>
    <td width="73" bgcolor="#999999"><div align="right"><strong>RI</strong></div></td>
    <td width="77" bgcolor="#999999"><div align="right"><strong>LUAR</strong></div></td>
    <td width="61" bgcolor="#999999"><div align="right"><strong>MCU</strong></div></td>
    </tr>
	<?
	$nomer=1;
	while($tgl1<=$tgl2){ 
	$rawat_jalan = mysql_query("SELECT * FROM txnjalan WHERE TglMasuk=$tgl1 AND BlnMasuk=$bln1 AND ThnMasuk=$thn1");
	while($xs = mysql_fetch_array($rawat_jalan)){
	if($Tg!=$tgl1 && $Tg!=''){
	?>
	<tr>
	<td colspan="8" bgcolor="#CCFF99"><div align="center"><strong>TOTAL</strong></div></td>
	<TD bgcolor="#CCFF99"><div align="right"><strong>
	  <?
	echo number_format($toto); 
 	?>
	</strong></div></TD>
	<TD bgcolor="#CCFF99"><div align="right"><strong>
	  <?
	echo number_format($toto2z); 
	?>
	</strong></div></TD>
	<TD bgcolor="#CCFF99"><div align="right"><strong>
	  <?
	echo number_format($totoP); 
	?>
	</strong></div></TD>
	<td bgcolor="#CCFF99"><div align="right"></div></td>
	<td bgcolor="#CCFF99"><div align="right"></div></td>
		<td bgcolor="#CCFF99"><div align="right"><?
		$Gt_1 = $toto + $toto2z + $totoP;
		echo number_format($Gt_1);
	$toto =0;
	$toto2z =0;
	$totoP =0;
	?></div></td>
</tr>
	<?
	}?>
  <tr>
    <td><div align="center"><? echo $nomer; ?></div></td>
    <td><div align="center"><? echo "$tgl1-$bln1-$thn1"; ?></div></td>
    <td><div align="left"><? echo $xs[NamaPasien]; ?></td>
    <td><div align="left"><? echo $xs[NamaBiaya]; ?></div></td>
    <td><div align="left"><?
 if($xs[KodeBagian]!='XX'){
$Bagian = $xs[Bagian];
}else{
$Bagian = "";
$Bagian2 = $xs[Bagian];
 }
echo $Bagian; 
 	?>  </div></td>
    <td>&nbsp;</td>
    <td><div align="left"><?
	echo $Bagian2;  
	?></div></td>
    <td>&nbsp;</td>
    <td><div align="right"><? 
	 if($xs[KodeBagian]!='XX'){
echo number_format($xs[Harga]); 
	$toto = $toto + $xs[Harga]; 
	$toto2 = $toto2 + $xs[Harga];
	}else{
	}  ?></div></td>
    <td><div align="right"></div></td>
    <td><div align="right"><?
		 if($xs[KodeBagian]=='XX'){
echo number_format($xs[Harga]); 
	$totoP = $totoP + $xs[Harga]; 
	$toto2P = $toto2P + $xs[Harga];
}
?></div></td>
    <td><div align="right"></div></td>
    <td><div align="right"></div></td>
    <td><div align="right"></div></td>
  </tr>
  <?
  $Tg=$tgl1;
$nomer++;  } 
///////////////////////////////////////////////////////

	$nomer=$nomer;
	$rawat_inap = mysql_query("SELECT * FROM txninap3 WHERE Tgl=$tgl1 AND Bln=$bln1 AND Thn=$thn1");
	while($xs2 = mysql_fetch_array($rawat_inap)){
	 ?>
  <tr valign="top">
    <td><div align="center"><? echo $nomer; ?></div></td>
    <td><div align="center"><? echo "$tgl1-$bln1-$thn1"; ?></div></td>
    <td><div align="left"><? echo $xs2[NamaPasien]; ?></div></td>
    <td><div align="left"><? echo $xs2[NamaBiaya]; ?></div></td>
    <td><div align="left">Rinap</div></td>
    <td><div align="left"><?
	echo "Kelas $xs2[Kelas]"; 
	?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="right"></div></td>
    <td><div align="right"><? echo number_format($xs2[Harga]); 
	$toto2z = $toto2z + $xs2[Harga]; 
	$toto2x = $toto2x + $xs2[Harga]; ?></div></td>
    <td><div align="right"></div></td>
    <td><div align="right"></div></td>
    <td><div align="right"></div></td>
    <td><div align="right"></div></td>
  </tr>
  <?
  $Tg2=$tgl1;
$nomer++;  } 

 
  $tgl1++;
  
   } ?><tr>
	<td colspan="8" bgcolor="#CCFF99"><div align="center"><strong>TOTAL</strong></div></td>
	<TD bgcolor="#CCFF99"><div align="right"><strong>
	  <?
	echo number_format($toto); 
 	?>
	</strong></div></TD>
	<TD bgcolor="#CCFF99"><div align="right"><strong>
	  <?
	echo number_format($toto2z); 
 	?>
	</strong></div></TD>
	<TD bgcolor="#CCFF99"><div align="right"><strong>
	  <?
	echo number_format($totoP); 
 	?>
	</strong></div></TD><td bgcolor="#CCFF99"><div align="right"></div></td>
	<td bgcolor="#CCFF99"><div align="right"></div></td>
		<td bgcolor="#CCFF99"><div align="right"><?
		$Gt_1 = $toto + $toto2z + $totoP;
		echo number_format($Gt_1);
	$toto =0;
	$toto2z =0;
	$totoP =0;
	?></div></td>
	</tr>
 <tr>
	<td colspan="8" bgcolor="#999999"><div align="center"><strong>GT</strong></div></td>
	<TD bgcolor="#999999"><div align="right"><strong>
	  <?
	echo number_format($toto2); 
 	?>
	</strong></div></TD>
	<TD bgcolor="#999999"><div align="right"><strong>
	  <?
	echo number_format($toto2x); 
 	?>
	</strong></div></TD><TD bgcolor="#999999"><div align="right"><strong>
	  <?
	echo number_format($toto2P); 
 	?>
	</strong></div></TD>
	<td bgcolor="#999999"><div align="right"><?
	
	?></div></td>
	<td bgcolor="#999999"><div align="right"><?
	
	?></div></td>
	<td bgcolor="#999999"><div align="right"><?
	$gto = $toto2+$toto2x+$toto2P;
	echo number_format($gto); 
	?></div></td>
	</tr>
  </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<? } ?>