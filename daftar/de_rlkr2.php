<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NamaDokter  = $_GET["NamaDokter"];
$IdPenjamin = $_GET["IdPenjamin"];
 $NamaPenjamin = $_GET["NamaPenjamin"];
$id = $_GET["id"];
$NamaPoli = $_GET["NamaPoli"];
$IdDokter = $_GET["IdDokter"];
$NamaRujukan = $_GET["NamaRujukan"];
$IdRujukan = $_GET["IdRujukan"];

$IdDept = $_GET["IdDept"];

if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#999999';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="555" colspan="3"><div align="left">
 LIST DATA DOKTER<br>
 <form target="_self">
 
 <input type="hidden" name="IdPenjamin" value="<? echo $IdPenjamin; ?>">
<input type="hidden" name="NamaDokter" value="<? echo $NamaDokter; ?>">
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="NamaPoli" value="<? echo $NamaPoli; ?>">
<input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">
<input type="hidden" name="NamaRujukan" value="<? echo $NamaRujukan; ?>">
<input type="hidden" name="IdRujukan" value="<? echo $IdRujukan; ?>">
<input type="hidden" name="IdDept" value="<? echo $IdDept; ?>">

 <table border="0" cellpadding="0" cellspacing="0"  class="style1">
 <tr>
 <td width="81">NAMA</td>
 <td width="8">:</td>
 <td width="430"><div align="left"> 
 <input type="text"\ name="NamaDokter" maxlength="30" size="20" class="style1">
 <input type="hidden"  name="mas" value="hari">
  || 
  <input type="submit" value="Sort" name="dfd" class="style1">
  <input type="button" name="fgf" value="Selesai" onClick="window.close()" class="style1">
  </div></td>
 </tr>
 </table>
 </form>
</div></td>
</tr>
<TR>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style1">
<tr>
<td width="18" bgcolor="#D4D0C8"><strong>NO</strong></td><td width="61" bgcolor="#D4D0C8"><strong>KODE</strong></td><td width="184" bgcolor="#D4D0C8"><strong>NAMA DOKTER</strong></td><td width="113" bgcolor="#D4D0C8"><strong>SPC</strong></td><td width="142" bgcolor="#D4D0C8"><strong>BAGIAN</strong></td>
</tr>
<?
$nomer  = 1;

$djkdjkdk  = mysql_query("SELECT * FROM dokter WHERE NamaDokter LIKE '$NamaDokter%'");
while($s = mysql_fetch_array($djkdjkdk)){
?>
<tr  onClick="location.href='bgt_m.php?IdDept=<? echo $IdDept; ?>&IdPenjamin=<? echo $IdPenjamin; ?>&NamaDokter=%&id=<? echo $id; ?>&IdDokter=<? echo $s[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $s[id]; ?></div></td>
<td><div align="left"><? echo $s[NamaDokter]; ?></div></td>
<td><div align="left"><? 
$Spc = mysql_query("SELECT NamaSpc FROM specialisasi WHERE id='$s[KodeSpc]'");
$hh = mysql_fetch_array($Spc);
echo strtoupper($hh[NamaSpc]);
?></div></td>
<td><div align="left"><? 
$Bag = mysql_query("SELECT NamaBagian FROM bagian WHERE id='$s[IdBagian]'");
$xa = mysql_fetch_array($Bag);
echo strtoupper($xa[NamaBagian]);
?></div></td>
</tr>
 <?
$nomer++; } ?><tr>
  <td colspan="5" bgcolor="#D4D0C8"><span class="style1">.</span></td>
  </tr>
</table>
</div>
</td>
</TR>
</table>
</div>
</body>
</html>
<?
}
?>