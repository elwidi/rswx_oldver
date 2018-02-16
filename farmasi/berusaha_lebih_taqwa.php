<?
session_start();
include "../konek.php";
include "../salaman.php";
 //
 
 //
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$usij = mysql_query("SELECT * FROM podetil77 WHERE id='$IdDetil'");
 $kk = mysql_fetch_array($KDJFKDJFKD); 
 //
$yu= mysql_fetch_array($usij);

//
 if(!$yu[id]){
header("Location:../keluar2.php");
}elseif(!$kk[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body bgcolor="#D7FDBB">
<div align="left">
<form action="a12222.php">
<table border="1">
<tr valign="top">
<td width="575" colspan="3"><div  align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="143">No Po </td>
<td width="3">:</td>
<td width="368"><div align="left">
<?
echo $kk[NoPo];
?>
</div></td>
</tr>
<tr>
<td>Nama Obat </td>
<td>:</td><td><div align="left"><? echo ucfirst(strtolower($yu[NamaBarang])); ?></div></td>
</tr>
<tr>
<td>Satuan</td>
<td>:</td><td><div align="left"><? echo ucfirst(strtolower($yu[NamaSatuan])); ?> ( <? echo $yu[Pengali];?> ) 
  || <a href="#" style="text-decoration:none"  onClick="wCompare_001129 = window.open('bhg.php?id=<? echo $yu[IdBarang]; ?>', 
  'wCompare_001129', 'width=580,height=500,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_001129.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >++Set++</a></div></td>
</tr>
<tr>
<td bgcolor="#CDFECE">Ubah satuan </td>
<td bgcolor="#CDFECE">:</td>
<td bgcolor="#CDFECE"><div align="left">
<select name="IdSatuan">
<option value="<? echo $yu[IdSatuan]; ?>"><?  echo $yu[NamaSatuan]; ?></option>
<?
$yahaa_dd =  mysql_query("SELECT id FROM settingsatuan WHERE IdBarang='$yu[IdBarang]'");
while($gb = mysql_fetch_array($yahaa_dd)){
?>
<option value="<? echo $gb[id]; ?>"><? 
$jjdjdjdjdjd_Dfdf = mysql_query("SELECT NamaSatuan FROM settingsatuan WHERE id='$gb[id]'");
$hb = mysql_fetch_array($jjdjdjdjdjd_Dfdf);
echo $hb[NamaSatuan];
?></option>
<?
}
?>
</select>
</div></td>
</tr>
<tr>
<td>Tgl Ed </td>
<td>:</td><td><div align="left">
  <span class="style15 style2 style8  style3">
  <select name="TglEd" class="style1" id="TglEd">
    <?
	if($yu[TglEd]>0){
	?><option value="<? echo $yu[TglEd]; ?>"><? echo $yu[TglEd]; ?></option><? 
	}else{
	?><option value="<? echo date("d")-0; ?>"><? echo date("d")-0; ?></option>
	<? } ?>
    <?
		 
$ttg= 1;
while($ttg<32){
?>
    <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
    <? $ttg++; } ?>
  </select>
/
<select name="BlnEd" class="style1" id="BlnEd">
   <?
	if($yu[BlnEd]>0){
	?><option value="<? echo $yu[BlnEd]; ?>"><? echo $yu[BlnEd]; ?></option><? 
	}else{
	?><option value="<? echo date("m")-0; ?>"><? echo date("m")-0; ?></option>
	<? } ?>
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
<select name="ThnEd" class="style1" id="ThnEd">
  <?
  if($yu[ThnEd]>0){
  ?><option value="<? echo $yu[ThnEd]; ?>"><? echo $yu[ThnEd]; ?></option>
  <? } 
  ?><?
$awa=2013;
while($awa<2021){
?>
  <option value="<? echo $awa; ?>"><? echo $awa; ?></option>
  <?
$awa++; }
?>
</select>
  </span></div></td>
</tr>
<tr>
<td><span class="style1">Qty</span></td>
<td>:</td><td><div align="left">
<input name="Qty" type="text" class="style1"  value="<? echo $yu[Qty]; ?>" size="12" maxlength="12"/>
</div></td>
</tr>
<tr>
<td>No Bact </td>
<td>:</td><td><div align="left">
<input type="text" name="NoBatch" maxlength="100" size="20" class="style1" value="<? echo $yu[Bacth]; ?>">
</div></td>
</tr>
<tr>
<td colspan="3" bgcolor="#D4D0C8">
  <div align="center"><strong>POTONGAN  </strong></div></td>
</tr>
<tr>
<td>Prc (%)
  <input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
<input type="hidden" name="kembang" value="<? echo $kembang; ?>">
<input type="hidden" name="dimas" value="<? echo $dimas; ?>"> </td><td>:</td><td><div align="left">
<input name="PotPrc" type="text" class="style1" id="PotPrc"  value="<? echo $yu[PotPrc]; ?>"size="20" maxlength="100">
<input name="PotRp" type="hidden" class="style1" id="PotRp" value="<? echo $yu[PotRp]; ?>" size="20" maxlength="100">
</div></td>
</tr>
<!-- 
<tr>
<td>DiskRp</td>
<td>:</td><td><div align="left">

</div></td>
</tr>
-->
<tr>
<td>Harga Beli</td><td>:</td><TD><div align="left">
<input type="text" name="HargaBeli" maxlength="12" value="<? echo $yu[Harga]; ?>" size="12" class="style1">
</div></TD>
</tr>
<?
$kdjfkdjfkdjkfd_Dfdkfdlf = mysql_query("SELECT * FROM ket_det_po WHERE IdDetil='$IdDetil'");
$yape  = mysql_fetch_array($kdjfkdjfkdjkfd_Dfdkfdlf);
$mas_hari= $yape; 
?>
<tr valign="top">
<td>Catatan</td><td>:</td><td><div align="left">
<textarea rows="3" cols="30" name="Keterangan"  class="style1"><? echo $mas_hari[Keterangan]; ?></textarea>
</div></td>
</tr>
 <tr>
  <td colspan="3"><div align="left">
  <input name="fgf" type="submit" class="style1" value="Update">
   <input type="button" name="fgfgf" value="Hapus" onClick="location.href='delel_o.php?id=<? echo $id; ?>&Detil=<? echo $IdDetil; ?>';" class="style1" style="background:#FFCC00">
  <input name="fgf" type="button" class="style1" onClick="window.close()" value="Selesai">
  </div></td>
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
