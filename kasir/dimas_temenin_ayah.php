<?
session_start();
include "../salaman.php";
 include "../konek.php";
 //header('Refresh: 22');
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}

.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style9 {font-size: 14; font-weight: bold; font-style: italic; color: #FFFFFF; }
-->
</style>
</head>
<body>
<div align="left">
<table width="1310" border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1252" colspan="3"><div align="left" class="style1">
LAPORAN KB<br />
PERIODE  : <?  
 echo "$tgl1 ";
 $Thn=$thn1;
$thn1='';
$bln=$bln1;
 include "../bulan.php"; echo " SD $tgl2 "; 
$bln=$bln2; 
$thn1=$Thn; 
include "../bulan.php";
?>  
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
 &nbsp;
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
  <tr>
  <td width="21" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">NO  </span></td>
  <td width="37" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">  NO RM</span></td>
  <td width="23" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">  TGL</span></td>
  <td width="178" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">  NAMA PASIEN</span></td>
  <td width="47" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">  UMUR<br>
  Th:Bl:Hr</span></td>
  <td width="89" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">  NAMA SUAMI</span></td>
  <td width="214" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">  ALAMAT</span></td>
  <td width="50" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">  JENIS KB</span></td>
  <td colspan="3" bgcolor="#0000CC" class="style2"><div align="center" class="style9">KB   </div></td>
  <td rowspan="2" bgcolor="#0000CC" class="style2"><span class="style9">      KB ALKI</span></td>
  
  <td width="18" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">  DO</span></td>
  <td width="262" rowspan="3" bgcolor="#0000CC" class="style2"><span class="style9">  KET</span></td>
  </tr>
  <tr>
  <td width="51" rowspan="2" bgcolor="#0000CC" class="style2"><span class="style9"> KB BARU</span></td>
  <td width="51" rowspan="2" bgcolor="#0000CC" class="style2"><span class="style9"> KB AKTIF</span></td>
  <td width="31" rowspan="2" bgcolor="#0000CC" class="style2"><span class="style9"> KB4T</span></td>
  </tr>
  <tr>
  <td bgcolor="#0000CC" class="style2"><span class="style9"> </span><span class="style9"></span></td>
  </tr>
  
 <?
    $nomer=1;
   $gambar ='<img src="../gb/centang.jpg" width="12" height="11">'; 
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
  $idkdikd_Dfdfd = mysql_query("SELECT * FROM kb WHERE TglMasuk='$Tgl' AND BlnMasuk='$Bln' AND ThnMasuk='$Thn'");
while($vv =  mysql_fetch_array($idkdikd_Dfdfd)){
//
$kjkdfd_Dfdfd =  mysql_query("SELECT * FROM kb_2 WHERE IdPasien='$vv[IdPasien]'");
$fila  = mysql_fetch_array($kjkdfd_Dfdfd);
 //
$par = $nomer%2;
if($par==1){
$warna='';
}else{
$warna=' bgcolor="#BBFFFC"';
 }
   $ididkidk  = mysql_query("SELECT Umur,BlnUmur,TglMasuk,BlnMasuk,ThnMasuk FROM rwtjalan WHERE id='$vv[IdPasien]'");
  $bv = mysql_fetch_array($ididkidk);  ?>
<tr <? echo $warna;  ?> valign="top" class="style2"   > 
  <td><div align="center"><? echo $nomer; ?></div></td>
   <td><div align="left"><? echo $vv[NoPasien]; ?></div></td>
   <td><div align="left"><?
   echo "$bv[TglMasuk]-$bv[BlnMasuk]-$bv[ThnMasuk]";
   ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($vv[NamaPasien])); ?></div></td>
  <td><div align="center"><?
 
  echo "$bv[Umur]:$bv[BlnUmur]";
  ?></div></td>
  <td><? 
    $kidkidkfdifd_Dfdfd = mysql_query("SELECT Alamat,NamaOrtu FROM datapasien WHERE NoPasien='$vv[NoPasien]'");
$ya  = mysql_fetch_array($kidkidkfdifd_Dfdfd);
if($ya[NamaOrtu]){
 echo ucfirst(strtolower($ya[NamaOrtu])); 
 }else{
 echo ".";
 } 
?></td>
  <td><div align="left"><?
 echo ucfirst(strtolower($ya[Alamat]));  ?></div></td>
 <td><div align="left"><? echo ucfirst(strtolower($vv[JenisKb])); ?></div></td>
  <td><div align="center"><?
	  if($fila[KbBaru]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	   <td><div align="center"><?
	  if($fila[KbAktif]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	   <td><div align="center"><?
	  if($fila[Kb4T]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td>
	  	   <td><div align="center"><?
	  if($fila[Anemia]==1){
	  echo "A";
	  }
	  if($fila[Lila]==1){
	  echo "<br>L";
	  }
	  if($fila[PKronis]==1){
	  echo "<br>K";
	  }
	  if($fila[Ims]==1){
	  echo "<br>I";
 	  }  
	  ?></div></td><td><div align="center"><?
	   if($fila[DoKb]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  }  
	  ?></div></td> <td><div align="left"><? if($vv[Keterangan]){
   echo ucfirst(strtolower($vv[Keterangan])); 
   }else{
   echo ".";
   } ?></div></td>  </tr> <?
  $nomer++; 
  }
   $mulai++; } ?> </table>
  </div></td>
</tr>
</table>
</div>
</body>
</html>