<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jdkj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
header("Location:../keluar2.php");
}
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
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6600';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><script type="text/javascript">
window.onload = function(){
 	window.print();
}
</script> 
</head>
<body>
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td><div align="center" class="style1">BUKTI TRANSAKSI RADIOLOGI</div></td>
 </tr>
 <TR>
 <TD valign="top">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style2"> 
 <tr>
 <td><strong>NO RAD</strong></td>
 <td><strong>:</strong></td>
 <td><div align="left"><strong>
   <?
 //
   $KeyID=date("m-Y");

 //
 $kikj2 = mysql_query("SELECT NoUrut FROM norad WHERE NoTxn='$hh[MstKey]'");
 $dapat2 = mysql_fetch_array($kikj2);
 if($dapat2[NoUrut]>0){
 echo "$dapat2[NoUrut]";
 }else{
 ?> 
   <? 
   $kikj = mysql_query("SELECT NoUrut FROM norad  WHERE  KeyID='$KeyID' ORDER BY NoUrut DESC");
 $dapat = mysql_fetch_array($kikj);
 $Baru = $dapat[NoUrut]+1;
$TglJam=date("H:i:s");
$Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
$splo = explode("-",$hh[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);

$isi =mysql_query("INSERT INTO  `norad` (`NoUrut`, `NoTxn`,  `NoPasien`,  `NamaPasien`, `Opr`, `TglJam`, `KeyID`
, `Tgl`, `Bln`, `Thn`, `Stat`, `IdBagian`, `NamaBagian`) 
VALUES ('$Baru', 'MM-$NoStruk','$hh[NoPasien]','$hh[NamaPasien]', '$a[Nama]', '$TglJam','$KeyID','$Tgl','$Bln','$Thn',
'0','$j[NamaKelas]','$j[NamaRuangan]')");
  echo "$Baru"; ?>
 
   <? 
 }

  ?>
 </strong></div></td>
 </tr>
<tr>
<td width="111">NO TXN</td>
<td width="4">:</td>
<td width="182"><div align="left"><? echo $hh[MstKey]; ?></div></td>
</tr>
<tr>
<td>NO RM</td><td>:</td><td><div align="left"><? echo $hh[NoPasien]; ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($hh[NamaPasien]); ?></div></td>
</tr>
<tr>
<td>UMUR</td><td>:</td><td><div align="left"><? echo "$hh[Umur] Th ";
$pch = explode(":",$hh[BlnUmur]);
echo "$pch[0] Bln $pch[1] Hr";
 ?></div></td>
</tr>
<tr>
<td>NAMA DOKTER</td><td>:</td><td><div align="left"><?
echo $hh[KetDokter]; ?></div></td>
</tr>
<tr>
<td>RUJUKAN</td><td>:</td><td><div align="left"><? echo $hh[RujukanDari]; ?></div></td>
</tr>
<tr>
<td colspan="3"><hr /></td>
</tr>
<tr>
<td colspan="3"><div align="center" class="style2">LIST DATA TRANSAKSI</div></td>
</tr>
<TR>
<TD colspan="3" valign="top">
<div align="left">
<table border="1" cellpadding="1" cellspacing="1" class="style2">
<tr>
<td width="24"><strong>NO</strong></td>
<td width="193"><strong>NAMA BIAYA</strong></td>
<td width="70"><div align="right"><strong>NILAI</strong></div></td>
</tr>
<?
$nom=1;
$kiksiskisk = mysql_query("SELECT * FROM txninap3 WHERE MstKey='$hh[MstKey]' AND NoBukti='MM-$NoStruk'");
while($bm = mysql_fetch_array($kiksiskisk)){
?>
<tr>
<td><div align="center"><? echo $nom; ?></div></td>
<td><div align="left"><? echo strtoupper($bm[NamaBiaya]); ?></div></td>
<td><div align="right"><? echo number_format($bm[Total]); 
$tot = $tot + $bm[Total];
?></div></td>
</tr>
<? $nom++; } ?>
<tr>
<td colspan="2"><div align="center">TOTAL</div></td><td><div align="right"><? echo number_format($tot); ?></div></td>
</tr>
</table>
</div></TD>
</TR>
 </table>
 </div>
 </TD>
 </TR>
 <tr>
 <td valign="top">
 <div align="right">
 <table width="131" border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td><div align="center">BEKASI, <? 
 echo "$hh[TglMasuk]/$hh[BlnMasuk]/$hh[ThnMasuk]";
//  echo date("d-m-Y"); ?></div></td>
 </tr>
 <tr>
 <td height="40">&nbsp;</td>
 </tr>
 <tr>
 <td><div align="center"> ( <? echo  strtoupper($a[Nama]); ?> )<br>
 <?
 echo date("H:i:s");
 ?></div></td>
 </tr>
 </table>
 </div>
 </td>
 </tr>
 </table>
 
 </div>
</body>
</html>