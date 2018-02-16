<?
session_start();
include "../konek.php";
include "../salaman.php";
 $dataa = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$z = mysql_fetch_array($dataa);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
?>
<html>
<head> 
<script language="JavaScript">
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
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	color: #FFFFFF;
	font-weight: bold;
}
.style4 {color: #003300; font-weight: bold; }
-->
</style>
</head>
<body bgcolor="#99CCCC">
<form action="d_81.php">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="567" colspan="3" bgcolor="#FFCC99"><div align="center"><strong>
HALAMAN KOREKSI HASIL PEMERIKSAAN LAB<br />
<?
echo strtoupper($z[NamaPasien]); echo "<br> ( $z[NoPasien] )";
  $ndsa2 = "$z[id].$NoBukti";
	$djkdjkdfd2 = mysql_query("SELECT id,NoUrut FROM urutanlab WHERE RegId='$ndsa2'");
	$bf2 = mysql_fetch_array($djkdjkdfd2);
	echo "<br>($bf2[NoUrut])"; ?>
</strong></div></td>
</tr>
<tr>
<td colspan="3" bgcolor="#003300"><div align="center"><span class="style1">
<input type="submit" name="ffg" value="Untuk Simpan Lakukan Klik Disini" class="style1"  style="background:#FFFF00">
</span></div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="18" bgcolor="#990000"><span class="style2">NO</span></td>
<td bgcolor="#990000" class="style2">NAMA BIAYA</td>
<td width="124" bgcolor="#990000"><span class="style2">HASIL</span></td>
<td width="111" bgcolor="#990000"><span class="style2">NILAI NORMAL</span></td>
<td width="105" bgcolor="#990000"><span class="style2">SATUAN</span></td>
<td colspan="2" width="175" bgcolor="#990000"><span class="style2">KETERANGAN</span></td>
</tr>
<?
$nomer=1;
 $kju = mysql_query("SELECT * FROM cetak_hasil_labinap  WHERE RegId='$z[MstKey]' AND NoBukti ='LAB-$NoBukti' ORDER BY Kelompok,IdBiaya");
while($ada = mysql_fetch_array($kju)){
$jdkjd998 = mysql_query("SELECT id  FROM sublab WHERE NamaBiaya='$ada[NamaBiaya]'");
  $xa = mysql_fetch_array($jdkjd998);
  $pecahan = explode("-",$ada[Idsublab]);
  //
  $Hyyt = mysql_query("SELECT * FROM sublab WHERE IdBiaya='$ada[IdBiaya]' AND  NamaBiaya='$ada[NamaBiaya]'");
$pyt = mysql_fetch_array($Hyyt); 

  //
$balake ="$ada[IdBiaya]-$pyt[id]"; 
   $cvvcvjkop = mysql_query("SELECT COUNT(id) as jj FROM sublab_2 WHERE IdBiaya='$balake'");
	$bi = mysql_fetch_array($cvvcvjkop);	
if($Yara=='meter'){
?><? 
}else{
?>
<tr valign="top">
<td><div align="center"><? echo $nomer; ?></div></td>
<td bgcolor="#D4D0C8"><div align="left"><a href="#"  style="text-decoration:none"   onClick="wCompare2 = window.open('ddd_3.php?ada=5&NamaBi=<? echo $ada[NamaBiaya]; ?>&Idsublab=<? echo $vv[Idsublab]; ?>&id=<? echo $id; ?>', 
  'wCompare2', 'width=480,height=340,left=30,Top=250,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare2.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><? echo strtoupper($ada[NamaBiaya]); ?></a></div></td>
<td><div align="left">
<?
if($bi[jj]>0){
?>
<input type="text" name="d" disabled="disabled"  maxlength="10" size="10" >
<input type="hidden" name="Hasil_<? echo $ada[id];?>"  maxlength="10" size="10"  value=".">
<? 
}else{
?>
<input name="Hasil_<? echo $ada[id];?>" type="text" class="style1" value="<? echo $ada[Hasil]; ?>" size="20" maxlength="30">
 <? } ?>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="NoBukti" value="<? echo $NoBukti; ?>">
</div></td>
<td><div align="left">
 <? echo $ada[NilaiNormal]; ?> 
<input name="NilaiNormal_<? echo $ada[id];?>" type="hidden" class="style1" value="<? echo $ada[NilaiNormal]; ?>" size="20" maxlength="100">
</div></td>
<td><div align="left">
<? echo $ada[Satuan]; ?> 
<input name="Satuan_<? echo $ada[id];?>" type="hidden" class="style1" value="<? echo $ada[Satuan]; ?>" size="20" maxlength="100">
</div></td>
<td><div align="left">
 <? echo $ada[Keterangan]; ?> 
<? echo $ada[Keterangan]; ?> </div></td>
<td><div align="left"><strong><?
 if($bi[jj]>0){
  $psx= explode("-",$ada[Idsublab]);
 ?><a href="#"
    onClick="wCompare33 = window.open('33a.php?Kunci=<? echo "$ada[IdBiaya]-$psx[2]"; ?>&Kap=<? echo $ada[id]; ?>&id=<? echo $id; ?>&NoBukti=<? echo $NoBukti; ?>&Yara=meter', 
  'wCompare33', 'width=680,height=500,left=500,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare33.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   style="text-decoration:none"><?
//echo "$psx[2]<br>";

	?>LIHAT DETIL</a><? 
	?>||<?  }else{
?>   <? } ?>
  
	 </strong></div></td>
</tr>
<? } ?>
<tr valign="top">
<td colspan="7"><div align="left">
 <?
///
if($Yara=='meter'){
 ///	
///
  if($bi[jj]>0){
  $dfdfmd=mysql_query("SELECT NamaBiaya FROM cetak_hasil_labinap WHERE id='$Kap' AND RegId='$z[MstKey]' AND NoBukti='$NoBukti'");
$n = mysql_fetch_array($dfdfmd);

  ?><table width="660" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td colspan="7" bgcolor="#000000"><div align="center" class="style2">
DETAIL : <? echo strtoupper($n[NamaBiaya]); ?>
</div></td>
</tr>
  <tr>
<td width="17" bgcolor="#66CC00"><span class="style4">NO</span></td>
<td width="138" bgcolor="#66CC00" class="style4">NAMA BIAYA</td>
<td width="126" bgcolor="#66CC00"><span class="style4">HASIL</span></td>
<td width="118" bgcolor="#66CC00"><span class="style4">NILAI NORMAL</span></td>
<td width="121" bgcolor="#66CC00"><span class="style4">SATUAN</span></td>
<td colspan="2" bgcolor="#66CC00"><span class="style4">KETERANGAN</span></td>
</tr>
<input type="hidden" name="Yara" value="meter">
  <? 
   $ke=1;
   
    	$jkop = mysql_query("SELECT * FROM cetak_hasil_sub_labinap WHERE RegId='$z[MstKey]' AND Idsublab like '$Kap.%'  AND NoBukti='$NoBukti'");
 while($sp =  mysql_fetch_array($jkop)){
 ?>
 <tr>
<td bgcolor="#FFFFFF"><div align="center"><? echo $ke; ?></div></td>
<td bgcolor="#FFFFFF"><div align="left"><? echo strtoupper($sp[NamaBiaya]); ?></div></td>
<td bgcolor="#FFFFFF"><div align="left">
<input name="Hasil_<? echo $sp[id];?>" type="text" class="style1" value="<? echo $sp[Hasil]; ?>" size="20" maxlength="100">
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="Dus" value="<? echo $Dus; ?>">
</div></td>
<td bgcolor="#FFFFFF"><div align="left">
 <? echo $sp[NilaiNormal]; ?> 
<input name="NilaiNormal_<? echo $sp[id];?>" type="hidden" class="style1" value="<? echo $sp[NilaiNormal]; ?>" size="20" maxlength="100">
</div></td>
<td bgcolor="#FFFFFF"><div align="left"><? echo $sp[Satuan]; ?>
<input name="Satuan_<? echo $sp[id];?>" type="hidden" class="style1" value="<? echo $sp[Satuan]; ?>" size="20" maxlength="100">
</div></td>
<td width="41" bgcolor="#FFFFFF"><div align="left"><? echo $sp[Keterangan]; ?>
<input name="Keterangan_<? echo $sp[id];?>" type="hidden" class="style1" value="<? echo $sp[Keterangan]; ?>" size="20" maxlength="100"> </div></td>
<td width="55" bgcolor="#FFFFFF">&nbsp; </td>
</tr>
  <? $ke++;  
 }
}///
} //end of para meter
?>
<?
$nomer++; } ?></table>
</div></td></tr><tr>
  <td colspan="7" bgcolor="#333333">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>

</form>
</body>
</html>
<? 
}else{

}
?>