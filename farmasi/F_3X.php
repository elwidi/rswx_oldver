<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-11' WHERE id='$a[id]'");
}
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;  
}
.style122 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px; font-style:italic
}
.style2 {font-weight: bold}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="348" colspan="3"><div align="left" class="style2">
BUKTI TRANSAKSI GLOBAL<br>
RAWAT INAP
  </div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td width="107">NO RM</td>
<td width="3">:</td>
<td width="195"><div align="left">
<? echo $ii[NoPasien]; ?>
</div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($ii[NamaPasien]); ?></div></td>
</tr>
<tr>
<td>TUJUAN</td><td>:</td><td><div align="left"><? echo strtoupper($ii[Bagian]); ?></div></td>
</tr>
</table>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" cellpadding="0" cellspacing="1">
<tr class="style1">
<td width="18" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="165" bgcolor="#D4D0C8"><strong>NAMA OBAT</strong></td>
<td width="41" bgcolor="#D4D0C8"><strong>QTY</strong></td>
<td width="70" bgcolor="#D4D0C8"><div align="right"><strong>TOTAL</strong></div></td>
</tr>
<?
$nomer =1;	$bas=1;
$kdjd = mysql_query("SELECT * FROM ri_resep WHERE IdPasien='$id' ORDER BY NoResep");
while($mm = mysql_fetch_array($kdjd)){
 $no=1; 
	$namjsm = mysql_query("SELECT * FROM jualobat_tmp2 WHERE RegId='$ii[MstKey]' AND JamTran='$mm[NoResep]' ORDER BY apa_r,JamTran DESC");
	while($aa =  mysql_fetch_array($namjsm)){
	if($NoResep!=$mm[NoResep] && $NoResep!=''){
	//$bas++; 
	}
	if($Rck!=$aa[apa_r] && $Rck!=''){
	$no=1; $bas++;?>
	<tr class="style1">
	<td colspan="3" bgcolor="#D4D0C8"><div align="center"><strong><em>SUB TOT</em></strong></div></td>
	<td bgcolor="#D4D0C8"><div align="right"><strong><em>
	  <? 
	if($Rck==1){
	 $JHGJHG = mysql_query("SELECT Racikan FROM  racikembal  WHERE id=1");
$gu = mysql_fetch_array($JHGJHG);
  $to = $to + $gu[Racikan];
}else{
  $to = $to;
}
	echo number_format($to); // echo "($Rck)";
	
 $to=0;
	 ?>
	</em></strong></div></td>
	</tr>
	<?
	} 
	

	
	if($aa[apa_r]==1){
	$warna='class="style122"';
	}else{
		$warna='class="style1"';
	}?>
<tr <? echo $warna; ?> valign="top">
<td><div align="center"><? 
//echo "<b>$bas</b>";
 if($no==1){
 echo $bas; 
}else{ echo "."; }  ?></div></td>
<td><div align="left"><? 
  echo $aa[NamaObat]; ?></div></td>
<td><div align="left"><? echo number_format($aa[Qty]);  ?></div></td>
<td><div align="right"><?
$to = $to + $aa[JmlHargaBeli];
$to2 = $to2 + $aa[JmlHargaBeli];
if($aa[apa_r]==0){
	$normal=$aa[JmlHargaBeli];
 	echo number_format($normal); 
}else{
	//$Racik=$aa[JmlHargaBeli];
}
?></div></td>
</tr>

<?
 
 $no++;$Rck = $aa[apa_r];
$NoResep=$mm[NoResep];
//$bas++;
   }   ?> 
<?
$nomer++;  } ?><tr class="style1">
	<td colspan="3" bgcolor="#D4D0C8"><div align="center"><strong><em>SUB TOT</em></strong></div></td>
	<td bgcolor="#D4D0C8"><div align="right"><strong><em>
	  <?  
	 $JHGJHG = mysql_query("SELECT Racikan FROM  racikembal  WHERE id=1");
$gu = mysql_fetch_array($JHGJHG);
  $totRacik = $gu[Racikan];
if($aa[apa_r]==1){
echo number_format($to);  
}else{
echo number_format($to); 
}
 $to=0;
	 ?>
	</em></strong></div></td>
	</tr><tr class="style1" valign="top">
  <td colspan="3" bgcolor="#D4D0C8"><div align="center"><strong><em>GRAND TOT </em></strong></div></td>
<td bgcolor="#D4D0C8"><div align="right"><strong><em><? echo number_format($to2);
 $to=0;
	 ?></em></strong></div></td></tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}?>