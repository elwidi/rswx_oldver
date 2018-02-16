<?
session_start();
include "../salaman.php";
include "../konek.php";
$ksikjs= mysql_query("SELECT * FROM kwitansirj WHERE id='$id'"); 
$uu = mysql_fetch_array($ksikjs);
//
$kik_Dfd = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$uu[RegId]'");
$ii =  mysql_fetch_array($kik_Dfd);
//
if(!$uu[id]){
header("Location:../keluar2.php");
}else{
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
-->
</style>
</head>
<body>
<div align="left">
<table border="1">
<tr>
<td width="347" colspan="3"><div align="left" class="style1">
DETAIL INFO PASIEN<br />
<?
echo "$uu[RegId]";
?>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" cellpadding="1" cellspacing="1" class="style2">
  <tR>
  <td width="115">NO RM</td>
  <td width="8">:</td>
  <td width="200"><div align="left"><?
  echo $uu[NoPasien];
  ?></div></td>
  </tR>
  <tr>
  <td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($uu[NamaPasien]); ?></div></td>
  </tr>
  <tr>
  <td>TGL MASUK</td><td>:</td><td><div align="left"><? echo "$ii[TglMasuk]-$ii[BlnMasuk]-$ii[ThnMasuk]"; ?></div></td>
  </tr>
  <tr>
  <td>JAM MASUK</td><td>:</td><td><div align="left"><? echo $ii[JamMasuk]; ?></div></td>
  </tr>
  <tr>
  <td>OPR</td><td>:</td><td><div align="left"><? echo strtoupper($ii[Operator]); ?></div></td>
  </tr>
  <tr>
    <td>BAGIAN</td>
    <td>:</td>
    <td><div align="left"><? echo strtoupper($ii[Bagian]); ?></div></td>
  </tr>
  <tr>
    <td>DOKTER</td>
    <td>:</td>
    <td><div align="left"><? echo $ii[NamaDokter]; ?></div></td>
  </tr>
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
