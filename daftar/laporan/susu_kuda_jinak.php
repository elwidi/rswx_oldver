<?
session_start();
include "../../konek.php";
include "../../ceke.php";
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	color: #CC3333;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="1" class="style1">
<tr>
<td width="28" rowspan="2" bgcolor="#CCCCCC"><span class="style1">NO</span> </td>
<td colspan="2" bgcolor="#CCCCCC">  <div align="center">PASIEN </div></td>
<td colspan="2" bgcolor="#CCCCCC"><div align="center">TGL  </div></td>
<td width="81" rowspan="2" bgcolor="#CCCCCC"> UMUR<br>
  <span class="style2">Thn:Bln:Hari</span></td>
<td width="154" rowspan="2" bgcolor="#CCCCCC"> BAGIAN</td>
<td width="172" rowspan="2" bgcolor="#CCCCCC"> DOKTER</td>
</tr>
<tr>
<td width="68" bgcolor="#CCCCCC">RM</td><td width="163" bgcolor="#CCCCCC">NAMA</td><td width="73" bgcolor="#CCCCCC">MASUK</td><td width="67" bgcolor="#CCCCCC">LAHIR</td>
</tr>
<?
$nomer=1;
if($anak=='baik'){
  $ksk_Sds = mysql_query("SELECT * FROM icd_rj2 WHERE KodeIcd='$KodeIcd' AND JenisKelamin='P' AND UmurThn=0 AND UmurBln=0 AND UmurHari>6
  AND UmurHari<=28");
}elseif($anak=='dimas'){
  $ksk_Sds = mysql_query("SELECT * FROM icd_rj2 WHERE KodeIcd='$KodeIcd' AND JenisKelamin='L' AND UmurThn=0 AND UmurBln=0 AND UmurHari>6
  AND UmurHari<=28");
}elseif($anak=='ela'){
  $ksk_Sds = mysql_query("SELECT * FROM icd_rj2 WHERE KodeIcd='$KodeIcd' AND JenisKelamin='P' AND UmurThn=0 AND UmurBln=0 AND UmurHari<=6");
}else{
  $ksk_Sds = mysql_query("SELECT * FROM icd_rj2 WHERE KodeIcd='$KodeIcd' AND JenisKelamin='L' AND UmurThn=0 AND UmurBln=0 AND UmurHari<=6");
  } 
  while($yap = mysql_fetch_array($ksk_Sds)){
?>
<tr>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $yap[NoPasien]; ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($yap[NamaPasien])); ?></div></td>
  <td><div align="right"><? echo "$yap[Tgl]-$yap[Bln]-$yap[Thn]"; ?></div></td>
  <td><div align="right"><?
  $koldf_dfd = mysql_query("SELECT tgllhr FROM datapasien WHERE NoPasien='$yap[NoPasien]'");
  $up = mysql_fetch_array($koldf_dfd);
  echo "$up[tgllhr]";
  ?></div></td>
  <td><div align="center"><?
  echo "$yap[UmurThn]:$yap[UmurBln]:$yap[UmurHari]";
  ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($yap[Bagian])); ?></div></td>
  <td><div align="left"><? echo ucfirst(strtolower($yap[NamaDokter])); ?></div></td>
</tr>
<? 
$nomer++; } ?>
<tr>
  <td colspan="8" bgcolor="#CCCCCC">&nbsp;</td>
  </tr>
</table>
</div>
</body>
</html>