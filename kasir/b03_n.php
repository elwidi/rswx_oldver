<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfdf_DFdfdf =  mysql_query("SELECT * FROM rujukan WHERE id='$id'");
$ii  = mysql_fetch_array($kdjfdf_DFdfdf);
if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#FFFF99">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" >
<tr>
<td width="820" colspan="3"><div align="left" class="style1">
DETAIL DATA PASIEN RUJUKAN DARI <br />
<table border="0" cellpadding="2" cellspacing="2"  class="style1">
<tr>
<td width="126">ID RUJUK</td>
<td width="7">:</td>
<td width="273"><div align="left"><? echo "#$id"; ?></div></td>
</tr>
<tr>
<td>NAMA PERUJUK</td><td>:</td><td><div align="left"><? echo $ii[NamaRujukan]; ?></div></td>
</tr>
<tr>
<td>ALAMAT</td><td>:</td><td><div align="left"><? echo "$ii[Alamat]"; ?></div></td> 
</tr>
<tr>
<td>TELP</td><td>:</td><td><div align="left"><? echo $ii[Telp]; ?></div></td>
</tr>
<tr>
<td>HP</td><td>:</td><td><div align="left"><? echo $ii[Hp]; ?></div></td>
</tr>
</table>
</div></td>
</tr> 
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="819" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="24" bgcolor="#000099"><span class="style2">NO</span></td>
<td width="80" bgcolor="#000099"><span class="style2">TGL</span></td>
<td width="78" bgcolor="#000099"><span class="style2">NO RM</span></td>
<td width="211" bgcolor="#000099"><span class="style2">NAMA PASIEN</span></td>
<td width="159" bgcolor="#000099"><span class="style2">BAGIAN</span></td>
<td width="146" bgcolor="#000099"><span class="style2">DOKTER</span></td>
</tr>
<?
$nomer=1;
$kjdfd_Dfdf  = mysql_query("SELECT * FROM rwtjalan WHERE RujukanDari='$ii[NamaRujukan]' ORDER by  id desc");
while($nn = mysql_fetch_array($kjdfd_Dfdf)){
$par = $nomer%2;
if($par==1){
$warna=' bgcolor="#D7FDD5"';
}else{
$warna='';
}
?>
<tr <? echo $warna;  ?>  valign="top">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo "$nn[TglMasuk]-$nn[BlnMasuk]-$nn[ThnMasuk]"; ?></div></td>
<td><div align="center"><? echo $nn[NoPasien]; ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaPasien])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[Bagian])); ?></div></td>
<td><div align="left"><? echo ucfirst(strtolower($nn[NamaDokter])); ?></div></td>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? } ?>