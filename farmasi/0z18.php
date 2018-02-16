<?
session_start();
include "../konek.php";
include "../ceke.php";
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
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
	font-size: 11px;
 }
.style2 {
	color: #993333;
	font-style: italic;	font-size: 11px;

}

-->
</style>
 
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="518" colspan="3"><div align="left" class="style1">
LIST HISTORY MUTASI BARANG<br />
  <font color="#990000"><? echo $ii[NamaObat]; ?></font><br>
PERIODE : 
<?
echo "$tgl1 ";
$bln=$bln1;
include "../bulan.php";
 echo " sd $tgl2";
 $bln=$bln2;
include "../bulan.php";
 ?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<a href="#" style="text-decoration:none" onClick="window.close()">Tutup</a> <span class="style2">.
</span></div>
</td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style23">
 <TR>
 <td width="30" bgcolor="#FF99CC"><strong>NO</strong></td>
 <td width="82" bgcolor="#FF99CC"><strong>TGLPO</strong></td>
 <td width="212" bgcolor="#FF99CC">SUPPLIER</td> 
 <td width="62" bgcolor="#FF99CC"><div align="center">MASUK</div></td>
 <td width="48" bgcolor="#FF99CC"><div align="center">KELUAR</div></td>
 <td width="42" bgcolor="#FF99CC"><div align="center">SISA</div></td>
 </TR>     <?
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
    $beli = mysql_query("SELECT * FROM podetil77 WHERE IdBarang='$id' AND Tgl=$Tgl AND Bln=$Bln AND Thn='$Thn'");
  while($cc = mysql_fetch_array($beli)){
   $iskjs = mysql_query("SELECT NamaSupplier,NoPo FROM polog77 WHERE id='$cc[IdPo77]'");
 $na = mysql_fetch_array($iskjs);    
  $ni = $nomer%2;
 if($ni==1){
 $warna='bgcolor="#FFFF99"';
 }else{
 $warna='';
 } ?><tr valign="top" <? echo $warna; ?>>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $compare; ?></div></td>
  <td><div align="left"><? echo $na[NamaSupplier]; ?></div></td>
  <td><div align="center"><? echo $cc[Qty]; ?></div></td><td>&nbsp;</td>
  </tr>
   <? $nomer++; }
    
    $jskk_dfd = mysql_query("SELECT rwtjalan.Bagian,jualobat.Qty FROM jualobat,rwtjalan WHERE jualobat.Tgl='$Tgl' AND jualobat.Bln='$Bln' AND jualobat.Thn='$Thn' and jualobat.KodeObat='$id' AND jualobat.RegId=rwtjalan.RegId");
 while($bb = mysql_fetch_array($jskk_dfd)){
 $ni = $nomer%2;
 if($ni==1){
 $warna='bgcolor="#FFFF99"';
 }else{
 $warna='';
 }  ?>
 <tr class="style2" valign="top" <? echo $warna; ?>>
 <td><div align="center"><? echo $nomer; ?></div></td>
 <td  ><div align="left"><? echo $compare; ?></div></td>
 <td colspan="2"><div align="left"><? echo $bb[Bagian]; ?></div></td>
 <td><div align="center"><? echo $bb[Qty]; ?></div></td>
<?   $nomer++; } $mulai++;  } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>