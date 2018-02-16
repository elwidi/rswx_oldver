<?
session_start();
include "../salaman.php";
 include "../konek.php";
if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 || $a[Level]==9){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1209" colspan="3"><div align="left" class="style1">
LAPORAN PERSALINAN<br />
PERIODE : <? 
$thn2=$thn1; 
echo "$tgl1 ";
$bln=$bln1; $thn1=''; 
 include "../bulan.php"; echo " SD $tgl2 "; 
$bln=$bln2; $thn1=$thn2; 
include "../bulan.php";
?>
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="button" name="DFDFD" value="Kembali" onClick="location.href='index.php';" class="style2">
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="18" bgcolor="#BBD2FD"><strong>NO</strong></td>
  <td width="67" bgcolor="#BBD2FD"><strong>NO RM</strong></td>
  <td width="156" bgcolor="#BBD2FD"><strong>NAMA PASIEN</strong></td>
  <td width="58" bgcolor="#BBD2FD"><strong>UMUR<br>
  Thn:Bln:Hr</strong></td><td width="71" bgcolor="#BBD2FD"><strong>NAMA SUAMI</strong></td>
  <td width="240" bgcolor="#BBD2FD"><strong>ALAMAT</strong></td>
  <td width="169" bgcolor="#BBD2FD"><strong>TELP</strong></td>
  <td width="97" bgcolor="#BBD2FD"><strong>DIAGNOSA</strong></td>
  <td width="123" bgcolor="#BBD2FD"><strong>TIDAKAN</strong></td>
  <td width="116" bgcolor="#BBD2FD"><strong>DOKTER</strong></td>
  </tr>
  <?
  $nomer=1;
       $banding = "$bln2/$tgl2/$thn1";
 $nomer=1;
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
   $kjdfdfD_Dfdfd = mysql_query("SELECT * FROM persalinan WHERE Tgl=$Tgl AND Bln=$Bln AND Thn=$Thn");
   while($xx = mysql_fetch_array($kjdfdfD_Dfdfd)){
   //
   $kdfdDF_Dfdf = mysql_query("SELECT Umur,BlnUmur,NamaDokter,id FROM rwtjalan WHERE id='$xx[IdRj]'");
   $bp = mysql_fetch_array($kdfdDF_Dfdf);
   //
   $kjgjfgf_FGfgf = mysql_query("SELECT NamaOrtu,Alamat,Telp FROM datapasien WHERE NoPasien='$xx[NoPasien]'");
   $ada = mysql_fetch_array($kjgjfgf_FGfgf);
   $pa = $nomer%2;
   if($pa==1){
   $warna='';
   }else{
   $warna=' bgcolor="#FFCCCC"';
   }
  ?>
  <tr valign="top" <? echo $warna; ?>>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="center"><? echo $xx[NoPasien]; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($xx[NamaPasien]));?></div></td>
  <td><div align="center"><?
  echo $bp[Umur]; 
  echo ":$bp[BlnUmur]";
  ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($ada[NamaOrtu])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($ada[Alamat])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($ada[Telp])); ?></div></td>
  <td><div align="left"><?
 $jdsfjdjf = mysql_query("SELECT KodeIcd FROM icd_rj WHERE IdPasien='$bp[id]'");
while($jk = mysql_fetch_array($jdsfjdjf)){
echo "<i>$jk[KodeIcd],</i>";;
}
  ?></div></td>
  <td><div align="left"></div></td>
  <td><div align="left"><? echo $bp[NamaDokter]; ?></div></td>
  </tr>
  <?
  $nomer++; } $mulai++; } ?>
  </table>
  </div></td>
</tr>
</table>
</body>
</html>
<?
}
?>