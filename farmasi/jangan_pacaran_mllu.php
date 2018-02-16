<?
session_start();
include "../konek.php";
include "../ceke.php";
 $RegId = $_GET["RegId"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
 $namaPP = mysql_query("SELECT * FROM jual_ob_rl  WHERE   RegId='$RegId'");
$uyu = mysql_fetch_array($namaPP);
//
$dlfkldfldf = mysql_query("SELECT * FROM rl_resep WHERE NoResep='$RegId'");
$nj = mysql_fetch_array($dlfkldfldf);
 //
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
	</script><title>KWITANSI / BUKTI TRANSAKSI APOTIK</title>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style11 {font-size: 10}
.style12 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-style: italic; }
-->
</style>
</head>
<body>
<table border="0">
<?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9){
?>
<tr   onClick="location.href='sulistiono.php?ek=3';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"> 
<? 
}else{
?>
<tr  onClick="location.href='sulistiono.php?ek=3';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<? } ?>
<td colspan="3"><div align="center" class="style3">
BUKTI TRANSAKSI <br />
NO RESEP: <? echo strtoupper($RegId); ?> <em>.</em></div></td>
</tr>
 
<tr>
<td width="149"><span class="style3">NAMA PASIEN</span></td><td width="17"><span class="style3">:</span></td>
<td width="186"><div align="left" class="style3"><?
 echo strtoupper($uyu[NamaPasien]); ?></div></td>
</tr>
<tr>
<td width="149"><span class="style3">STATUS</span></td><td width="17"><span class="style3">:</span></td>
<td width="186"><div align="left" class="style3">1</div></td>
</tr>
<tr>
<td width="149"><span class="style3">JENIS TXN</span></td><td width="17"><span class="style3">:</span></td>
<td width="186"><div align="left" class="style3">RESEP LUAR</div></td>
</tr>
<tr>
<td width="149"><span class="style3">TGL TXN</span></td><td width="17"><span class="style3">:</span></td>
<td width="186"><div align="left" class="style3"><?
$jkp = mysql_query("SELECT Tgl FROM rl_resep WHERE NoResep='$RegId'");
$u = mysql_fetch_array($jkp);
echo "$u[Tgl]";
?></div></td>
</tr>
<tr>
<td colspan="3"><span class="style13"> </span></td>
</tr>
<tr>
<td colspan="3">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="4"><div align="center" class="style5">DETAIL DATA OBAT</div></td>
</tr>
<tr class="style3">
<td width="17"><div align="center"><span class="style5">NO</span></div></td>
<td width="231"><div align="left"><span class="style5">NAMA OBAT</span></div>  <div align="center"><span class="style5"> </span></div></td>
<td width="23"><div align="center"><span class="style5">QTY</span></div></td>
<TD width="63"><div align="right"><span class="style5">JUMLAH</span></div></TD>
</tr>
<?
$juy = 1;
$ddt = mysql_query("SELECT * FROM jual_ob_rl  WHERE   RegId='$RegId'");
while($ss = mysql_fetch_array($ddt)){
if($ss[TypeJual]==1){ ?>
<tr bordercolor="#000000" class="style12">
<? }else{ ?>
<tr>
<? } ?>
<td><div align="center" class="style8"><?  echo $juy; ?></div></td>
<td><div align="left" class="style8"><? echo $ss[NamaObat]; ?></div>  <div align="right" class="style8"> </div></td>
<td><div align="center" class="style8"><? echo number_format($ss[Qty],2); ?></div></td>
<td><div align="right" class="style8"><? 
if($ss[TypeJual]==1){ }else{
echo number_format($ss[JumlahHarga]); 
} $sayang = $sayang + $ss[JumlahHarga];
?></div></td>
</tr>
<? $juy++; } ?>
<?
if($aa==33){
?><tr  class="style8">
<td><? echo $juy; ?></td><td>RACIK</td><? 
$adaf = mysql_query("SELECT JmlRacik,id FROM `racik_rl` WHERE NoResep='$RegId'");
$hkp=mysql_fetch_array($adaf);
 $nillai = $hkp[JmlRacik]*$jkuyp[Nilai_Racik];
?> 
<td><div align="center"><? echo $hkp[JmlRacik]; ?></div></td>
<td><div align="right"><? echo number_format($nillai);
?></div></td>
 </tr>
<tr class="style5">
<td colspan="3"><div align="center" class="style5">TOTAL</div></td>
<td><div align="right" class="style5"><? 
$ggh = mysql_query("SELECT SUM(JumlahHarga) AS jh FROM jual_ob_rl  WHERE RegId='$RegId' AND Qty<0");
$gha = mysql_fetch_array($ggh);

$sayang2 = $sayang + $nillai+$gha[jh];
echo number_format($sayang2); ?></div></td>
</tr>
<? } $sayang2 = $sayang + $nillai+$gha[jh];
 ?>
<!-- <tr>
<td colspan="4" class="style3"><div align="center"><strong>PPN 10%</strong></div></td><td class="style5"><div align="right"><strong>
  <? //$Ppn = $sayang *10/100;
//echo number_format($Ppn,2); ?>
</strong></div></td>
</tr> -->
<tr>
<td colspan="3" class="style3"><div align="center"><strong>BAYAR</strong></div></td><td class="style5"><div align="right"><strong>
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
<tr class="style3">
<td >JAKARTA, 
  <? 
$tg = date("d"); $bl =date("m"); $th = date("Y");
echo "$tg/$bl/$th";
?>
 </td>
</tr>
<tr>
<td height="41" class="style3">&nbsp;</td>
</tr>
<tr class="style3">
<td><div align="right"> ( <? echo strtoupper($a[Nama]); ?> ) </div></tr>
</table>
</div>
 </td>
</tr>

</table>
<p class="style3">&nbsp;</p>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?>