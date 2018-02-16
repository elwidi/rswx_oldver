<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$RegId= $_GET["RegId"];
  $jkjpp = mysql_query("SELECT COUNT(id) AS jj FROM jual_ob_rl_tmp WHERE RegId='$RegId'");
 $h = mysql_fetch_array($jkjpp);
 if($h[jj]==0){
 header("Location:./dodol.php");
 }
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
?>
<html>
<head><title>KWITANSI / BUKTI TRANSAKSI APOTIK</title>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style12 {font-family: Arial, Helvetica, sans-serif; font-size: 12px;}
.style14 {color: #000000}
.style15 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; color: #000000; }
.style16 {
	color: #FFFFFF;
	font-weight: bold;
}
.style17 {color: #FFFFFF}
-->
</style>
</head>
<body alink="#FFFFFF" link="#FFFFFF" vlink="#FFFFFF">
<table border="0">
<tr bgcolor="#990000">
<td colspan="3"><div align="center" > <span class="style16">APA ANDA YAKIN DATA INI AKAN DIPROSES KE PENJUALAN </span><strong><br />
      <a href="prologi.php?RegId=<? echo $RegId; ?>">YA</a> / <a href="../3w.php">TIDAK</a> <em>.</em></strong></div></td>
</tr>
<tr class="style3">
<td>NO RESEP </td><td><div align="center"><strong>:</strong></div></td><td><div align="left" ><? echo $RegId; ?></div></td>
</tr>
<tr class="style12">
<td width="155"><span class="style3">NAMA PASIEN</span></td><td width="3"><div align="center"><strong><span class="style12">:</span></strong></div></td>
<td width="382"><div align="left" class="style3"><? echo strtoupper($NamaPasien); ?></div></td>
</tr>
<tr class="style12">
<td width="155"><span class="style3">SATUS</span></td><td width="3"><div align="center"><strong><span class="style12">:</span></strong></div></td>
<td width="382"><div align="left" class="style3">0</div></td>
</tr>
<tr class="style12">
<td width="155"><span class="style3">JENIS TXN</span></td><td width="3"><div align="center"><strong><span class="style12">:</span></strong></div></td>
<td width="382"><div align="left" class="style3">RESEP LUAR</div></td>
</tr>
<tr class="style12">
<td width="155"><span class="style3">TGL TXN</span></td><td width="3"><div align="center"><strong><span class="style12">:</span></strong></div></td>
<td width="382"><div align="left" class="style3"><?
$jkp = mysql_query("SELECT Tgl FROM rl_resep WHERE NoResep='$RegId'");
$u = mysql_fetch_array($jkp);
echo "$u[Tgl]";
?></div></td>
</tr>
<tr class="style12">
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3">
<table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#990000" class="style12">
<td colspan="4"><div align="center" class="style5 style17">DETAIL DATA OBAT</div></td>
</tr>
<tr bgcolor="#990000" class="style12">
<td width="17"><div align="center" class="style17"><span class="style5">NO</span></div></td>
<td width="302"><div align="left" class="style17"><span class="style5">NAMA OBAT</span></div>  <div align="center" class="style17"> </div></td>
<td width="34"><div align="center" class="style17"><span class="style5">QTY</span></div></td>
<TD width="167"><div align="right" class="style17"><span class="style5">JUMLAH</span></div></TD>
</tr>
<?
$juy = 1;
 $ddt = mysql_query("SELECT * FROM jual_ob_rl_tmp WHERE RegId='$RegId' AND Qty>0 AND TypeJual!=1");
while($ss = mysql_fetch_array($ddt)){
if($ss[TypeJual]==1){ ?>
<tr bordercolor="#000000" class="style12">
<? }else{ ?>
<tr class="style12">
<? } ?>
<td><div align="center"><?  echo $juy; ?></div></td>
<td><div align="left"><? echo $ss[NamaObat]; ?></div></td>
<td><div align="center"><? echo number_format($ss[Qty]); ?></div></td>
<td><div align="right"><? echo number_format($ss[JumlahHarga]); 
$sayang = $sayang + $ss[JumlahHarga];
?></div></td>
</tr>
<? $juy++; } ?>
<tr class="style12">
<td><div align="center"><? echo $juy; ?></div></td><td>RACIK</td><td><div align="center"><? ?></div></td>
<td><div align="right"><? 
$adaf = mysql_query("SELECT JmlRacik,id FROM `racik_rl` WHERE NoResep='$RegId'");
$hkp=mysql_fetch_array($adaf);
$akop = mysql_query("SELECT * FROM `nilai_r` WHERE id=1");
 $ddt2 = mysql_query("SELECT SUM(JumlahHarga) as jj FROM jual_ob_rl_tmp WHERE RegId='$RegId' AND TypeJual=1");
$ker = mysql_fetch_array($ddt2);
$ggh = mysql_query("SELECT SUM(JumlahHarga) AS jh FROM jual_ob_rl_tmp WHERE RegId='$RegId' AND Qty<0");
$gha = mysql_fetch_array($ggh);

$sayang1=  $ker[jj]+$nillai;
echo ""; echo number_format($sayang1);
$sayang2=$sayang + $ker[jj]+$nillai+$gha[jh];;
?></div></td>
</tr>
<tr bgcolor="#990000" class="style12">
<td colspan="3"><div align="center" class="style15 style17">TOTAL</div></td>
<td><div align="right" class="style15 style17"><? echo number_format($sayang2); ?></div></td>
</tr>
<!-- <tr>
<td colspan="4" class="style3"><div align="center"><strong>PPN 10%</strong></div></td><td class="style5"><div align="right"><strong>
  <? //$Ppn = $sayang *10/100;
//echo number_format($Ppn,2); ?>
</strong></div></td>
</tr> -->
<tr bgcolor="#990000" class="style12">
<td colspan="3" ><div align="center" class="style14 style17"><strong>BAYAR</strong></div></td><td class="style5"><div align="right" class="style14 style17"><strong>
  <? $Bay = 0+$sayang2;
echo number_format($Bay); ?>
</strong></div></td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3">
<div align="right">
<table border="0">
<tr>
<td class="style12">JAKARTA, 
  <? 
$tg = date("d"); $bl =date("m"); $th = date("Y");
echo "$tg/$bl/$th";
?>
</td>
</tr>
<tr>
<td height="41">&nbsp;</td>
</tr>
<tr class="style12">
<td><div align="right">( <? echo strtoupper($a[Nama]); ?> )</div>
</tr>
</table>
</div>
 </td>
</tr>
</table>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?>