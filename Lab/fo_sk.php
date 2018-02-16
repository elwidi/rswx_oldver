<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$dataa = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$z = mysql_fetch_array($dataa);
 $kaylaIsnaAkmalian = mysql_query("SELECT id FROM kwitansirj WHERE RegId='$z[RegId]'");
 $h3 = mysql_fetch_array($kaylaIsnaAkmalian);
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){ 
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FF6633';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
    </style></head>
<body bgcolor="#CCFFFF">
<div align="left">
<form action="1n_0.php">
<table width="865" border="1" class="style1">
<tr> 
<td colspan="7" bgcolor="#FFFF66"><div align="center"><strong>
INPUT HASIL PEMERIKSAAN LAB<br />
<?
echo strtoupper($z[NamaPasien]); echo "<br>($z[NoPasien])";
$ndsa = "$z[id].$z[RegId]";
	$djkdjkdfd = mysql_query("SELECT id,NoUrut FROM urutanlab WHERE RegId='$ndsa'");
	$bf = mysql_fetch_array($djkdjkdfd);
	echo "NO URUT : ($bf[NoUrut])";
?>
</strong></div></td>
</tr>
<tr>
<td colspan="7" bgcolor="#FFFFFF"><div align="center">
 &nbsp;
</div></td>
</tr>
<tr>
<td colspan="7" bgcolor="#990000"><div align="center">
<input  name="c" type="submit" class="style1" style="background:#CCFF66" value="Lakukan Upload /  Simpan  ke Data Base">
</div></td>
</tr>
<tr>
<td width="21" bgcolor="#99CCCC"><div align="center"><strong>NO</strong></div></td>
<td width="181" bgcolor="#FFFFFF">NAMA BIAYA </td>
<td width="223" bgcolor="#99CCCC"><strong>HASIL</strong></td>
<td width="81" bgcolor="#99CCCC"><strong>NILAI NORMAL</strong></td>
<td width="55" bgcolor="#99CCCC"><strong>SATUAN</strong></td>
<td colspan="2" bgcolor="#99CCCC"><strong>KETERANGAN</strong></td>
</tr>
<?
$nomer=1;
$kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE RegId='$z[RegId]'  ORDER BY  IdBiaya,id ");
while($vv = mysql_fetch_array($kju)){
 $jkop = mysql_query("SELECT * FROM sublab_2 WHERE IdBiaya='$vv[IdBiaya]-$vv[IdSubLab]'");
 $nbx = mysql_fetch_array($jkop);
if($nbx[id]>0){
?>
<tr bgcolor="#CCCCCC" valign="top">
<? 
}else{?>
<tr valign="top">
<? } ?>
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo strtoupper($vv[NamaBiaya]); ?></div></td>
<td><div align="left">
<?
if($ibu=='iin'){
$Naj = "Negatif";
}elseif($ibu=='sri'){
$Naj = "Positif";
}else{
$Naj = $vv[Hasil];
}
?><?
if($nbx[id]>0){
?>
<input  name="Hasil_<? echo $vv[id]; ?>"  type="hidden" class="style1" value="." size="20" maxlength="80">
<? 
}else{
?><input  name="Hasil_<? echo $vv[id]; ?>" type="text" class="style1" value="<? echo $Naj; ?>" size="15" maxlength="80">
<? } ?> 
 
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
<td><div align="left">
<input  name="NilaiNormal_<? echo $vv[id]; ?>" type="hidden" class="style1" value="<? echo $vv[NilaiNormal]; ?>" size="20" maxlength="80"><? echo $vv[NilaiNormal]; ?>
</div></td>
<td><div align="left">
<input  name="Satuan_<? echo $vv[id]; ?>" type="hidden" class="style1" value="<? echo $vv[Satuan]; ?>" size="20" maxlength="80"><? echo $vv[Satuan]; ?>
</div></td>
<td width="112"><div align="left">
<input  name="Keterangan_<? echo $vv[id]; ?>" type="hidden" class="style1" value="<? echo $vv[Keterangan]; ?>" size="20" maxlength="80"><? echo $vv[Keterangan]; ?>
</div></td><td width="146"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" ><div align="left">
<?
if($nbx[id]>0){
?>
  <a href=" "
   onClick="wCompare23 = window.open('xx0_1.php?kunci=<? echo $vv[id]; ?>&ceka=<? echo $vv[IdSubLab];?>&&fito=<? echo $id; ?>&ak=1&ela=<? echo $vv[id]; ?>', 
  'wCompare23', 'width=821,height=440,left=20,Top=30,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare23.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
	 style="text-decoration:none">TAMPILKAN TUK KOREKSI SEMUA</a><? 
	 }else{ ?>
<a href="sd_d.php?id=<? echo $id; ?>&oni=<? echo $vv[id]; ?>"  style="text-decoration:none" class="style1">HAPUS</a>
<? } ?>
</div></td>
</tr>
<?
$nomer++; } ?><tr>
  <td colspan="7" bgcolor="#99CCCC">.</td>
  </tr>
</table>
</form>
</div>
</body>
</html>
<? 
}else{

}
?>