<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$id = $_GET["id"];
$NoResep = $_GET["NoResep"];
if($id!=''){
$umbu = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
//header("Location:./dodol.php");
}
}
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
?>
<html>
<head><title>KWITANSI / BUKTI TRANSAKSI APOTIK</title>
<style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
. {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
.style10 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style11 {font-size: 10}
.style12 {font-size: 10;font-family: Arial, Helvetica, sans-serif}
.style16 {font-size: 12px}
.style17 {font-size: 10px}
.style18 {font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
 -->
</style><script language="JavaScript">
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
</head>
<body>
<?
$sabar_baik = strlen($ela);
?>
 <table border="0" onClick="location.href='../Daftar/ed_d.php?id=<? echo $id; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"> 
 <tr class="style3">
<td colspan="3"><div align="center" class="style3">
BUKTI TRANSAKSI RAWAT JALAN <br />
REG: <? echo $ii[RegId]; ?>
</div></td>
</tr>
<tr class="style3">
<td width="127"><span class=" ">NO RM</span></td>
<td width="8"><div align="center"><span class="style14">:</span></div></td>
<td width="197"><div align="left" class=" "><? echo $ii[NoPasien]; ?></div></td>
</tr>
<tr class="style3">
<td><span >NO RESEP</span></td>
<td><div align="center"><span class="style14">:</span></div></td>
<td><div align="left" class=" "><? echo $NoResep; ?></div></td>
</tr>
<tr class="style3">
<td><span >STATUS</span></td>
<td><div align="center"><span class="style14">:</span></div></td>
<td><div align="left" class=" ">1</div></td>
</tr>
<tr class="style3">
<td><span class=" ">NAMA PASIEN</span></td>
<td><div align="center"><span class="style14">:</span></div></td>
<td><div align="left" class=" "><? echo $ii[NamaPasien]; ?></div></td>
</tr>
<tr class="style3">
<td><span class=" ">DOKTER</span></td>
<td><div align="center"><span class="style14">:</span></div></td>
<td><div align="left" class=" "><? echo $ii[NamaDokter]; ?></div></td>
</tr>
<tr class="style3">
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td colspan="3">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="4"><div align="center" class="style3"> RINCIAN OBAT
</div></td>
</tr>
<tr class="style3">
<td width="17"><div align="center" class="style16"><span class="style15">NO</span></div></td>
<td width="214"><div align="center" class="style16">
  <div align="left"><span class="style15">NAMA OBAT</span></div>
</div>  <div align="center" class="style16"></div></td>
<td width="20"><div align="center" class="style16"><span class="style15">QTY</span></div></td>
<TD width="63"><div align="center" class="style16"><span class="style15">JUMLAH</span></div></TD>
</tr>
<?
$juy = 1;
$ddt = mysql_query("SELECT * FROM jualobat WHERE RegId='$ii[RegId]'  AND JamTran='$NoResep' AND Qty>0 AND apa_r!=1");
while($ss = mysql_fetch_array($ddt)){
?>
<tr bordercolor="#000000" class="style3">
<td><div align="center" class="style12 style17"><?  echo $juy; ?></div></td>
<td><div align="left" class="style18"><? echo $ss[NamaObat]; if($ss[apa_r]==1){ echo " <i>(R)</i>"; }else{ }
  ?></div>  <div align="right" class="style18"></div></td>
<td><div align="center" class="style18"><? echo number_format($ss[Qty],2); ?></div></td>
<td><div align="right" class="style18"><? echo number_format($ss[JmlHargaBeli]); 
$sayang = $sayang + $ss[JmlHargaBeli];
?></div></td>
</tr>
<? $juy++; } 
$jkjioi = mysql_query("SELECT COUNT(id) AS jh FROM jualobat WHERE RegId='$ii[RegId]'  AND JamTran='$NoResep'  AND apa_r=1");
$okw = mysql_fetch_array($jkjioi);
if($okw[jh]>0){
?>
<tr class="style3">
<td><div align="center" class="style11"><em><? echo $juy; ?></em></div></td>
<td class="style12"><em>RACIKAN</em></td><td><div align="center" class="style11"><em><?
 $selele = mysql_query("SELECT persen,id FROM `racik` WHERE IdPas='$id' AND NoResep='$NoResep'");
 $we= mysql_fetch_array($selele);
 echo number_format($we[persen]);  
?></em></div></td><td><div align="right" class="style11"><em>
  <? 
$jauiu = mysql_query("SELECT SUM(JmlHargaBeli) AS jh FROM jualobat WHERE RegId='$ii[RegId]' AND JamTran='$NoResep' AND apa_r=1 AND Qty>0");
$uk = mysql_fetch_array($jauiu);
$JHGJHG = mysql_query("SELECT Nilai_Racik FROM  nilai_r  WHERE id=1");
$gu = mysql_fetch_array($JHGJHG);
$jkjoip = $uk[jh]+($gu[Nilai_Racik]*$we[persen]);
echo number_format($jkjoip);
?>
</em></div></td>
</tr>
<? } ?>
<?
$lsoslsok = mysql_query("SELECT SUM(Total) AS kk FROM JualPaketRj WHERE IdPasien='$id'");
$dta= mysql_fetch_array($lsoslsok);
if($dta[kk]>0){
?>
<tr class="style11">
<td><div align="center"><? echo $juy; ?></div></td>
<td>PAKET</td><td><div align="center"><? 
$ldsoslsok = mysql_query("SELECT COUNT(id) AS kk FROM JualPaketRj WHERE IdPasien='$id'");
$nx = mysql_fetch_array($ldsoslsok);
echo number_format($nx[kk]);
?></div></td>
<td><div align="right"><? echo number_format($dta[kk]); ?></div></td>
</tr>
<? } ?>

<tr class="style5">
<td colspan="3" class="style3"><div align="center"><strong>TOTAL</strong></div></td>
<td class="style5"><div align="right" class="style5"><strong><? 
$ggh = mysql_query("SELECT SUM(JmlHargaBeli) AS jh FROM jualobat WHERE RegId='$ii[RegId]' AND Qty<0");
$gha = mysql_fetch_array($ggh);
$sayang = $sayang + $jkjoip+$gha[jh]+$dta[kk];
echo number_format($sayang); ?></strong></div></td>
</tr>
<!-- 
<tr>
<td colspan="4" class="style3"><div align="center"><strong>PPN 10%</strong></div></td><td class="style5"><div align="right"><strong>
  <? //$Ppn = $sayang *10/100;
//echo number_format($Ppn,2); ?>
</strong></div></td>
</tr>
-->
<tr>
<td colspan="3" class="style3"><div align="center"><strong>BAYAR</strong></div></td><td class="style5"><div align="right"><strong>
  <? $Bay = $Ppn+$sayang;
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
<td class="style3">J<span class="style10">AKARTA ,
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
<td><div align="right" class="style10">( <? echo strtoupper($a[Nama]); ?> )<br><?
echo date("H:i:s");
?></div>
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