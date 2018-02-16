<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
header('Refresh: 2');
////
?>
<html>
<head><style type="text/css">
<!--
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px; font-style:italic  
	font-weight: bold; color:#000000
}
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
 </style>

</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
  <td width="705" colspan="3"> 
    <span class="style6">LAPORAN PENGGUNAAN NARKOTIKA DAN PSIKOTROPIKA  <br />
    PERIODE : <? echo $tgl1; 
$bln=$bln1;
include "../bulan.php"; ?> SD 
    <?
$bln=$bln2;
echo "$tgl2"; include "../bulan.php";
?>
      </span></td>
</tr>
<tr class="style5">
<td colspan="3"><div align="left"><a href="index.php?mau=makan" style="text-decoration:none">KEMBALI</a> || 
<? if($dimas=='sayang'){ ?>
<font color="#990000">NARKOTIK</font>
<? }else{ ?><a style="text-decoration:none" href="kdik_00.php?dimas=sayang&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>">NARKOTIK</a><? } ?> || 
<? if($dimas=='sayang'){ ?>
<a style="text-decoration:none" href="kdik_00.php?tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>">PSIKOTROPIK</a><? }else{ ?>
<font color="#990000">PSIKOTROPIKA</font>
<? } ?> || <a style="text-decoration:none" href="zii.php?dimas=sayang&tgl1=<? echo $tgl1; ?>&bln1=<? echo $bln1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>">ALTER VIEW</a> </div></td>
</tr>
<tr>
<td colspan="3"><div align="left" class="style5"></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style5">
<tr>
 <td bgcolor="#FFFF66"><strong>NO</strong></td>
  <td bgcolor="#FFFF66"><strong>TGL</strong></td>
   <td bgcolor="#FFFF66"><strong>NO RM</strong></td>
 <td bgcolor="#FFFF66"><strong>NAMA PASIEN</strong></td>
 <td bgcolor="#FFFF66"><strong>ALAMAT</strong></td>
 <td bgcolor="#FFFF66"><strong>NAMA DR</strong></td>
 <td bgcolor="#FFFF66"><strong>NAMA OBAT</strong></td>
 <td bgcolor="#FFFF66"><strong>QTY</strong></td>
</tr>
<?
  $nomer=1;
 $banding = "$bln2/$tgl2/$thn1";
 $wkt = strtotime($banding);
 $comp = strtotime(date("m/d/Y",$wkt));
 $kini = strtotime("$bln1/$tgl1/$thn1");
  $sekar = ceil(($comp-$kini)/86400);
  $mulai=0;
 $disik=1;
  while($mulai<=$sekar){
  $nos=1;
  $compare = date("d/m/Y",$kini +$mulai*86400);
$pecah=explode("/",$compare);
$bln = $pecah[1]-0;
$tgl = $pecah[0]-0;
$thn = $pecah[2]-0;
////
if($dimas=='sayang'){
$dfdfd = mysql_query("SELECT datapasien.NoPasien,datapasien.NamaPasien,jualobat.Qty,jualobat.NamaDokter,datapasien.Alamat,dataobat.id,dataobat.NamaObat,jualobat.Tgl,jualobat.Bln,jualobat.Thn 
  FROM datapasien,jualobat,dataobat WHERE  jualobat.Tgl=$tgl AND jualobat.Bln=$bln AND jualobat.Thn=$thn AND dataobat.IdGol='779' AND jualobat.NoPasien=datapasien.NoPasien  
  AND jualobat.KodeObat=dataobat.id ORDER BY dataobat.NamaObat");
}else{
  $dfdfd = mysql_query("SELECT datapasien.NoPasien,datapasien.NamaPasien,jualobat.Qty,jualobat.NamaDokter,datapasien.Alamat,dataobat.id,dataobat.NamaObat,jualobat.Tgl,jualobat.Bln,jualobat.Thn 
  FROM datapasien,jualobat,dataobat WHERE  jualobat.Tgl=$tgl AND jualobat.Bln=$bln AND jualobat.Thn=$thn AND dataobat.IdGol='778' AND jualobat.NoPasien=datapasien.NoPasien
  AND jualobat.KodeObat=dataobat.id ORDER BY dataobat.NamaObat");
  }
 while($ii = mysql_fetch_array($dfdfd)){
//
 ?>
<tr>
<td><div align="center"><? echo $nomer;?></div></td>
<td><div align="center"><? echo $compare;?></div></td>
<td><div  align="left"><? echo $ii[NoPasien]; ?></div></td>
<td><div  align="left"><? echo strtoupper($ii[NamaPasien]); ?></div></td>
<td><div  align="left"><? echo strtoupper($ii[Alamat]); ?></div></td>
<td><div  align="left"><? echo $ii[NamaDokter]; ?></div></td>
<td><div  align="left"><? echo strtoupper($ii[NamaObat]); ?></div></td>
<td><div  align="left"><? echo number_format($ii[Qty]); ?></div></td>
 </tr>
<?
$nomer++; } ?>
<? 
$mulai++;
}
?><tr>
  <td colspan="6" bgcolor="#FFFF66"><div align="center">. </div></td>
  </tr>
</table>
</div>
</td>
</tr>

</table>
</div>
</body>
</html>
 