<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
if(!$x[id]){
header("Location:../../keluar2.php");
}else{
?>
<html>
<head> 
<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCFF00';
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
.style23 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#59BA54" class="style24">
<td width="1138" height="65" colspan="3" bgcolor="#59BA54">
  
    <div align="center">
       <img src="../../gambar/depan.png">
    </div></td>
</tr><tr valign="top">
<td colspan="2">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td  colspan="3"><div align="left" class="style1">
HALAMAN CEK KELENGKAPAN materai </div></td>
</tr>
<tr>
<td colspan="2" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style23">
<tr>
<td width="112">NO RM</td>
<td width="8">:</td>
<td width="252"><div align="left"><? echo $x[NoPasien]; ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo strtoupper($x[NamaPasien]); ?></div></td>
</tr>
<tr>
<td>TGL MASUK</td><td>:</td><td><div align="left"><? echo "$x[TglMasuk]-$x[BlnMasuk]-$x[ThnMasuk]"; ?></div></td>
</tr>
<tr>
<td>JAM MASUK</td><td>:</td><td><div align="left"><? echo $x[JamMasuk];?></div></td>
</tr>
<tr>
  <td>KELAS</td>
  <td>:</td>
  <td><div align="left">
  <?
  $splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
echo strtoupper($j[NamaRuangan]);
  ?>
  </div></td>
</tr>
<tr>
  <td>DOKTER UTAMA </td>
  <td>:</td>
  <td><div align="left"><? 
  echo $x[KetDokter]; 
  ?></div></td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  </tr>
<tr>
  <td colspan="3" bgcolor="#59BA54"><div align="left">
  <input  onClick="wCompare = window.open('3ws.php?id=<? echo $id; ?>&IdDetil=<? echo $cc[id]; ?>', 
  'wCompare', 'width=400,height=300,left=370,Top=120, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="FD"  value="Tambah materai"  class="style23" >
  <?
  if($x[materai]==1){
  ?>
  <input name="fgf" type="button" class="style23"  onClick="wCompare = window.open('3o.php?mas=mitra&id=<? echo $id; ?>', 
  'wCompare', 'width=600,height=100,left=270,Top=200, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Sertai materai">
  <?
  }
  ?><input type="button" name="fgf" value="Kembali" onClick="location.href='../fito_sayangku.php';" class="style23">
  </div></td>
</tr>
</table>
</div>
</td><td width="733" valign="top"> 
<div align="left">
<table width="682" border="0" cellpadding="2" cellspacing="2" class="style23">
<tr>
<td width="49" height="25" bgcolor="#59BA54"><div align="center"><strong>NO</strong></div></td>
<td width="98" bgcolor="#59BA54"><strong>TGL</strong></td>
<td width="360" bgcolor="#59BA54"><strong>KET</strong></td>
 <td width="147" bgcolor="#59BA54"><strong>OPR</strong></td>
</tr>
<?
$nomer =1;
if($x[materai]==0){
?>
<tr   onClick="wCompare = window.open('3o.php?id=<? echo $id; ?>', 
  'wCompare', 'width=600,height=100,left=270,Top=200, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo "$x[TglMasuk]-$x[BlnMasuk]-$x[ThnMasuk]"; ?></div></td>
<td>materai RAWAT INAP</td>
<td><div align="left"><? echo strtoupper($x[Opr]); ?></div></td>
</tr>
<? 
}
?>
<?
$nomer=$nomer+1;
//echo "$x[materai]";
$dkjfkdjfd = mysql_query("SELECT * FROM materai WHERE IdPasien='$id'");
while($cc = mysql_fetch_array($dkjfkdjfd)){
$pcd = explode(".",$cc[TglJam]);
?>
<tr  onClick="wCompare = window.open('exxxs.php?id=<? echo $id; ?>&IdDetil=<? echo $cc[id]; ?>', 
  'wCompare', 'width=600,height=150,left=370,Top=190, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  >
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo $pcd[0]; ?></div></td>
  <td><div align="left"><? echo strtoupper($cc[Keterangan]); ?></div></td>
   <td><div align="left"><? echo $cc[Opr]; ?></div></td>
</tr> 
<?
$nomer++; } ?>
<tr>
  <td colspan="5" bordercolor="#FFCC00" bgcolor="#59BA54">&nbsp;</td>
  </tr>
<?

?>
</table>
</div>
</td>
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
} ?>
