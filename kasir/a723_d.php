<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kjf_dfdfdfd  = mysql_query("SELECT * FROM judul_anc WHERE id=1");
$dapa =  mysql_fetch_array($kjf_dfdfdfd);
 if($Bln>0 && $Thn>0){
$bln=$Bln; $thn1=$Thn;
}else{
$bln=date("m"); $thn1=date("Y");
}
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 
}
.style3 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFCC00';
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
<table width="1173" border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="1600" colspan="3"><div align="left" class="style1">
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td width="171">NAMA BPS</td>
 <td width="8">:</td>
 <td width="334"><div align="left">
 <?
 echo $dapa[NamaBps];
 ?>
 </div></td>
 </tr>
 <tr>
   <td>BULAN</td>
   <td>:</td>
   <td><div align="left"><? 
   echo "$tgl1 ";
$Thn=$thn1;
$bln=$bln1; $thn1='';

 include "../bulan.php"; echo " SD $tgl2 "; 
$bln=$bln2; 
include "../bulan.php";
    ?></div></td>
 </tr>
 <tr>
   <td>TAHUN</td>
   <td>:</td>
   <td><div align="left"><?
   $thn1=$Thn; 
   echo $thn1; 
   ?></div></td>
 </tr>
 <tr>
   <td>WILAYAH PUSKESMAS </td>
   <td>:</td>
   <td><div align="left"><? echo $dapa[Wilayah]; ?></div></td>
 </tr>
 </table>
 </div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="button" name="gfgfgf" value="Kembali" onClick="location.href='index.php';" class="style1">
<input type="button" name="gfgfgf" value="Update Wilayah" onClick="wCompares2_0s2321 = window.open('xx_0.php?bln2=<? echo $bln2-0; 
?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1-0; ?>&thn1=<? echo $thn1; ?>', 
  'wCompares2_0s2321', 'width=680,height=240,left=400,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_0s2321.focus();" class="style1">

</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="1152" border="1" cellpadding="0" cellspacing="0" class="style2">
<tr>
<td width="19" rowspan="2" bgcolor="#ECE9D8"> NO</td>
<td width="24" rowspan="2" bgcolor="#ECE9D8"> TGL</td>
<td colspan="2" bgcolor="#ECE9D8"><div align="center">NAMA   </div></td>
<td width="346" rowspan="2" bgcolor="#ECE9D8"> ALAMAT</td>
<td width="65" rowspan="2" bgcolor="#ECE9D8"> DIAGNOSA</td>
<td   colspan="2" bgcolor="#ECE9D8"><div align="center">KUNJUNGAN<BR>
</div></td>
<td width="92" rowspan="2" bgcolor="#ECE9D8"><div align="center">USIA &lt;20 /&gt;35 TH </div></td>
<td width="42" rowspan="2" bgcolor="#ECE9D8"><div align="center">JARAK 2TH</div></td>
 <td width="48" rowspan="2" bgcolor="#ECE9D8"><div align="center">JL ANAK>4</div></td>
  <td width="52" rowspan="2" bgcolor="#ECE9D8"><div align="center">TB &lt;145CM </div></td>
 <td width="73" rowspan="2" bgcolor="#ECE9D8"><div align="center">BB TRW III &lt;45 KG </div></td>
 <td width="51" rowspan="2" bgcolor="#ECE9D8"><div align="center">LILA&lt;23 CM </div></td>
 <td width="172" rowspan="2" bgcolor="#ECE9D8"><div align="center">HB&lt;11 GR% </div></td>
 <td width="72" rowspan="2" bgcolor="#ECE9D8"><div align="center">FAK RESIKO LAIN </div></td>
 <td width="83" rowspan="2" bgcolor="#ECE9D8"><div align="center">KOMPLIKASI KEHAMILAN </div></td>
 <td width="101" rowspan="2" bgcolor="#ECE9D8"><div align="center">IMUNISASI<br>
   TTI - TT5</div></td>
</tr>
<tr>
<td width="245" bgcolor="#ECE9D8">PASIEN</td>
<td width="168" bgcolor="#ECE9D8">PASANGAN</td>
<td bgcolor="#ECE9D8"><div align="center">B</div></td><td width="29" bgcolor="#ECE9D8"><div align="center">L</div></td>
</tr>
<?
  $gambar ='<img src="../gb/centang.jpg" width="12" height="11">'; 
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


