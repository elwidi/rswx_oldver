<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
//header('Refresh: 10');
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
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
<table width="3111" border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="3"><div align="left" class="style1">
LAPORAN RL 4B
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr valign="top">
 <td bgcolor="#ECE9D8"><strong>KODE PROPINSI</strong></td>
  <td bgcolor="#ECE9D8"><strong>KAB/KOTA</strong></td>
 <td bgcolor="#ECE9D8"><strong>KODE RS</strong></td> 
<td bgcolor="#ECE9D8"><strong>NAMA RS</strong></td><td bgcolor="#ECE9D8"><strong>THN</strong></td><td bgcolor="#ECE9D8"><strong>NO URUT</strong></td>
 <td bgcolor="#ECE9D8"><strong>NO DTD</strong></td><td bgcolor="#ECE9D8"><strong>NO DAFTAR<br />
 TERPERINCI</strong></td><td bgcolor="#ECE9D8"><strong>GOLONGAN SEBAB<br />
   PENYAKIT</strong></td><td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_0-&lt;=6 hr_L</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_0-&lt;=6 hr_P</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;6-&lt;=28hr_L</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;6-&lt;=28hr_P</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;28hr-&lt;=1th_L</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;28hr-&lt;=1th _P</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_ &gt;1-&lt;=4th_L</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;1-&lt;=4th_P</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;4-&lt;=14th_L</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;4-&lt;=14th_P</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;14-&lt;=24th_L</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;14-&lt;=24th_P</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;24-&lt;=44th_L</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;24-&lt;=44th_P</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;44-&lt;=64th_L</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;44-&lt;=64th_P</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;64th_L</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH PASIEN KASUS MENURUT GOLONGAN UMUR&amp;SEX_&gt;64th_P</strong></td>
 <td bgcolor="#ECE9D8"><strong>KASUS BARU MENURUT JENIS KELAMIN_LK</strong></td>
 <td bgcolor="#ECE9D8"><strong>KASUS BARU MENURUT JENIS KELAMIN_PR</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH KASUS BARU (23+24)</strong></td>
 <td bgcolor="#ECE9D8"><strong>JUMLAH KUNJUNGAN</strong></td>
