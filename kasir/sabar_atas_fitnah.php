<?php 
session_start();
include "../konek.php";
include "../ceke.php";
  $kjfgfgf_Fgfgfg0009 = mysql_query("SELECT * FROM akti_perawat WHERE id='$id'");
 $yam = mysql_fetch_array($kjfgfgf_Fgfgfg0009);
if(!$yam[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif($a[Level]==9){
 //akti_perawat
?>
<html>
<head><?
include "ciprat_1b.php";
include "ciprat_4b.php";

?></head><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
	color: #0033FF;
}
-->
</style><script language="JavaScript">
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

<body>
<div align="left">
<form action="x_dddd.php">
<table border="0" class="style1" cellpadding="2" cellspacing="2">
<?
$kdikkdfd_Dffd =  mysql_query("SELECT * FROM datapasien WHERE NoPasien='$yam[NoPasien]'");
$dapa =  mysql_fetch_array($kdikkdfd_Dffd);
if($dapa[id]){
?>
<tr>
<td>Jenis Info</td><td>:</td><td><div align="left">
<select name="Jenis" class="style1">
<?
if($yam[Jenis]==2){
?><option value="2">Rawat Inap</option>
<? 
} 
?>
<option value="1">Rawat Jalan</option>
<option value="2">Rawat Inap</option>
</select>
</div></td>
</tr>
<tr>
<td>Tgl</td><td>:</td><td><div align="left"><span class="style15 style2 style8  style3">
  <select name="TglX" class="style1" id="TglX">
    <option value="<? echo $yam[Tgl]; ?>"><?    echo $yam[Tgl]; ?></option>
    <?
		 
$ttg= 1;
while($ttg<32){
?>
    <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
    <? $ttg++; } ?>
  </select>
/
<select name="Bln" class="style1" id="Bln">
  <option value="<?  echo $yam[Bln]; ?>">
  <? $bln=$yam[Tgl];
  include "../bulan.php";   ?>
  </option>
  <option value="1">Januari</option>
  <option value="2">Februari</option>
  <option value="3">Maret</option>
  <option value="4">April</option>
  <option value="5">Mei</option>
  <option value="6">Juni</option>
  <option value="7">Juli</option>
  <option value="8">Agustus</option>
  <option value="9">September</option>
  <option value="10">Oktober</option>
  <option value="11">November</option>
  <option value="12">Desember</option>
</select>
/
<select name="Thn" class="style1" id="Thn">
<option value="<? echo $yam[Thn]; ?>"><?  echo $yam[Thn];  ?></option>
  <?
$awale = 2014;
while($awale<=2015){
?>
  <option value="<? echo $awale; ?>"><? echo $awale; ?></option>
  <? $awale++; } ?>
  <option value="2013">2013</option>
</select>
</span>

</div></td>
</tr>
<tr>
<td width="124">No Rm</td>
<td width="8">:</td>
<td width="645"><div align="left">
<?
echo $dapa[NoPasien]
?></div></td>
</tr>
<tr>
<td>Nama Pasien</td><td>:</td><td><div align="left"><?
echo ucfirst(strtolower($dapa[NamaPasien]));
?></div></td>
</tr>
<tr>
<td>Rawat Jalan</td><td>:</td><td><div align="left"><?
$kdjkfdfd_DFdfdf = mysql_query("SELECT COUNT(id) as jj from rwtjalan WHERE NoPasien='$dapa[NoPasien]'");
$ye  = mysql_fetch_array($kdjkfdfd_DFdfdf);
echo "$ye[jj] Kali "; ?> || <input name="fgfgf" type="button" class="style1" style="text-decoration:none"  onClick="wCompare_e009ee = window.open('x20_h.php?id=<? echo $id; ?>', 
  'wCompare_e009ee', 'width=580,height=240,left=500,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_e009ee.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Cek Detail">
<? 
?></div></td>
</tr>
<tr>
<td>Rawat Inap</td><td>:</td><td><div align="left"><?
$kdjkfdfd_DFdfdf2 = mysql_query("SELECT COUNT(id) as jj from keluarmasukpasien WHERE NoPasien='$dapa[NoPasien]'");
$ye2  = mysql_fetch_array($kdjkfdfd_DFdfdf2);
echo "$ye2[jj] Kali "; ?> || Cek Detil<? 
?></div></td>
</tr>
<tr>
<td valign="top">Berita</td><td>:</td><td><div align="left">
<textarea name="Keterangan" cols="60" rows="5" class="style1" id="Keterangan" ><? echo $yam[Keterangan]; ?></textarea>
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<tr>
<td>Opr</td><td>:</td><td><div align="left">
<? echo ucfirst(strtolower($a[Nama])); ?>
</div></td>
</tr>
<tr>
<td>Tgl Jam</td><td>:</td><td><div align="left">
<? echo date("d.m.Y-H:i:s");  ?>
</div></td>
</tr>
<tr>
<td colspan="3" valign="top"><div align="left">
<input type="submit" value="Simpan" name="fgfgfgf" class="style1">
 <input type="button" name="fgfg" value="Hapus"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    onClick="wCompares22s_0sw1 = window.open('x23_A.php?id=<? echo $id; ?>', 
  'wCompares22s_0sw1', 'width=780,height=100,left=60,Top=120,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares22s_0sw1.focus();"    class="style1">
 </div></td>
</tr>
 <? 
}else{?>
<tr>
 
  </tr>
<? } ?>
</table>
</form>
</div>
</body>
</html>
<?
}
?>