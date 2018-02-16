<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$mas = $_GET["mas"];
$IdDetil=$_GET["IdDetil"];
$KodeICD = $_GET["KodeICD"];
$NamaICD = $_GET["NamaICD"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
$lklklsklsdk = mysql_query("SELECT * FROM icdx WHERE id='$IdDetil'");
$pp = mysql_fetch_array($lklklsklsdk);
if(!$uu[id]){
header("Location:./index.php");
 }else{?>
 <html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {
	color: #993300;
	font-weight: bold;
	font-style: italic;
}
-->
</style> <?
//include "ser.php";
//include "ser2.php";
//include "ser3.php";
$arahan = strlen($RL4);
if($arahan>=1){
$filek='geis.php';
}else{
$filek='5tb.php';
} 
?> <script language="JavaScript">
	
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
<script type="text/javascript" language="JavaScript"><!-- 
function toCompare2() { 
    wCompare = window.open("<? echo $filek; ?>?KodeICD=<? echo $KodeIcd; ?>&NamaICD=<? echo $NamaIcd; ?>&id=<? echo $id; ?>&RL4=<? echo $RL4; ?>", "wCompare", "width=880,height=340,left=470,Top=210,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes"); 
    wCompare.focus(); 
}; 
  
//--></script>
</head>
<body <? if($mas=='mitra'){ ?> onLoad="toCompare2()"<? } ?>>
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
<tr>
<td width="1151" colspan="3" bgcolor="#5ABB52"> 
	 Halaman Input Data ICD
           </td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="340">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="127">RegId</td>
<td width="3"><strong>:</strong></td>
<td width="190"><div align="left">
<? echo "$uu[RegId]"; ?>
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
<td>Usia</td><td>:</td><td><div align="left"><?
echo "$uu[Umur] Thn";
?> <font color="#000099"><? echo $uu[BlnUmur]; ?></font><?
?></div></td>
</tr>
<tr>
  <td>Dokter</td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo $uu[NamaDokter]; ?></div></td>
</tr>
<tr>
  <td>Bagian</td>
  <td><strong>:</strong></td>
  <td><div align="left"><? echo ucfirst(strtolower($uu[Bagian]));?></div></td>
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
  <td><div align="left"><?  echo ucfirst(strtolower($uu[Operator])); ?></div></td>
</tr>
<?
if($pp[id]){
?>
<tr>
<td>Kode Icd </td>
<td>:</td><td><div align="left"><? echo "$pp[ICD_CODE]"; ?></div></td>
</tr>
<tr>
<td>Diagnosa</td>
<td>:</td><td><div align="left"><? echo ucfirst(strtolower($pp[DESCRIPTION])); ?></div></td>
</tr>
  <tr valign="top">
<td>Keterangan</td>
<td>:</td><td><div align="left">
<textarea rows="3" cols="30" name="Keterangan" class="style1"></textarea>
</div></td>
</tr>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">

<?
}else{
?>
<tr>
  <td>Kode Icd </td>
  <td><strong>:</strong></td>
  <td><div align="left">
 <? /*?><input type="text" class="style1" id="suggest2" />
  */ ?>
  <input  type="text" name="KodeIcd" maxlength="120" size="23">
  <input type="hidden" name="mas" value="mitra">
  <input type="hidden" name="id" value="<? echo $id; ?>">
  </div></td>
</tr>
<tr>
  <td>Nama ICD </td>
  <td><strong>:</strong></td>
  <td>  <?
  /* ?>
  <input type="text" class="style1" id="suggest" /> <? */ ?>
  <input type="text" name="NamaIcd" maxlength="120" size="25"></td>
</tr>
<? } ?>
<tr>
  <td>RL (<span class="style2">DINKES</span>) </td>
  <td><strong>:</strong></td>
  <td>  <?
  // <input type="text" class="style1" id="suggest3" />
  ?>
  <input type="text" name="RL4" maxlength="120" size="23"></td>
</tr><?
$kjdkjfdfd_DFdfd = mysql_query("SELECT * FROM ket_pas_pul WHERE IdPasien='$id'");
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
/*
?>
<tr>
  <td>KET PULANG </td>
  <td>:</td>
  <td><div align="left">
  <select name="Ket">
  <option value="-" >-Keterangan Pulang-</option>
  <option onClick="location.href='3wdd.php?id=<? echo $id; ?>&Ket=Pulang Paksa';" value="Pulang Paksa">Pulang Paksa</option>
  <option onClick="location.href='3wdd.php?id=<? echo $id; ?>&Ket=Dirujuk';" value="Dirujuk">Dirujuk</option>
  <option onClick="location.href='3wdd.php?id=<? echo $id; ?>&Ket=Meninggal';" value="Meninggal">Meninggal</option>
  <option value="" onClick="location.href='3wdd.php?id=<? echo $id; ?>&Ket=12';">Hapus</option> 
  
  </select>
  </div></td>
</tr>
<?
*/ ?><tr>
  <td colspan="3" bgcolor="#59BA54"><div align="left">
  <input type="submit" value="Submit" name="dfd" class="style1">
  <?
  if($pp[id]){
  ?>
  <input type="button" name="fgf" value="Reset" onClick="location.href='7w.php?id=<? echo $id; ?>';" style="background:#FFFF33" class="style1">
  <?
  }
  if($a[Level]==9){ ?><input type="button" name="dfdf" value="Selesai" onClick="location.href='../Kasir/u.php?id=<? echo $id; ?>';" class="style1"><? 
  }else{
  ?><input type="button" name="dfdf" value="Selesai" onClick="location.href='index.php';" class="style1">
  <? } ?>
  <input type="button" name="fgfg" value="List Rajal" onClick="location.href='ed_d.php';" class="style1">
  </div></td>
  </tr>
</table>
</div>
</td>
<td width="810">
<div align="left">
<table width="756" border="1" class="style1">
<tr>
<td width="34" bgcolor="#59BA54"><div align="center"><strong>NO</strong></div></td><td width="69" bgcolor="#59BA54"><div align="right"><strong>TGL</strong></div></td>
 <td width="66" bgcolor="#59BA54"><strong>ICD</strong></td>
<td width="266" bgcolor="#59BA54"><strong>DIAGNOSA</strong></td>
<td width="306" bgcolor="#59BA54"><strong>TERJEMAHAN</strong></td>

</tr>
<?
$noma=1;
$kdjkdjkfdf = mysql_query("SELECT * FROM icd_rj WHERE IdPasien='$uu[id]' ORDER BY id DESC");
while($ii = mysql_fetch_array($kdjkdjkfdf)){
?>
<tr  onClick="wCompare = window.open('eas_x.php?IdDetil=<? echo $ii[id]; ?>&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=200,left=570,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <td><div align="center"><? echo $noma; ?></div></td>
  <td><div align="right"><? echo "$ii[Tgl]-$ii[Bln]-$ii[Thn]"; ?></div></td>
   <td><div align="left"><? echo $ii[KodeIcd]; ?></div></td>
  <td><div align="left"><? echo strtoupper($ii[Diagnosa]); ?></div></td>
 <td><div align="left"><?
   $LFKGLLGF = mysql_query("SELECT TERJEMAHAN from icdx WHERE ICD_CODE='$ii[KodeIcd]'");
  $uj = mysql_fetch_array($LFKGLLGF);
   echo strtoupper($uj[TERJEMAHAN]); ?></div></td></tr>
<?
$noma++; } ?>
<tr>
  <td colspan="6" bgcolor="#59BA54">&nbsp;</td>
  </tr>
</table><br>
<table width="413" border="1" class="style1">
<tr>
<td width="37"   bgcolor="#FF99FF"><div align="center"><strong>NO</strong></div></td><td width="82" bgcolor="#FF99FF"><div align="right"><strong>TGL</strong></div></td>
 <td width="124" bgcolor="#FF99FF"><strong>NO DTD </strong></td>
<td width="485" bgcolor="#FF99FF"><strong>DATA RINCI</strong></td>
<td width="485" bgcolor="#FF99FF"><strong>DIAGNOSA</strong></td>
</tr>
<?
$noma2=1;
$kdjkdjkfdf2 = mysql_query("SELECT * FROM icd_rj2 WHERE IdPasien='$uu[id]' ORDER BY id DESC");
while($ii2 = mysql_fetch_array($kdjkdjkfdf2)){
//
$KIKDF= mysql_query("SELECT * FROM rl4b WHERE id='$ii2[KodeIcd]'");
$ya = mysql_fetch_array($KIKDF);
//
?>
<tr  onClick="wCompare = window.open('eas_x.php?para=normal&IdDetil=<? echo $ii2[id]; ?>&id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=200,left=570,Top=140,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >
  <td><div align="center"><? echo $noma2; ?></div></td>
  <td><div align="right"><? echo "$ii2[Tgl]-$ii2[Bln]-$ii2[Thn]"; ?></div></td>
   <td><div align="left"><? echo $ya[NoDtd]; ?></div></td>
   <td><div align="left"><? echo $ya[NoData]; ?></div></td>
  <td><div align="left"><? echo strtoupper($ii2[Diagnosa]); ?></div></td>
 </tr>
<?
$noma++; } ?>
<tr>
  <td colspan="6" bgcolor="#FF99FF">&nbsp;</td>
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
