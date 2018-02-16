<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$IdDetil=$_GET["IdDetil"];
$KodeICD = $_GET["KodeICD"];
$NamaICD = $_GET["NamaICD"];
$jhsjdskdad  = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
$dkfjdkfd = mysql_query("SELECT * FROM dokter WHERE id='$Dokter'");
$ya = mysql_fetch_array($dkfjdkfd);
if($FiLaDim2[UbDr2]==0){
echo "MAAF SDR ";   ?><font color="#990000"><b><i><? echo strtoupper($a[Nama]); ?></i></b></font><? echo "  TIDAK DIIJINKAN AKSES HALAMAN INI, SILAHKAN HUBUNGI ADMIN";
}elseif(!$uu[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.style2 {
	color: #003366;
	font-style: italic;
	font-weight: bold;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("3wwA.php?NamaDokter=<? echo $NamaDokter; ?>&id=<? echo $id; ?>", "wCompare", "width=580,height=340,left=470,Top=210,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
  
//--></script> <script language="JavaScript">
	
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//
	</script>

</head>
<body <? if($mas=='mitra'){ ?> onLoad="toCompare()"<? } ?>>
<div align="left">
<?
if($ya[id]){
?>
<form action="tg09.php">
<?
}else{
?>
 <form  target="_self">
 <? } ?>
 <table width="1191" border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#59BA54" class="style24">
  <td height="65" colspan="2" bgcolor="#59BA54">
    <div align="left"><img src="../../gambar/depan.png">
       </div></td></tr> <tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="445">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td colspan="3"><div align="left" class="style2">
HALAMAN GANTI DOKTER
</div></td>
</tr>
<tr>
<td width="149">MSTKEY</td>
<td width="3"><strong>:</strong></td>
<td width="283"><div align="left">
<? echo "$uu[MstKey]"; ?>
</div></td>
</tr>
<tr>
  <td>NO RM </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[NoPasien]; ?></div></td>
</tr>
<tr>
  <td>NAMA PASIEN </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo strtoupper($uu[NamaPasien]); ?></div></td>
</tr>
 
<tr>
  <td>BAGIAN</td>
  <td><strong>:</strong></td>
  <td><div align="left"><? 
  $splo = explode("-",$uu[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
  echo strtoupper($j[NamaRuangan]);?></div></td>
</tr>
<tr>
  <td>TGL MASUK </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo "$uu[TglMasuk]-$uu[BlnMasuk]-$uu[ThnMasuk]";  ?></div></td>
</tr>
<tr>
  <td>JAM MASUK </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[JamMasuk]; ?></div></td>
</tr>
<tr>
  <td>OPR</td>
  <td><strong>:</strong></td>
  <td><div align="left"><?  echo strtoupper($uu[Opr]); ?></div></td>
</tr>
<tr>
  <td>DOKTER LAMA</td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[KetDokter]; ?></div></td>
</tr>
<?
 if($ya[id]){
?>
<tr>
<td bgcolor="#D4D0C8">DOKTER PENGGANTI</td>
<td bgcolor="#D4D0C8">:</td>
<td bgcolor="#D4D0C8"><div align="left">
<? echo $ya[NamaDokter]; ?>
<input  type="hidden" name="Dokter" value="<? echo $Dokter; ?>">
</div></td>
</tr>
<tr>
<td bgcolor="#D4D0C8">SPC</td>
<td bgcolor="#D4D0C8">:</td>
<td bgcolor="#D4D0C8"><div align="left"><? echo $ya[NamaSpc]; ?></div></td>
</tr>
<tr valign="top">
<td bgcolor="#D4D0C8">ALASAN</td>
<td bgcolor="#D4D0C8">:</td>
<td bgcolor="#D4D0C8"><div align="left">
<textarea rows="4" cols="30" name="Alasan" class="style1"></textarea>
<input type="hidden" name="id" value="<? echo $id; ?>">

</div></td>
</tr><?
}else{
?>
<tr>
<td>DI GANTI DOKTER</td><td>:</td><td><div align="left">
<input type="text" name="NamaDokter" maxlength="20" size="20" class="style1">
<input type="hidden" name="mas" value="mitra">
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>

<? } ?>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3" bgcolor="#59BA54"><div align="left">
  <input type="submit" value="Submit" name="dfd" class="style1">
  <?
  if($ya[id]){
  ?>
  <input type="button" name="fgf" value="Reset" onClick="location.href='7nn.php?id=<? echo $id; ?>';" style="background:#FFFF33" class="style1">
  <?
  }
  ?><input type="button" name="dfdf" value="Selesai" onClick="location.href='../fito_sayangku.php';" class="style1">
  </div></td>
  </tr>
</table>
</div>
</td>
<td width="705" valign="top">
<div align="left">
<table width="685" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="24" bgcolor="#000066"><span class="style3">NO</span></td>
<td width="66" bgcolor="#000066"><span class="style3">TGL UPDATE</span></td>
<td width="134" bgcolor="#000066"><span class="style3">JAM</span></td>
<td width="113" bgcolor="#000066"><span class="style3">ALASAN</span></td>
<td width="142" bgcolor="#000066"><span class="style3">INFO</span></td>
<td width="166" bgcolor="#000066"><span class="style3">OPR</span></td>
</tr>
<?
$nomer=1;
$kfjkfjgkf = mysql_query("SELECT * FROM dataupdate WHERE IdUpdate='$id' AND NamaTabel='keluarmasukpasien'");
while($hh = mysql_fetch_array($kfjkfjgkf)){
$no = $nomer%2;
if($no==1){
$warna='';
}else{
$warna=' bgcolor="#99FFCC"';
}
?>
<tr valign="top" <? echo $warna; ?>>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $hh[Tgl]; ?></div></td>
<td><div align="center"><? echo $hh[Jam]; ?></div></td>
<td><div align="left"><? echo $hh[Alasan]; ?></div></td>
 <td><div align="left"><? echo $hh[Info]; ?></div></td>
  <td><div align="left"><? echo $hh[Opr]; ?></div></td>
</tr>
<?
$nomer++; } ?><tr valign="top" >
  <td colspan="6" bgcolor="#000066">&nbsp;</td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?
}
?>
