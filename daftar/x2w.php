<?
session_start();
include "../konek.php";
include "../ceke.php";
$Rujuk = $_GET["Rujuk"];
$id  = $_GET["id"];
$mas = $_GET["mas"];
$IdPer=$_GET["IdPer"];
$KodeICD = $_GET["KodeICD"];
$NamaICD = $_GET["NamaICD"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
 if(!$uu[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
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
<td width="808" colspan="3"><div align="left" class="style1">
LIST DATA HISTORY UPDATE
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="797" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="24" bgcolor="#D4D0C8"><strong>NO</strong></td>
<td width="214" bgcolor="#D4D0C8"><strong>DT LAMA</strong></td>
<td width="247" bgcolor="#D4D0C8"><strong>DT BARU</strong></td>
<td width="121" bgcolor="#D4D0C8"><strong>OPR</strong></td>
<td width="81" bgcolor="#D4D0C8"><strong>TGL</strong></td>
<td width="72" bgcolor="#D4D0C8"><strong>JAM</strong></td>
</tr>
<?
$nomer=1;
$kdjfd = mysql_query("SELECT * FROM gantidokterrj WHERE IdPasien='$id' AND Jenis='$Rujuk' ORDER BY id DESC");
while($kk = mysql_fetch_array($kdjfd)){
?>
<tr>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? 
if($Rujuk=='Rujuk'){
$dlfdlf = mysql_query("SELECT * FROM rujukan WHERE id='$kk[DokterLama]'");
}else{
$dlfdlf = mysql_query("SELECT * FROM dokter WHERE id='$kk[DokterLama]'");
}
$ub = mysql_fetch_array($dlfdlf);
if($Rujuk=='Rujuk'){
echo strtoupper($ub[NamaRujukan]); 
}else{
echo $ub[NamaDokter];
}
?></div></td>
<td><div align="left"><? 
if($Rujuk=='Rujuk'){
$dlfdlf2 = mysql_query("SELECT * FROM rujukan WHERE id='$kk[DokterBaru]'");
}else{
$dlfdlf2 = mysql_query("SELECT * FROM dokter WHERE id='$kk[DokterBaru]'");
}
$ub2 = mysql_fetch_array($dlfdlf2);
if($Rujuk=='Rujuk'){
echo strtoupper($ub2[NamaRujukan]); 
}else{
echo $ub2[NamaDokter];
}
?></div></td>
<td><div align="left"><? echo strtoupper($ub2[Opr]); ?></div></td>
<td><div align="left"><?  $pc= explode(".",$kk[TglJam]);
echo $pc[0];
 ?></div></td>
 <td><div align="left"><? echo $pc[1]; ?></div></td>
</tr>
 <? 
$nomer++; 
}?><tr>
  <td colspan="6" bgcolor="#D4D0C8">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? 
}
?>