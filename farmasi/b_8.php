<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if(!$Bln){
$bln=date("m");
$thn1=date("Y");
}else{
$bln=$Bln;
$thn1=$Thn;
}?>
<html>
<head>
<style type="text/css">
<!--
.style3 {
	font-size: 16px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-style: italic;
}
.style2 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
  }
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6633';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="860" height="43" colspan="3"><div align="left" class="style3">
Laporan Faktur Pembelian  <br />
<?

?>
Periode : <? include "../bulan.php"; ?>
</div></td>
</tr>
<tr class="style2">
<td colspan="3"><div align="left">
<a href="index.php" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Kembali</a> || 
<a href="b_8.php?Bln=<? echo $bln; 
?>&Thn=<? echo $thn1; ?>&Kat=Rad" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Radiologi</a> || <a href="b_8.php?Bln=<? echo $bln; 
?>&Thn=<? echo $thn1; ?>&Kat=Lab" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Laboratorium</a> || <a href="b_8.php?Bln=<? echo $bln; 
?>&Thn=<? echo $thn1; ?>&Kat=Far" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Farmasi</a> 
|| <a href="b_8.php?Bln=<? echo $bln; 
?>&Thn=<? echo $thn1; ?>&Kat=" style="text-decoration:none"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Semua</a>
|| <a  href="#" style="text-decoration:none"  onClick="wCompare4f3w12 = window.open('../lg/c2a0.php?Kat=<? echo $Kat; ?>&as=41', 
  'wCompare4f3w12', 'width=400,height=140,left=170,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare4f3w12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">Cek Periode</a></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="715" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="24" rowspan="2" bgcolor="#ECE9D8"><strong>No </strong></td>
<td width="56" rowspan="2" bgcolor="#ECE9D8"><strong> Tgl PO </strong></td>
 <td width="56" rowspan="2" bgcolor="#ECE9D8"><strong> Tgl Faktur </strong></td>
<td width="110" rowspan="2" bgcolor="#ECE9D8"><strong> No Faktur </strong></td>
<td width="184" rowspan="2" bgcolor="#ECE9D8"><strong> Supplier</strong></td>
  <td colspan="4" bgcolor="#ECE9D8"><div align="center"><strong> Nilai</strong></div></td>
</tr>
<tr>
<td width="76" bgcolor="#ECE9D8"><div align="right"><strong>Txn</strong></div></td>
<td width="76" bgcolor="#ECE9D8"><div align="right"><strong>Diskon</strong></div></td>
<td width="64" bgcolor="#ECE9D8"><div align="right"><strong>Ppn</strong></div></td>
<td width="75" bgcolor="#ECE9D8"><div align="right"><strong>Total</strong></div></td>
</tr>
<?
$nomer=1;
$kdkdjkfd = mysql_query("SELECT * FROM polog77 WHERE NoPo LIKE '%$Kat%' AND Bln='$bln' AND Thn='$thn1' ORDER BY id desc");
while($bb = mysql_fetch_array($kdkdjkfd)){
$isksids_sd= mysql_query("SELECT Total,PotRp FROM podetil77 WHERE IdPo77='$bb[id]'");
while($yo = mysql_fetch_array($isksids_sd)){
$Nilai = $Nilai + $yo[Total];
$Diskon = $Diskon +$yo[PotRp];
}
$pdf = $nomer%2;
if($pdf==1){
$warna=' bgcolor="#CCFFCC"';
}else{
$warna='';
}
?>
<tr <? echo $warna; ?>  onClick="wCompare_224f3w12 = window.open('ca_0.php?&IdPo=<? echo $bb[id]; ?>&Bln=<? echo $bln; ?>&Thn=<? echo $thn1; ?>&Kat=<? echo $Kat; ?>', 
  'wCompare_224f3w12', 'width=600,height=400,left=370,Top=150,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_224f3w12.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="right"><?
  echo "$bb[Tgl]-$bb[Bln]-$bb[Thn]";
  ?></div></td>
  <td><div align="left"><? 
    $ksiks = mysql_query("SELECT * FROM fakturpo WHERE IdPo='$bb[id]'");
  $ub = mysql_fetch_array($ksiks);
echo "$ub[TglFak]-$ub[BlnFak]-$ub[ThnFak]"; ?></div></td> 
  <td><div align="left"><?  
  echo $ub[NoFaktur];
   ?></div></td>
  <td><div align="left"><? echo $bb[NamaSupplier]; ?></div></td>
  <td><div align="right"><? 
 echo number_format($Nilai);
 $tot_1 = $tot_1 + $Nilai;
  ?></div></td>
  <td><div align="right"><?
 echo number_format($Diskon);
   $tot_2 = $tot_2 + $Diskon;
 ?></div></td>
 <td><div align="right"><?
 $Ppn2 = $Nilai-$Diskon;
 $Ppn = $Ppn2*10/100;
 echo number_format($Ppn);
    $tot_3 = $tot_3 + $Ppn;
 ?></div></td>
 <td><div align="right"><? 
 $Total = $Nilai-$Diskon+$Ppn;
 echo number_format($Total);
 $tot_4 = $tot_4 + $Total;
 ?></div></td>
</tr>
<?
 $Nilai =0;$Diskon =0;
 $Ppn=0;
 $Ppn2=0; $Total=0; 
$nomer++; } ?>
<tr>
  <td colspan="5" bgcolor="#ECE9D8"><div align="center">TOTAL</div></td>
  <td bgcolor="#ECE9D8"><div align="right"><? echo number_format($tot_1); ?></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><? echo number_format($tot_2); ?></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><? echo number_format($tot_3); ?></div></td>
  <td bgcolor="#ECE9D8"><div align="right"><? echo number_format($tot_4); ?></div></td>
</tr>
 </table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>