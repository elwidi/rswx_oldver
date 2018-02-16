<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$ldkfldfkdlfkldkfld = mysql_query("SELECT * FROM akti_icd_1 WHERE id='$id'");
$uu = mysql_fetch_array($ldkfldfkdlfkldkfld);
$nn=$uu;
if(!$uu[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif($Bln>0 && $Thn>=2000){
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
	font-size: 11px;
 }
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="799" colspan="3"><div align="left">
<span class="style1">DETAIL DATA </span><br />
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="78">Kode Icd</td>
<td width="8">:</td>
<td width="265"><div align="left"><?
echo $uu[KodeIcd];
?></div></td>
</tr>
<tr>
<td>Diagnosa</td><td>:</td><td><div align="left"><?
echo $uu[Diagnosa]; 
?></div></td>
</tr>
<tr>
<td>Periode</td><TD>:</TD><td><div align="left"><?
$bln=$Bln; $thn1=$Thn;
include "../../bulan.php";
?></div></td>
</tr>
</table>
 </div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="13" bgcolor="#663399"><span class="style3">No</span></td>
  <td width="66" bgcolor="#663399"><span class="style3">RegId</span></td>
  <td width="70" bgcolor="#663399"><span class="style3">Tgl</span></td>
  <td width="53" bgcolor="#663399"><span class="style3">No Rm</span></td>
  <td width="124" bgcolor="#663399"><span class="style3">Nama Pasien</span></td>
    <td width="109" bgcolor="#663399"><div align="center"><span class="style3">Umur<BR>
      Th:Bl:Hr</span></div></td>
<td width="144" bgcolor="#663399"><span class="style3">Dokter</span></td>
  <td width="109" bgcolor="#663399"><span class="style3">Bagian</span></td>
   <td width="62" bgcolor="#663399"><span class="style3">TglJam</span></td>
  </tr>
  <?
  $nomer=1;
  if($angka==3){
    $satu = mysql_query("SELECT * FROM icd_rj 
   WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>1 AND
	  UmurThn<=4");
  }elseif($angka==5){
   $satu = mysql_query("SELECT * FROM icd_rj WHERE 
    WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>14 AND
	  UmurThn<=24");
	    }elseif($angka==6){
   $satu = mysql_query("SELECT * FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>=25 AND
	  UmurThn<=44");
	    }elseif($angka==7){
   $satu = mysql_query("SELECT * FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>=45 AND
	  UmurThn<=64");
  }elseif($angka==4){
   $satu = mysql_query("SELECT * FROM icd_rj  WHERE
    Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$nn[KodeIcd]' AND UmurThn>4 AND
	  UmurThn<=14");
	   }elseif($angka==2){
   $satu = mysql_query("SELECT * FROM icd_rj 
   WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$uu[KodeIcd]' AND UmurThn=0 AND
	 UmurBln=0 AND UmurHari<=28");
	   }else{
   $satu = mysql_query("SELECT * FROM icd_rj WHERE Bln='$Bln' AND Thn='$Thn' AND KodeIcd='$uu[KodeIcd]' AND UmurThn=0 AND
	 UmurBln=0 AND UmurHari<=28");
}	
  while($aa = mysql_fetch_array($satu)){
	 $yah = mysql_query("SELECT * FROM rwtjalan WHERE id='$aa[IdPasien]'");
$dap = mysql_fetch_array($yah);
$na = $nomer%2;
if($na==1){
$warna=' bgcolor="#FEECCB"';
}else{
$warna='bgcolor="#E0FEC0"';
}
  ?>
  <tr valign="top" <? echo $warna; ?> >
    <td><div align="center"><?
	echo $nomer; 
	?></div></td>
    <td><div align="left">
      <?
	echo $dap[RegId]; ?>
    </div></td>
    <td><div align="left"><? echo "$dap[TglMasuk]-$dap[BlnMasuk]-$dap[ThnMasuk]"; ?></div></td>
     <td><div align="left">
       <?
	echo $dap[NoPasien]; ?>
     </div></td>
  <td><div align="left">
    <?
	echo ucfirst(strtolower($dap[NamaPasien])); ?>
  </div></td>
  <td><div align="center"><?
  echo "$dap[Umur]:$dap[BlnUmur]";
  ?></div></td>
	  <td><div align="left">
	    <?
	echo $dap[NamaDokter]; ?>
	    </div></td>
 <td><div align="left">
   <?
	echo ucfirst(strtolower($dap[Bagian])); ?>
 </div></td>   
 
<td><div align="left">
	    <?
	echo $aa[Jam]; ?>
	    </div></td>  </tr>
  <?
  $nomer++; } ?>
  <tr>
    <td colspan="9" bgcolor="#663399">&nbsp;</td>
    </tr>
  </table>
  </div></td>
</tr>
</table>
</body>
</html>
<?
}
?>