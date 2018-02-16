<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
header('Refresh: 2');
////
?>
<html>
<head>
<style type="text/css">
<!--
.style7 {font-family: Arial, Helvetica, sans-serif; font-size:12px}
.style8 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="736" colspan="3"><div align="left" class="style7">
  <span class="style8">LAPORAN PEMAKAIAN  <?
  if($mas=='hari'){
  ?><font color="#003366">PSIKOTROPIK</font><? }else{ ?><font color="#990000">NARKOTIK</font><? } ?><br />
PERIODE : <? echo $tgl1; 
$bln=$bln1;
include "../bulan.php"; ?> SD
<?
$bln=$bln2;
echo "$tgl2"; include "../bulan.php";
?><br>

<a href="index.php" style="text-decoration:none">KEMBALI</a> || 
<a style="text-decoration:none" href="zii.php?dimas=sayang&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>">NARKOTIK</a> || 
<a style="text-decoration:none" href="zii.php?mas=hari&dimas=sayang&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>">PSIKOTROPIK</a> || 
<a style="text-decoration:none" href="9IN.php?mas=hari&dimas=sayang&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>">VIEW I</a>
</span> </div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="1" class="style7">
  <TR>
  <td bgcolor="#D4D0C8"><strong>NO</strong></td><td bgcolor="#D4D0C8"><strong>TGL PENYERAHAN</strong></td><td bgcolor="#D4D0C8"><strong>NAMA PASIEN</strong></td><td bgcolor="#D4D0C8"><strong>ALAMAT</strong></td><td bgcolor="#D4D0C8"><strong>DOKTER</strong></td><td bgcolor="#D4D0C8"><strong>ALAMAT DOKTER</strong></td><?
  $nam  =1;
  $bi=0;
  if($mas=='hari'){
  $skdlsklds = mysql_query("SELECT * FROM dataobat WHERE NamaGolongan LIKE 'Psi%'");
  }else{
  $skdlsklds = mysql_query("SELECT * FROM dataobat WHERE NamaGolongan LIKE 'nar%'");
  }
  while($aa = mysql_fetch_array($skdlsklds)){
  ?><td bgcolor="#D4D0C8"><div align="left"><strong>
    <?
 $Nama[$bi]=strtoupper($aa[NamaObat]);
  $Kode[$bi]=($aa[id]); 
 echo $Nama[$bi];
  ?>
  </strong></div></td>
  <? $bi++;} ?>
  </TR>
    <?
$nomer = 1;  $noma=1; $batas=1;
  $banding = "$bln2/$tgl2/$thn1";
 $wkt = strtotime($banding);
 $comp = strtotime(date("m/d/Y",$wkt));
 $kini = strtotime("$bln1/$tgl1/$thn1");
  $sekar = ceil(($comp-$kini)/86400);
  $mulai=0;
 $disik=1;
  while($mulai<=$sekar){
    $compare = date("d/m/Y",$kini +$mulai*86400);
 $peca=explode("/",$compare);
 $Tgl=$peca[0]-0;
 $Bln=$peca[1]-0;
  $Thn=$peca[2]-0;
  if($mas=='hari'){
 $mkaja = mysql_query("SELECT * FROM jualobat WHERE Tgl='$Tgl' AND Bln='$Bln' AND Thn='$Thn' AND NamaKategory like 'Psi%' ORDER BY RegId"); 
  }else{
 $mkaja = mysql_query("SELECT * FROM jualobat WHERE Tgl='$Tgl' AND Bln='$Bln' AND Thn='$Thn' AND NamaKategory like 'Nar%' ORDER BY RegId");
 }
 while($aa = mysql_fetch_array($mkaja)){
  if($RegId!=$aa[RegId]){
  ?>
  <TR>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $compare; ?></div></td>
  <TD><div align="left"><? echo strtoupper($aa[NamaPasien]); ?></div></TD>
  <td><div align="left"><?
  $ksiksisks = mysql_query("SELECT Alamat FROM datapasien WHERE NoPasien='$aa[NoPasien]'");
  $ok = mysql_fetch_array($ksiksisks);
  echo strtoupper($ok[Alamat]); 
  ?></div></td>
  <td><div align="left"><? echo $aa[NamaDokter]; ?></div></td>
  <td>RS YADIKA</td><?
  $awal=0;
  while($awal<$bi){
  ?><td><div align="center"><?
 $isosks = mysql_query("SELECT SUM(Qty) AS jj FROM jualobat WHERE KodeObat='$Kode[$awal]' AND RegId='$aa[RegId]'");
 $ua= mysql_fetch_array($isosks);
 if($ua[jj]>0){
 echo number_format($ua[jj]);
 $to = $to + $ua[jj];
 }else{
 echo "-";
 }
  ?></div></td>
  <? $awal++; } ?>
  </TR>
 
  <?
  
   $nomer++; } $RegId=$aa[RegId];
 
  } 
  $mulai++; } ?>
  <TR>
    <td colspan="6" bgcolor="#D4D0C8"><div align="center"><strong>TOTAL</strong></div></td>
   <?
   $depan = 0;
   while($depan<$bi){
   ?> <td bgcolor="#D4D0C8"><div align="center"><?
	 $isosksz = mysql_query("SELECT SUM(Qty) AS jj FROM jualobat WHERE KodeObat='$Kode[$depan]'");
 $uaz= mysql_fetch_array($isosksz);
 if($uaz[jj]>0){
 echo number_format($uaz[jj]);
 $to = $to + $ua[jj];
 }else{
 echo "-";
 }
	?></div></td>
	<? $depan++; }?>
  </TR> </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>

