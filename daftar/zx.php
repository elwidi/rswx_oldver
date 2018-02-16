<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$tgl1= $_GET["tgl1"];
$tgl2= $_GET["tgl2"];
$bln= $_GET["bln2"];
$thn1= $_GET["thn1"];
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
	color: #000099;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000099;
}
.style5 {color: #000066; font-weight: bold; }
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #000099;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="1226" colspan="3"><div align="left" class="style1">
LIST DATA PASIEN BATAL <br />
PERIODE : <? echo "$tgl1 sd $tgl2 ";
include "../bulan.php";
 ?>
<br>&nbsp;</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<a href="index.php" class="style6" style="text-decoration:none">KEMBALI</a>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="29" rowspan="2" bgcolor="#CCCCCC"><span class="style5"> NO</span></td>
<td width="57" rowspan="2" bgcolor="#CCCCCC"><span class="style5"> NO RM</span></td>
<td width="230" rowspan="2" bgcolor="#CCCCCC"><span class="style5"> NAMA PASIEN</span></td>
<td width="200" rowspan="2" bgcolor="#CCCCCC"><span class="style5">BAGIAN</span></td>
<td width="190" rowspan="2" bgcolor="#CCCCCC"><span class="style5">DOKTER</span></td>
<td width="220" rowspan="2" bgcolor="#CCCCCC"><span class="style5">ALASAN</span></td>
<td width="132" rowspan="2" bgcolor="#CCCCCC"><span class="style5">
PENDAFTAR
</span>
<td width="105" rowspan="2" bgcolor="#CCCCCC"><span class="style5">PEMBATAL</span></td>
<td colspan="2" bgcolor="#CCCCCC"><div align="center" class="style5">TGL  </div></td>
<td colspan="2" bgcolor="#CCCCCC">  <div align="center" class="style5">JAM </div></td>
</tr>
<tr>
<td width="56" bgcolor="#CCCCCC"><span class="style5">MASUK</span></td>
<td width="61" bgcolor="#CCCCCC"><span class="style5">BATAL</span></td>
<td width="59" bgcolor="#CCCCCC"><span class="style5">MASUK</span></td>
<td width="68" bgcolor="#CCCCCC"><span class="style5">BATAL</span></td>
</tr><?
$nomer=1;
$kdjfldkfldkfld = mysql_query("SELECT * FROM rwtjalan_btl 
where TglMasuk>=$tgl1 AND TglMasuk<=$tgl2 AND BlnMasuk=$bln AND ThnMasuk=$thn1 ORDER BY id DESC");
while($kk = mysql_fetch_array($kdjfldkfldkfld)){
$we =  $nomer %2;
if($we==1){
 $warna ='bgcolor="#FFCCCC"';
 }else{
 $warna ='';
}
 ?>
<tr <? echo $warna; ?>>  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="center"><? echo $kk[NoPasien]; ?></div></td>
  <td><div align="left"><? echo strtoupper($kk[NamaPasien]); ?></div></td>
  <td><div align="left"><? echo strtoupper($kk[Bagian]); ?></div></td>
  <td><div align="left"><? echo $kk[NamaDokter]; ?></div></td>
  <td><div align="left"><? echo strtoupper($kk[Alasan]); ?></div></td>
  <td><div align="left"><? echo strtoupper($kk[Operator]); ?></div></td>
  <td><div align="left"><? echo strtoupper($kk[Pembatal]); ?></div></td>
  <td><div align="left"><? echo "$kk[TglMasuk]-$kk[BlnMasuk]-$kk[ThnMasuk]"; ?></div></td>
  <td><div align="left"><? 
  $pcd = explode("-",$kk[JamBatal]);
  echo $pcd[0];
  ?></div></td>
  <td><div align="center"><? echo $kk[JamMasuk]; ?></div></td>
  <td><div align="center"><? echo $pcd[1]; ?></div></td>
  </tr>
<? $nomer++; 
}
?>
<tr>
  <td colspan="12" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
