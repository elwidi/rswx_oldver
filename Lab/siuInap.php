<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$RegId= $_GET["RegId"];
$NoBukti = "LAB-".$_GET["NoBukti"];
$gundul = $_GET["gundul"];
$ff = $_GET["ff"];
 $ada = mysql_query("SELECT * FROM keluarmasukpasien WHERE MstKey='$RegId'");
$kp = mysql_fetch_array($ada);
 $lmpa = mysql_query("SELECT count(id) as hh FROM cetak_hasil_labinap WHERE RegId='$RegId' AND NoBukti='$NoBukti'");
 $pop = mysql_fetch_array($lmpa);
if($pop[hh]>0){
header("Location:./suitinap.php?NoBukti=$NoBukti&fito=$kp[id]&gundul=pacul&ff=2");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
//include "latar_lab.php";
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background='#ffffff'
	}
	//-->
	</script><style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style14 {color: #FFFF99}
-->
</style><TITLE></TITLE></head>
<body>
<div align="center">
<table width="600" border="0" cellpadding="0" cellspacing="0"><TR>
<td><div align="left"><img src="pala/logo.jpg" width="250" height="70"></div></td>
<TD colspan="2"><div align="center" class="style5">
&nbsp;
</div></TD></TR>
<tr><TD colspan="3"><div align="right" class="style3">LABORATORIUM</div></TD>
</tr>
<tr><TD colspan="3">
<table  border="1" cellpadding="0" cellspacing="0"> 
<tr><TD width="100"><div align="left" class="style3">NO RM</div></TD><td>:</td><td width="100"><div align="left" class="style3"><? echo $kp[NoPasien]; ?></div></td>
<td width="150"><div align="left" class="style3">TGL PERIKSA</div></td><td width="300"><div align="left" class="style3"><? echo "$kp[TglMasuk]/$kp[BlnMasuk]/$kp[ThnMasuk]"; ?></div></td>
</tr>
<tr><TD><div align="left" class="style3">UMUR</div></TD><td>:</td><td><div align="left" class="style3"><? 
 
 ?></div></td>
<td><div align="left" class="style3">NAMA PASIEN</div></td>
<td width="200"><div align="left" class="style3"><? echo strtoupper($kp[NamaPasien]); ?></div></td>
</tr>

<tr><TD><div align="left" class="style3">ASAl PASIEN</div></TD><td>:</td><td><div align="left" class="style3"><? 
echo $kp[Bagian];
 ?></div></td>
<td><div align="left" class="style3">NO LAB</div></td>
<td width="200"><div align="left" class="style3"><? echo "LAB-$NoBukti";   ?></div></td>
</tr>
<tr><TD><div align="left" class="style3">DOKTER</div></TD>
<td colspan="4"><div align="left" class="style3"><? echo $kp[NamaDokter]; ?></div></td>
</tr>
</table>
</TD>
 </tr>
<tr><TD colspan="3">&nbsp;</TD></tr>
<TR><TD colspan="3"><div align="center" class="style3">HASIL PEMERIKSAAN LABORAT</div></TD></tr>
<tr><TD colspan="3">
<table width="601" border="1" cellspacing="0" cellpadding="0">
<TR bgcolor="Silver"><TD><SPAN class="style3">JENIS PERIKSA</SPAN>
                </TD><td>
                  <SPAN class="style3">HASIL</SPAN>
                </td><td>
                  <SPAN class="style3">SATUAN</SPAN>
                </td><td>
                  <SPAN class="style3">NILAI RUJUK</SPAN>
                </td><td>
                  <SPAN class="style3">KETERANGAN</SPAN>
                </td>
</TR>
<?
$nno=1;
$hasil = mysql_query("SELECT id,KodeBiaya FROM txninap2 WHERE MstKey='$kp[MstKey]' AND NoBukti ='$NoBukti' ORDER BY KodeBiaya");
while($py = mysql_fetch_array($hasil)){
$sublab = mysql_query("SELECT * FROM sublab WHERE IdBiaya='$py[KodeBiaya]' ORDER BY id");
while($ipo= mysql_fetch_array($sublab)){
if($KoH!=$ipo[IdBiaya] ){
?>
<tr><TD colspan="5"><div align="left" class="style3"><?  
$nmb = mysql_query("SELECT NamaBiaya FROM tabelbiayax  WHERE id='$ipo[IdBiaya]'");
$ipo2 = mysql_fetch_array($nmb);
echo $ipo2[NamaBiaya]; ?></div></TD>
</tr>
<? } 
 
$KOS = "$NoBukti.$py[id]-$ipo[id]";
$pjng =strlen($ipo2[KodeBiaya]);
$ambil = $pjng-3;
$ambil2 = substr($ipo2[KodeBiaya],3,$ambil);
$opo_ki = explode("-",$ambil2);
$nakal = explode(".",$opo_ki[0]);
//echo "$ipo2[KodeBiaya] ||  $ipo2[NamaBiaya] || $nakal[1]<br>";
  
   $simmo=mysql_query("INSERT INTO  `cetak_hasil_labinap` (
`id` ,
`RegId` ,
`NoBukti` ,
`IdBiaya` ,
`Idsublab` ,
`NamaBiaya` ,
`Hasil` ,
`Satuan` ,
`NilaiNormal` ,
`MaxP` ,
`MinP` ,
`MinW` ,
`MaxW` ,
`Keterangan`
,
`Kelompok`
,
`IdAsal`
)
VALUES (
NULL , '$kp[MstKey]','$NoBukti', '$ipo[IdBiaya]', '$KOS',
 '$ipo[NamaBiaya]', '$ipo[Hasil]', '$ipo[Satuan]', '$ipo[NilaiNormal]',
 '$ipo[MaxP]', '$ipo[MinP]', '$ipo[MinW]', '$ipo[MinW]', '.','$nakal[1]','$py[id]'
)");
 
  //END OF LAKUKAN SISIP DATA?>
<tr valign="top"><TD><div align="left" class="style3"><?  
echo "($ipo[id])";
echo $ipo[NamaBiaya]; ?></div></TD>
<td><div align="left" class="style3"><?
if($ipo[Hasil]==''){
 echo ".";
}else{
echo $ipo[Hasil];
} ?></div></td>
<td><div align="left" class="style3"><? 
if($ipo[Satuan]==''){ echo "."; }else{
echo $ipo[Satuan];
} ?></div></td>
<td><div align="left" class="style3"><? 
if($ipo[NilaiNormal]==''){ echo "."; }else{
echo $ipo[NilaiNormal];
}  ?></div></td>
<td><div align="left" class="style3"><? 
if($ipo[Keterangan]==''){ echo "."; }else{
echo $ipo[Keterangan]; }  ?></div></td></tr>
<? $KoH=$ipo[IdBiaya]; $nno++;} ?>
<?    } ?>
</table>
</TD></tr>
<tr><TD colspan="3">&nbsp;</TD></tr>
<tr><TD colspan="3"><div align="right" class="style3"> 
<table border="0"><TR> 
<TD><div align="left" class="style3">TGL CETAK <? $tg=date("d"); $bl=date("m"); $th=date("Y"); $jam =date("h:i:s");
echo "$tg/$bl/$th"; ?></div></TD></TR>
<tr><TD colspan="3">&nbsp;</TD></tr>
<tr><TD colspan="3"><div align="center" class="style3">( <? echo strtoupper($a[Nama]); ?> )<br>
<? echo $jam; 	?> </div></TD></tr>
</table>
</div></TD></tr>
</table>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>