$kdjfkd_Dfdd  = mysql_query("SELECT * FROM anc_2  WHERE Tgl=$Tgl AND Bln=$Bln AND Thn=$Thn ORDER BY id desc LIMIT 0,30");
while($aa = mysql_fetch_array($kdjfkd_Dfdd)){
//
$idkdidd_dfdf = mysql_query("SELECT * FROM anc_nw WHERE IdPasien='$aa[IdPasien]'");
$ub = mysql_fetch_array($idkdidd_dfdf);
//
$pa = $nomer%2;
if($pa==1){
$warna='';
}else{
$warna='bgcolor="#FFCC99"';
}
?>
<tr onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    <? echo $warna; ?> valign="top" onClick="wCompares2_01 = window.open('terimakasi_temen2_poli.php?NoPasien=<? echo $aa[NoPasien]; ?>', 
  'wCompares2_01', 'width=580,height=340,left=100,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2_01.focus();"  >
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="right"><?
  echo "$compare"; 
  ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($aa[NamaPasien])); ?></div></td>
  <td><div align="left"><?
    $ksiks_Sds  = mysql_query("SELECT Alamat,NamaOrtu,JenisKelamin  FROM datapasien WHERE NoPasien='$aa[NoPasien]'");
$up = mysql_fetch_array($ksiks_Sds);
if($up[JenisKelamin]=='P'){
?><font color="#CC0066"><i><?
echo ucfirst(strtolower($up[NamaOrtu]));
 ?></i></font><? 
}else{
echo ucfirst(strtolower($up[NamaOrtu]));
  } ?></div></td>
  <td><div align="left"><?
  echo ucfirst(strtolower($up[Alamat]));   ?></div></td>
  <td><div align="left"><?
 $nab=0;
    $jdsfjdjf = mysql_query("SELECT Diagnosa FROM icd_rj WHERE IdPasien='$aa[IdPasien]'");
while($jk = mysql_fetch_array($jdsfjdjf)){
echo "<i>$jk[Diagnosa] </i>";
$nab++;  }
//
$kejjdfd_dfdf  = mysql_query("SELECT Keterangan FROM anc WHERE IdPasien='$aa[IdPasien]'");
$yg = mysql_fetch_array($kejjdfd_dfdf);
//
?><font color="#990000"><? 
if($nab>0){
   echo "<br>$yg[Keterangan]";
  }else{
  echo "$yg[Keterangan]";
  
  }  ?></font></div></td>
  <?
  $kikikikik  =  mysql_query("SELECT COUNT(id) as jj FROM rwtjalan WHERE NoPasien='$aa[NoPasien]'");
$yf = mysql_fetch_array($kikikikik);
  if($yf[jj]>1){
  $Lama=$yf[jj]; 
  $Baru='-'; 
  }else{
  $Baru=$yf[jj];
 $Lama=''; }
  
   ?><td width="48"><div align="center"><?  
   echo $Baru;  
     ?></div></td>
  <td><div align="center"><?
  echo $Lama; 
   ?></div></td>
  <td><div align="center"><?
  $op_Ffgfg = mysql_query("SELECT Umur FROM rwtjalan WHERE id='$aa[IdPasien]'");
  $uh = mysql_fetch_array($op_Ffgfg);
  echo "$uh[Umur]";
  ?></div></td>
  <td><div align="center">
  <?
    if($ub[Jarak]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  } 
  ?>
  </div></td>
  <td><div align="center">
  <?
    if($ub[JmlAnak]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  } 
  ?>
  </div></td>
  
  <td><div align="center">
  <?
    if($ub[Tb]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  } 
  ?>
  </div></td>
    <td><div align="center">
  <?
    if($ub[BBt]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  } 
  ?>
  </div></td>
     <td><div align="center">
  <?
    if($ub[Lila]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  } 
  ?>
  </div></td>
     <td><div align="center">
  <?
    if($ub[Hb2]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  } 
  ?>
  </div></td>
     <td><div align="center">
  <?
    if($ub[Rrl]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  } 
  ?>
  </div></td>
    <td><div align="center">
  <?
  echo $ub[Komplikasi];
  ?>
  </div></td>
     <td><div align="center">
  <?
    if($ub[imunisasi_tt]==1){
	  echo "$gambar";
	  }else{ echo "-";
	  } 
  ?>
  </div></td>
</tr>
<?
$nomer++; }$mulai++; }?>
<tr>
  <td colspan="26" bgcolor="#ECE9D8">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>