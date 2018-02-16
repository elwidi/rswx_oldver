<?php 
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF3399';
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
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
.style5 {color: #000066; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="911" colspan="3"><div align="left" class="style1">
HASIL DENGAN PEMERIKSAAN KHUSUS
</div></td>
</tr>
<tr class="style1">
<td colspan="3"><div align="left">
<input type="button" name="FGFGF" value="Kembali" onClick="location.href='index.php';" class="style1">
 || <input type="button" name="FGFGF" value="Cek Periode"   class="style1">

</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="946" border="1" class="style2">
<tr>
<td width="25" rowspan="2" bgcolor="#EBFEF3"><div align="center"><span class="style5">NO</span></div></td><td colspan="2" bgcolor="#EBFEF3"><div align="center" class="style5">ERITROSIT</div></td><td  colspan="2" bgcolor="#EBFEF3"><div align="center" class="style5">LEUKOSIT</div></td><td  colspan="2" bgcolor="#EBFEF3"><div align="center" class="style5">HITUNG JENIS</div></td>
<td  colspan="2" bgcolor="#EBFEF3"><div align="center" class="style5">TROMBOSIT</div></td>
<td  colspan="2" bgcolor="#EBFEF3"><div align="center" class="style5">EPITEL</div></td>
<td  colspan="2" bgcolor="#EBFEF3"><div align="center" class="style5">BTA</div></td>
<td  colspan="2" bgcolor="#EBFEF3"><div align="center" class="style5">JAMUR</div></td>
</tr>
<tr>
<td width="56" bgcolor="#EBFEF3"><div align="center" class="style5">sub 1</div></td><td width="57" bgcolor="#EBFEF3"><div align="center" class="style5">sub 2</div></td>
<td width="61" bgcolor="#EBFEF3"><div align="center" class="style5">sub 1</div></td><td width="51" bgcolor="#EBFEF3"><div align="center" class="style5">sub 2</div></td>
<td width="66" bgcolor="#EBFEF3"><div align="center" class="style5">sub 1</div></td><td width="41" bgcolor="#EBFEF3"><div align="center" class="style5">sub 2</div></td>
<td width="52" bgcolor="#EBFEF3"><div align="center" class="style5">sub 1</div></td><td width="61" bgcolor="#EBFEF3"><div align="center" class="style5">sub 2</div></td>
<td width="64" bgcolor="#EBFEF3"><div align="center" class="style5">sub 1</div></td><td width="56" bgcolor="#EBFEF3"><div align="center" class="style5">sub 2</div></td>
<td width="48" bgcolor="#EBFEF3"><div align="center" class="style5">sub 1</div></td><td width="60" bgcolor="#EBFEF3"><div align="center" class="style5">sub 2</div></td>
<td width="67" bgcolor="#EBFEF3"><div align="center" class="style5">sub 1</div></td><td width="87" bgcolor="#EBFEF3"><div align="center" class="style5">sub 2</div></td>
</tr>
<tr>
<td><div align="center">1</div></td>
<td  onClick="wCompare_e_maka_eee = window.open('x_tra.php?angka=1', 
  'wCompare_e_maka_eee', 'width=930,height=240,left=90,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_e_maka_eee.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><div align="center"><?
$satu = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_lab WHERE NamaBiaya LIKE '%Eritrosit%'"); 
$yap = mysql_fetch_array($satu);
echo "$yap[jj]";
?></div></td>
<td><div align="center"><?
$satux = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_sublab  WHERE NamaBiaya LIKE '%Eritrosit%'"); 
$yapx = mysql_fetch_array($satux);
echo "$yapx[jj]";
?></div></td>

<td><div align="center"><?
$dua = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_lab WHERE NamaBiaya LIKE '%Leukos%'"); 
$yap2 = mysql_fetch_array($dua);
echo number_format($yap2[jj]);
?></div></td>

<td><div align="center"><?
$duax = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_sublab WHERE NamaBiaya LIKE '%Leukos%'"); 
$yap2x = mysql_fetch_array($duax);
echo number_format($yap2x[jj]);
?></div></td>

<td><div align="center"><?
$tiga = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_lab WHERE NamaBiaya LIKE '%Hitung Jen%'"); 
$yap3 = mysql_fetch_array($tiga);
echo number_format($yap3[jj]);
?></div></td>

<td><div align="center"><?
$tigax = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_sublab WHERE NamaBiaya LIKE '%Hitung Jen%'"); 
$yap3x = mysql_fetch_array($tigax);
echo number_format($yap3x[jj]);
?></div></td>

<td><div align="center"><?
$empat = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_lab  WHERE NamaBiaya LIKE '%Trombo%'"); 
$yap4 = mysql_fetch_array($empat);
echo number_format($yap4[jj]);
?></div></td>

<td><div align="center"><?
$empatx = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_sublab  WHERE NamaBiaya LIKE '%Trombo%'"); 
$yap4x = mysql_fetch_array($empatx);
echo number_format($yap4x[jj]);
?></div></td>

<td><div align="center"><?
$lima = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_lab  WHERE NamaBiaya LIKE '%epitel%'"); 
$yap5 = mysql_fetch_array($lima);
echo number_format($yap5[jj]);
?></div></td>

<td><div align="center"><?
$limax = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_sublab  WHERE NamaBiaya LIKE '%epitel%'"); 
$yap5x = mysql_fetch_array($limax);
echo number_format($yap5x[jj]);
?></div></td>

<td><div align="center"><?
$enam = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_lab  WHERE NamaBiaya LIKE '%bta%'"); 
$yap6 = mysql_fetch_array($enam);
echo number_format($yap6[jj]);
?></div></td>

<td><div align="center"><?
$enamx = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_sublab  WHERE NamaBiaya LIKE '%bta%'"); 
$yap6x = mysql_fetch_array($enamx);
echo number_format($yap6x[jj]);
?></div></td>

<td><div align="center"><?
$tuju = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_lab  WHERE NamaBiaya LIKE '%bta%'"); 
$yap7 = mysql_fetch_array($tuju);
echo number_format($yap7[jj]);
?></div></td>

<td><div align="center"><?
$tujux = mysql_query("SELECT COUNT(id) AS jj FROM cetak_hasil_sublab  WHERE NamaBiaya LIKE '%bta%'"); 
$yap7x = mysql_fetch_array($tujux);
echo number_format($yap7x[jj]);
?></div></td>
</tr></table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>