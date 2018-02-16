<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$h = $_GET["h"];
$NoResep = $_GET["NoResep"];
$id = $_GET["id"];
if($id!=''){
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
//header("Location:./dodol.php");
}
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
?>
<html>
<head><title>KWITANSI / BUKTI TRANSAKSI APOTIK</title>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style11 {font-size: 10}
.style12 {font-family: Arial, Helvetica, sans-serif}
.style13 {font-size: 10px}
.style14 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
.style15 {font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
-->
</style>
</head>
<body>
<table border="0">
<tr class="style3">
<td colspan="3"><div align="center" class="style12 style13">
BUKTI TRANSAKSI RAWAT INAP <br />
REG: <? echo $ii[MstKey]; ?>
</div></td>
</tr>
<tr class="style3">
<td width="127"><span class="style8">NO RM</span></td>
<td width="8"><div align="center"><span class="style14">:</span></div></td>
<td width="197"><div align="left" class="style8"><? echo $ii[NoPasien]; ?></div></td>
</tr>
<tr class="style3">
<td width="127"><span class="style8">NO RESEP</span></td>
<td width="8"><div align="center"><span class="style14">:</span></div></td>
<td width="197"><div align="left" class="style8"><? echo $NoResep; ?></div></td>
</tr>
<tr class="style3">
<td width="127"><span class="style8">STATUS</span></td>
<td width="8"><div align="center"><span class="style14">:</span></div></td>
<td width="197"><div align="left" class="style8">0</div></td>
</tr>
<tr class="style3">
<td><span class="style8">NAMA PASIEN</span></td>
<td><div align="center"><span class="style14">:</span></div></td>
<td><div align="left" class="style8"><? echo $ii[NamaPasien]; ?></div></td>
</tr>
<tr class="style3">
<td><span class="style8">DOKTER</span></td>
<td><div align="center"><span class="style14">:</span></div></td>
<td><div align="left" class="style8"><? echo $ii[KetDokter]; ?></div></td>
</tr>
<tr class="style3">
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="4"><div align="center" class="style14">
DETAIL DATA OBAT</div></td>
</tr>
<tr class="style3">
<td width="17"><div align="center" class="style3"><span class="style15">NO</span></div></td>
<td width="214"><div align="center" class="style3">
  <div align="left"><span class="style15">NAMA OBAT</span></div>
</div>  <div align="center" class="style3"></div></td>
<td width="20"><div align="center" class="style3"><span class="style15">QTY </span></div></td>
<TD width="63"><div align="center" class="style3"><span class="style15">JUMLAH</span></div></TD>
</tr>
<?
$juy = 1; $nom=1;
$ddt = mysql_query("SELECT * FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND Qty>0 AND apa_r=1 ORDER BY apa_r DESC");
while($ss = mysql_fetch_array($ddt)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  
if($nom==1){
echo $juy; 
} ?></div></td>
<td><div align="left" class="style8"><? if($ss[apa_r]==1){ 
echo "<i>"; echo strtoupper($ss[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ss[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ss[apa_r]==1){ echo "<i>"; echo number_format($ss[Qty],2); echo "</i>"; 
}else{ echo number_format($ss[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ss[apa_r]==1){ echo "<i>";  //echo number_format($ss[JmlHargaBeli]);  echo "</i>"; 
}else{ echo number_format($ss[JmlHargaBeli]); } 
$sayang = $sayang + $ss[JmlHargaBeli];
?></div></td>
</tr>
 
<?  $nom++; } 
$ujdujduddf =mysql_query("SELECT COUNT(id) AS jj FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND Qty>0 AND apa_r=1");
$yhs = mysql_fetch_array($ujdujduddf);
if($yhs[jj]>0){
?> 
 <tr class="style5">
<td colspan="3" class="style3"><div align="center"><strong>SUBTOT</strong></div></td>
<td class="style5"><div align="right" class="style5"><strong><? 
$ggh = mysql_query("SELECT SUM(JmlHargaBeli) AS jh FROM jualobat_tmp2 WHERE RegId='$ii[RegId]' AND Qty<0");
$gha = mysql_fetch_array($ggh);
$JHGJHG = mysql_query("SELECT Racikan FROM  racikembal  WHERE id=1");
$gu = mysql_fetch_array($JHGJHG);
 

$sayang =$sayang+$gha[jh]+$totk+$gu[Racikan];
 echo number_format($sayang); ?></strong></div></td>
</tr>
<? } ?>
 <?
 $juy2=2;
$ddt2 = mysql_query("SELECT * FROM jualobat_tmp2 WHERE JamTran='$NoResep' AND Qty>0 AND apa_r!=1 ORDER BY apa_r DESC");
while($ss2 = mysql_fetch_array($ddt2)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style8"><?  echo $juy2; ?></div></td>
<td><div align="left" class="style8"><? if($ss2[apa_r]==1){ 
echo "<i>"; echo strtoupper($ss2[NamaObat]); echo " (R)</i>";
    }else{ echo strtoupper($ss2[NamaObat]); }
  ?></div>  <div align="right" class="style8"></div></td>
<td><div align="center" class="style8"><? 
if($ss2[apa_r]==1){ echo "<i>"; echo number_format($ss2[Qty],2); echo "</i>"; 
}else{ echo number_format($ss2[Qty],2); } ?></div></td>
<td><div align="right" class="style8"><? if($ss2[apa_r]==1){ echo "<i>";  //echo number_format($ss[JmlHargaBeli]);  echo "</i>"; 
}else{ echo number_format($ss2[JmlHargaBeli]); } 
$sayang2 = $sayang2 + $ss2[JmlHargaBeli];
?></div></td>
</tr>
 
<? $juy2++; } 
?> 
<tr>
<td colspan="3" class="style3"><div align="center"><strong>SUBTOT</strong></div></td><td class="style5"><div align="right"><strong>
<? echo number_format($sayang2); ?>
</strong></div></td>
</tr>
<tr>
<td colspan="3" class="style3"><div align="center"><strong>BAYAR</strong></div></td><td class="style5"><div align="right"><strong>
  <? $Bay = $Ppn+$sayang+$sayang2;
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
<td class="style3"><span class="style10">JAKARTA ,
    <? 
$tg = date("d"); $bl =date("m"); $th = date("Y");
echo "$tg/$bl/$th";
?>
</span></td>
</tr>
<tr>
<td height="41" class="style11">&nbsp;</td>
</tr>
<tr>
<td><div align="right" class="style10">( <? echo strtoupper($a[Nama]); ?> )<br>
<? echo date("H:i:s"); ?> </div>
</tr>
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