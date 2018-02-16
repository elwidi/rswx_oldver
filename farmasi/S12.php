<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-11' WHERE id='$a[id]'");
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
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
.style111 {
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
  <td width="458" colspan="3" valign="top">
  <div align="left">
  <span class="style1">LIST DATA DENGAN STOK MINIMAL<br>
PERIODE : <? echo date("d.m.Y"); ?>  </span>
  </div>
  </td>
  </tr>
  <tr>
  <td colspan="3" valign="top">
  <div align="left">
  <form target="_self">
  <table border="0" cellpadding="1" cellspacing="1" class="style111">
  <tr>
  <td width="64">NAMA</td>
  <td width="8">:</td>
  <td width="356"><div align="left">
  <input name="NamaObat" type="text" class="style111" size="20" maxlength="120">
  
  <input type="hidden" name="anak" value="3">
  <input type="submit" value="Sort" name="fgf" class="style111" style="background:#FFFF99">
  <input type="button" name="fgfgf" value="Kembali" onClick="location.href='index.php';" style="background:#FFFF99" class="style111">
  </div></td>
  </tr>
  </table>
  </form>
  </div>
  </td>
  </tr>
  <tr>
  <td colspan="3" valign="top">
  <div align="left">
    <table border="1" cellpadding="1" cellspacing="1" class="style111">
<tr>
<td width="24" bgcolor="#D4D0C8"><div align="center"><strong>NO</strong></div></td>
<td width="247" bgcolor="#D4D0C8"><strong>NAMA OBAT</strong></td>
<td width="45" bgcolor="#D4D0C8"><div align="center"><strong>MIN</strong></div></td>
<td width="57" bgcolor="#D4D0C8"><div align="center"><strong>MAX</strong></div></td>
<td width="55" bgcolor="#D4D0C8"><div align="center"><strong>REAL</strong></div></td>
<td width="55" bgcolor="#D4D0C8"><div align="center"><strong>GOLONGAN</strong></div></td>
</tr>
<?
$nomer=1;
if($anak==3){
$kdldkm_dfd = mysql_query("SELECT id,NamaObat,Min,Max,StokAwal,NamaGolongan FROM dataobat WHERE NamaObat like '$NamaObat%'
AND NamaObat!=''   ORDER BY NamaObat LIMIT 0,100");
}else{
$kdldkm_dfd = mysql_query("SELECT id,NamaObat,Min,Max,StokAwal,NamaGolongan FROM dataobat WHERE NamaObat !=''  ORDER BY NamaObat LIMIT 0,100");
}
while($c = mysql_fetch_array($kdldkm_dfd)){
$sa=2;
include "huting.php";
if($c[Min]>=$Stok){
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo strtoupper($c[NamaObat]); ?></div></td>
<td><div align="center" ><? echo $c[Min]; ?></div></td>
<td><div align="center"><? echo $c[Max]; ?></div></td> 
<td><div align="center"><?  echo number_format($Stok); ?></div></td> 
<td><div align="left"><? $Gol =strtoupper($c[NamaGolongan]); 
if($Gol=='ORAL'){
?><font color="#990000"><i><? echo $Gol; ?></i></font><?
}elseif($Gol=='CAIRAN'){
?><font color="#006600"><i><? echo $Gol; ?></i></font><?
}elseif($Gol=='ALKES'){
?><font color="#FFCC00"><b><? echo $Gol; ?></b></font><?
}elseif($Gol=='INJEKSI'){
?><b><u><? echo "$Gol";?></u></b><?  
}else{
echo $Gol;
}
?></div></td>
</tr>
<?
 
$nomer++; }} ?>
</table>
  </div>
  </td>
  </tr>
  </table>

</div>
<div align="center"></div></body>
</html>
<? 
}else{

}?>
