<?
session_start();
include "../konek.php";
include "../ceke.php";
?>
<html>
<head>
<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFCC00';
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
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
<?
include "cso.php";
?>
</head>
<body>
<div align="left">  
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="1039" colspan="3"><div align="left">
<span class="style1">LIST DATA FAKTUR</span><br />
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table width="601" border="0" cellpadding="2" cellspacing="2">
<tr>
<td>NO FAKTUR</td><td>:</td><td><div align="left">
<input name="text" type="text" class="style2" id="suggest2" />
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input type="button" name="dfjdjfhnd" value="Kembali" onClick="location.href='index.php';" />
<?
if($id>0){
?><input  type="button" name="jdhfjhdfjd" value="Reset" onClick="location.href='minum_kopi_makan_gorengan.php';"><?
}
?><input type="button" name="djhfdjhfd" value="Cek By Periode"  />
</div></td>
</tr>
</table>
</div>
</td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="lef">
<table width="924" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="27" bgcolor="#0000CC"><div align="center"><span class="style3">No</span></div></td>
<td width="122" bgcolor="#0000CC"><span class="style3">No Faktur</span></td>
<td width="224" bgcolor="#0000CC"><span class="style3">Nama Supplier</span></td>
<td width="103" bgcolor="#0000CC"><span class="style3">Tgl Faktur</span></td>
<td width="96" bgcolor="#0000CC"><span class="style3">Tgl Tukar</span></td>
<td bgcolor="#0000CC" colspan="3"><span class="style3">NoPo</span></td>
</tr>
<?
$nomer = 1;
if($id>0){
$lkdjfldkfldk = mysql_query("SELECT * FROM fakturpo WHERE id='$id'");
}else{
$lkdjfldkfldk = mysql_query("SELECT * FROM fakturpo ORDER BY id desc LIMIT 0,200");
}
while($nn = mysql_fetch_array($lkdjfldkfldk)){
$kdjkdkjkdf = mysql_query("SELECT * FROM polog77x WHERE id='$nn[IdPo]'");
$h = mysql_fetch_array($kdjkdkjkdf);
$nah = $nomer%2;
if($nah==1){
$warna=' bgcolor="#99FF66"';
}else{
$warna='bgcolor="#FFFFCC"';
}
?>
<tr <?  echo $warna; ?>  >
<td><div align="center"><? echo $nomer; ?></div></td>
<td><div align="left"><? echo $nn[NoFaktur]; ?></div></td>
<td><div align="left"><? 
echo ucfirst(strtolower($h[NamaSupplier]));
?></div></td>
<td><div align="left"><?
echo "$nn[TglDtgl]-$nn[BlnDtg]-$nn[ThnDtg]";
?></div></td>
<td><div align="right"><?
if($nn[TglTukar]>0){
echo "$nn[TglTukar]-$nn[BlnTukar]-$nn[ThnTukar]";
}else{
echo "-";
} ?></div></td>
<td width="165"><div align="left"><?
echo $h[NoPo]; 
?></div></td>
<td width="93"  onClick="wComparecdd1209aj_0_d = window.open('dimas_mau_tk.php?id=<? echo $h[id]; ?>&dimas=<? echo $nn[id]; ?>&anak=desa', 
  'wComparecdd1209aj_0_d', 'width=870,height=450,left=270,Top=186,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd1209aj_0_d.focus();" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >Ctk Bukti</td>
<td  onClick="wComparec_000ddd = window.open('juju.php?kembang=<? echo $kembang; ?>&id=<? echo $h[id]; ?>&dimas=<? echo $nn[id]; ?>', 
  'wComparec_000ddd', 'width=380,height=150,left=370,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparec_000ddd.focus();"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  width="77">TglTukar</td>
</tr>
<?
$nomer++; } ?>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>