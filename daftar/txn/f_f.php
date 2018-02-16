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
$lklklsklsdk = mysql_query("SELECT * FROM icdx WHERE id='$IdDetil'");
$pp = mysql_fetch_array($lklklsklsdk);
if(!$uu[id]){
header("Location:./index.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>
<html>
<head>
<?
include "ser.php";
include "ser2.php";
 ?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style><script type="text/javascript" language="JavaScript"><!-- 
function toCompare() { 
    wCompare = window.open("5tb.php?KodeICD=<? echo $KodeICD; ?>&NamaICD=<? echo $NamaICD; ?>&id=<? echo $id; ?>", "wCompare", "width=880,height=340,left=470,Top=210,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
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
if($pp[id]){
?>
<form action="d_jh.php">
<?
}else{
?>
<form target="_self">
<? } ?>
<table width="1191" border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#59BA54" class="style24">
  <td height="65" colspan="2" bgcolor="#59BA54">
    <div align="left">	<?
  	if($a[Level]==2){
	       $file='../../gambar/pendaftaran.gif';
		   }elseif($a[Level]==7){
		   $file='../../gambar/akutansi.gif';
		   }elseif($a[Level]==98){
		   $file='../../gambar/boga.gif';
		   }elseif($a[Level]==2){
		   $file='../../gambar/cust ser.gif';
		   }elseif($a[Level]==21){
		   $file='../../gambar/farmasi.gif';
		   }elseif($a[Level]==212){
		   $file='../../gambar/fisio.gif';
		   }elseif($a[Level]==3){
		   $file='../../gambar/hrd.gif';
		   }elseif($a[Level]==9){
		   $file='../../gambar/kasir.gif';
		   }elseif($a[Level]==4){
		   $file='../../gambar/keperawatan.gif';
		   }elseif($a[Level]==22){
		   $file='../../gambar/keuangan.gif';
		   }elseif($a[Level]==22){
		   $file='../../gambar/laboratorium.gif';
		   }elseif($a[Level]==5){
		   $file='../../gambar/log far.gif';
		   }elseif($a[Level]==6){
		   $file='../../gambar/log umum.gif';
		   }elseif($a[Level]==77){
		   $file='../../gambar/poli.gif';
		    }elseif($a[Level]==26){
		   $file='../../gambar/radiologi.gif';
		    }elseif($a[Level]==8){
		   $file='../../gambar/rm.gif';
		    }elseif($a[Level]==20){
		   $file='../../gambar/ugd.gif';
		   }
		   ?>
          <img src="<? echo $file; ?>">
       </div></td></tr> <tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="2"><div align="left"><?
echo "USER : ";
echo ucfirst(strtolower($a[Nama])); 
echo " / Level :  $a[Level]"; 
?></div></td>
</tr>
<tr valign="top">
<td width="340">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="127">MstKey</td>
<td width="3"><strong>:</strong></td>
<td width="190"><div align="left">
<? echo "$uu[MstKey]"; ?>
</div></td>
</tr>
<tr>
  <td>No Rm </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[NoPasien]; ?></div></td>
</tr>
<tr>
  <td>Nama Pasien </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo ucfirst(strtolower($uu[NamaPasien])); ?></div></td>
</tr>
<tr>
  <td>Dokter</td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[KetDokter]; ?></div></td>
</tr>
<tr>
  <td>Bagian</td>
  <td><strong>:</strong></td>
  <td><div align="left"><? 
  $splo = explode("-",$uu[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
  echo ucfirst(strtolower($j[NamaRuangan]));?></div></td>
</tr>
<tr>
  <td>Tgl Masuk </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo "$uu[TglMasuk]-$uu[BlnMasuk]-$uu[ThnMasuk]";  ?></div></td>
</tr>
<tr>
  <td>Jam Masuk </td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[JamMasuk]; ?></div></td>
</tr>
<tr>
  <td>Opr</td>
  <td><strong>:</strong></td>
  <td><div align="left"><?  echo ucfirst(strtolower($uu[Opr])); ?></div></td>
</tr>
<?
if($pp[id]){
?>
<tr>
<td>Kode Per </td>
<td>:</td><td><div align="left"><? echo "$pp[ICD_CODE]"; ?></div></td>
</tr>
<tr valign="top">
<td>Diagnosa</td>
<td>:</td><td><div align="left"><? echo strtoupper($pp[DESCRIPTION]); ?></div></td>
</tr>
<tr valign="top">
<td>Keterangan</td>
<td>:</td><td><div align="left">
<textarea rows="3" cols="30" name="Keterangan" class="style1"></textarea>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
</div></td>
</tr>
<?
}else{
?>
<tr>
  <td>Kode Icd </td>
  <td><strong>:</strong></td>
  <td><div align="left">
  <input type="text" class="style1" id="suggest" />
  <input type="hidden" name="mas" value="mitra">
  <input type="hidden" name="id" value="<? echo $id; ?>">
  </div></td>
</tr>
<tr>
  <td>Nama Icd </td>
  <td><strong>:</strong></td>
  <td>   <input type="text" class="style1" id="suggest2" />
</td>
</tr>
<? } ?>
<?
$kjdkjfdfd_DFdfd = mysql_query("SELECT * FROM ket_pas_pul WHERE IdPasien='RI:$id'");
$dapi = mysql_fetch_array($kjdkjfdfd_DFdfd);
if($dapi[id]){
?>
<tr>
<td bgcolor="#ECE9D8">KET PULANG</td>
<td bgcolor="#ECE9D8">:</td>
<td bgcolor="#ECE9D8"><div align="left">
<?
echo ucfirst(strtolower($dapi[Keterangan]));
?>
</div></td>
</tr>
<? 
}
?>
<tr>
  <td>KET PULANG </td>
  <td>:</td>
  <td><div align="left">
  <select name="Ket">
  <option value="-" >-Keterangan Pulang-</option>
  <option onClick="location.href='../3wddx.php?id=<? echo $id; ?>&Ket=Pulang Paksa';" value="Pulang Paksa">Pulang Paksa</option>
  <option onClick="location.href='../3wddx.php?id=<? echo $id; ?>&Ket=Dirujuk';" value="Dirujuk">Dirujuk</option>
  <option onClick="location.href='../3wddx.php?id=<? echo $id; ?>&Ket=Meninggal';" value="Meninggal">Meninggal</option>
  <option value="" onClick="location.href='../3wddx.php?id=<? echo $id; ?>&Ket=12';">Hapus</option> 
  
  </select>
  </div></td>
</tr>

<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3" bgcolor="#59BA54"><div align="left">
  <input type="submit" value="Submit" name="dfd" class="style1">
  <?
  if($pp[id]){
  ?>
  <input type="button" name="fgf" value="Reset" onClick="location.href='7w.php?id=<? echo $id; ?>';" style="background:#FFFF33" class="style1">
  <?
  }
  ?><input type="button" name="dfdf" value="Selesai" onClick="location.href='../fito_sayangku.php';" class="style1">
  </div></td>
  </tr>
</table>
</div>
</td>
<td width="810">
<div align="left">
<table width="798" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="37" bgcolor="#59BA54"><div align="center"><strong>NO</strong></div></td>
<td width="37" bgcolor="#59BA54"><div align="center"><strong>URUTAN</strong></div></td>
<td width="56" bgcolor="#59BA54"><div align="right"><strong>TGL</strong></div></td>
 <td width="148" bgcolor="#59BA54"><strong>ICD</strong></td>
<td width="259" bgcolor="#59BA54"><strong>DIAGNOSA</strong></td>
<td width="266" bgcolor="#59BA54"><strong>TERJEMAHAN</strong></td>
</tr>
<?
$noma=1;
if($a[Level]==9){
$kdjkdjkfdf = mysql_query("SELECT * FROM icd_ri2 WHERE IdPasien='$uu[id]' ORDER BY Urutan");
}else{
$kdjkdjkfdf = mysql_query("SELECT * FROM icd_ri WHERE IdPasien='$uu[id]' ORDER BY Urutan");
}
while($ii = mysql_fetch_array($kdjkdjkfdf)){
?>
<tr  onClick="wCompare = window.open('eas_x.php?IdDetil=<? echo $ii[id]; ?>&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=200,left=570,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" valign="top" >
  <td><div align="center"><? echo $noma; ?></div></td>
  <td><div align="left"><?
  echo $ii[Urutan];
  ?></div></td>
  <td><div align="right"><? echo "$ii[Tgl]-$ii[Bln]-$ii[Thn]"; ?></div></td>
   <td><div align="left"><? echo $ii[KodeIcd]; ?></div></td>
  <td><div align="left"><? echo  ($ii[Diagnosa]); ?></div></td>
  <td><div align="left"><?
   $LFKGLLGF = mysql_query("SELECT TERJEMAHAN from icdx WHERE ICD_CODE='$ii[KodeIcd]'");
  $uj = mysql_fetch_array($LFKGLLGF);
   echo strtoupper($uj[TERJEMAHAN]); ?></div></td>
  
</tr>
<?
$noma++; } ?>
<tr>
  <td colspan="6" bgcolor="#59BA54">&nbsp;</td>
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