</tr>
<?
$nomer=1;
$kjdi_Ddfd  = mysql_query("SELECT * FROM rl4b ORDER BY id asc LIMIT 0,50");
while($xx = mysql_fetch_array($kjdi_Ddfd)){
$pcd = $nomer%2;
if($pcd==1){
$warna='';
}else{
$warna=' bgcolor="#CBFEBA"';
}
?>
<tr <? echo $warna; ?>  valign="top" >
  <td>32PROP</td>
  <td>BEKASI</td>
  <td>3275039</td>
  <td> YADIKA</td>
  <td>2013</td>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="center"><? echo $xx[NoDtd]; ?></div></td>
   <td><div align="left"><? echo $xx[NoData]; ?></div></td>
   <td><div align="left"><? echo ucfirst($xx[Diagnosa]);?></div></td>
  <?
    $ksk_Sds = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn=0 AND UmurBln=0 AND UmurHari<=6");
  $yap = mysql_fetch_array($ksk_Sds);
  ?><td <?
  if($yap[jj]>0){
  ?>onClick="wCompare_01va = window.open('susu_kuda_jinak.php?KodeIcd=<? echo $xx[id]; ?>&anak=fito', 
  'wCompare_01va', 'width=800,height=300,left=270,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_01va.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?> ><div align="center"><?
 if($yap[jj]>0){
  echo $yap[jj];
  }else{
  echo "-";
  } 
  ?></div></td><?
    $ksk_Sds2 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn=0 AND UmurBln=0 AND UmurHari<=6");
  $yap2 = mysql_fetch_array($ksk_Sds2);
  ?>
  <td  <?
  if($yap2[jj]>0){
  ?>onClick="wCompare_01va = window.open('susu_kuda_jinak.php?KodeIcd=<? echo $xx[id]; ?>&anak=ela', 
  'wCompare_01va', 'width=800,height=300,left=270,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_01va.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><?
 
 if($yap2[jj]>0){
  echo $yap2[jj];
  }else{
  echo "-";
  } ?></div></td><?
   $ksk_Sds3 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn=0 AND UmurBln=0 AND UmurHari>6
  AND UmurHari<=28");
  $yap3 = mysql_fetch_array($ksk_Sds3);
  ?>
    <td  <?
  if($yap3[jj]>0){
  ?>onClick="wCompare_01va = window.open('susu_kuda_jinak.php?KodeIcd=<? echo $xx[id]; ?>&anak=dimas', 
  'wCompare_01va', 'width=800,height=300,left=270,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_01va.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><?
  if($yap3[jj]>0){
  echo $yap3[jj];
  }else{
  echo "-";
  }
  ?></div></td><?
   $ksk_Sds4 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn=0 AND UmurBln=0 AND UmurHari>6
  AND UmurHari<=28");
  $yap4 = mysql_fetch_array($ksk_Sds4);
  ?>
     <td  <?
  if($yap4[jj]>0){
  ?>onClick="wCompare_01va = window.open('susu_kuda_jinak.php?KodeIcd=<? echo $xx[id]; ?>&anak=baik', 
  'wCompare_01va', 'width=800,height=300,left=270,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_01va.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" <? } ?>><div align="center"><?
   echo $yap4[jj];
  ?></div></td>  <td><div align="center"><?
  $ksk_Sds5 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn<=1 AND UmurHari>28
  OR KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn=1 OR KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn<=1 AND UmurBln>=1");
  $yap5 = mysql_fetch_array($ksk_Sds5);
  echo $yap5[jj];
  ?></div></td>
<td><div align="center"><?
  $ksk_Sds6 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn<=1 AND UmurHari>28
  OR KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn=1  OR KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn<=1 AND UmurBln>=1");
  $yap6 = mysql_fetch_array($ksk_Sds6);
  echo $yap6[jj];
  ?></div></td>
<td><div align="center"><?
  $ksk_Sds7 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn<=4 AND UmurThn>1");
  $yap7 = mysql_fetch_array($ksk_Sds7);
  echo $yap7[jj];
  ?></div></td>
  <td><div align="center"><?
  $ksk_Sds8 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn<=4 AND UmurThn>1");
  $yap8 = mysql_fetch_array($ksk_Sds8);
  echo $yap8[jj];
  ?></div></td>
<td><div align="center"><?
  $ksk_Sds9 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn<=14 AND UmurThn>4");
  $yap9 = mysql_fetch_array($ksk_Sds9);
  echo $yap9[jj];
  ?></div></td> 
  <td><div align="center"><?
  $ksk_Sds10 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn<=14 AND UmurThn>4");
  $yap10 = mysql_fetch_array($ksk_Sds10);
  echo $yap10[jj];
  ?></div></td> 
  <td><div align="center"><?
  $ksk_Sds11 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn<=24 AND UmurThn>14");
  $yap11 = mysql_fetch_array($ksk_Sds11);
  echo $yap11[jj];
  ?></div></td> 
 <td><div align="center"><?
  $ksk_Sds12 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn<=24 AND UmurThn>14");
  $yap12 = mysql_fetch_array($ksk_Sds12);
  echo $yap12[jj];
  ?></div></td>  
   <td><div align="center"><?
  $ksk_Sds13 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn<=44 AND UmurThn>24");
  $yap13 = mysql_fetch_array($ksk_Sds13);
  echo $yap13[jj];
  ?></div></td>  
   <td><div align="center"><?
  $ksk_Sds14 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn<=44 AND UmurThn>24");
  $yap14 = mysql_fetch_array($ksk_Sds14);
  echo $yap14[jj];
  ?></div></td> 
    <td><div align="center"><?
  $ksk_Sds15 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L' AND UmurThn<=64 AND UmurThn>44");
  $yap15 = mysql_fetch_array($ksk_Sds15);
  echo $yap15[jj];
  ?></div></td>  
   <td><div align="center"><?
  $ksk_Sds16 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P' AND UmurThn<=64 AND UmurThn>44");
  $yap16 = mysql_fetch_array($ksk_Sds16);
  echo $yap16[jj];
  ?></div></td> 
  <td><div align="center"><?
  $ksk_Sds17 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L' AND  UmurThn>64");
  $yap17 = mysql_fetch_array($ksk_Sds17);
  echo $yap17[jj];
  ?></div></td>  
   <td><div align="center"><?
  $ksk_Sds18 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P' AND  UmurThn>64");
  $yap18 = mysql_fetch_array($ksk_Sds18);
  echo $yap18[jj];
  ?></div></td> 
 <td><div align="center"><?
  $ksk_Sds19 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='L'");
  $yap19 = mysql_fetch_array($ksk_Sds19);
  echo $yap19[jj];
  ?></div></td>  
   <td><div align="center"><?
  $ksk_Sds20 = mysql_query("SELECT COUNT(id) AS jj FROM icd_rj2 WHERE KodeIcd='$xx[id]' AND JenisKelamin='P'");
  $yap20 = mysql_fetch_array($ksk_Sds20);
  echo $yap20[jj];
  ?></div></td> 
  <td>&nbsp;</td>
  <td><div align="center"><?
  $toto = $yap19[jj] + $yap20[jj];
  echo $toto; 
  ?></div></td>
</tr>
<?
$nomer++; } ?>
<tr>
  <td colspan="29" bgcolor="#ECE9D8">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>