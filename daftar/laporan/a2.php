<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
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
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="798" colspan="3"><div align="left" class="style1">
PEMETAAN KAMAR<br />
TANGGAL : <?
echo date("d-m-Y");
echo " JAM : "; echo date("H:i:s");
?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
    <tr>
      <td width="18" height="36" bgcolor="#D4D0C8"><strong>NO</strong></td>
      <td width="170" bgcolor="#D4D0C8"><strong>NAMA RUANGAN</strong></td>
      <td width="147" bgcolor="#D4D0C8"><strong>NO RUANGAN</strong></td>
      <td width="36" bgcolor="#D4D0C8"><strong>BED</strong></td>
      <td width="74" bgcolor="#D4D0C8"><strong>NO RM</strong></td>
      <td width="310" bgcolor="#D4D0C8"><strong>NAMA PASIEN</strong></td>
    </tr>
    <?
$nomer=1;
$kdmdk = mysql_query("SELECT * FROM ruangan ORDER BY Lantai,KodeKelas,NoRuangan,NoBed");
while($c = mysql_fetch_array($kdmdk)){
if($Lantai!=$c[Lantai]){
?>
    <tr>
      <td colspan="6" bgcolor="#FFCCCC"><div align="left"> <? echo $c[Lantai];?> </div></td>
    </tr>
    <? 
}
?>
    <?
if($KodeKelas!=$c[KodeKelas]){
?>
    <tr>
      <td colspan="6" bgcolor="#CCFFCC"><div align="left">KELAS :
        <?  echo strtoupper($c[NamaKelas]); ?>
      </div></td>
    </tr>
    <? 
}
?>
    <tr>
      <td><div align="center"><? echo $nomer; ?></div></td>
      <td><div align="left"><? echo ucfirst(strtolower($c[NamaRuangan])); ?></div></td>
      <td><div align="left"><? echo $c[NoRuangan];  ?></div></td>
	  <td><div align="center"><? echo $c[NoBed]; ?></div></td>
	  <td><div align="left"><?  
	  $jsmj = mysql_query("SELECT NoPasien,NamaPasien FROM keluarmasukpasien WHERE TglKeluar=0 AND transferKe='$c[id]-$c[KodeKelas]'");
	  $ya = mysql_fetch_array($jsmj);
	  echo $ya[NoPasien];
	   ?></div></td>
	  	  <td><div align="left"><? 
		  echo ucfirst(strtolower($ya[NamaPasien])); 
		  ?></div></td>
    </tr>
    <?
$Lantai = $c[Lantai];
$KodeKelas = $c[KodeKelas];
$nomer++; } ?>
  </table>
</div></td>
</tr>
</table>
</div>
</body>
</html>
<? 
}
?>