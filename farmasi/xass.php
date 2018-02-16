<?
session_start();
include "../konek.php";
include "../ceke.php";
 //
  //
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
$usij = mysql_query("SELECT * FROM podetil77x WHERE id='$IdDetil'");
 $yu= mysql_fetch_array($usij);
 $dkfdfdDFDfdf_DFd = mysql_query("SELECT id FROM fakturpo WHERE id='$dimas'");
 $bc = mysql_fetch_array($dkfdfdDFDfdf_DFd);
 //
if(!$bc[id]){
echo "DATA FAKTUR TIDAK DIKENAL";
}elseif(!$yu[id]){
echo "DETAIL DATA TIDAK DIKENAL";
}elseif(!$kk[id]){
echo "DATA PO TIDAK DIKENAL";
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
.style2 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-style: italic;
	color: #009966;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="3wwww09.php">
<table border="0" cellpadding="0" cellspacing="0">
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
  || <a href="#" style="text-decoration:none"  onClick="wCompare_001129 = window.open('bhg.php?yt=9&id=<? echo $yu[IdBarang]; ?>', 
  'wCompare_001129', 'width=580,height=500,left=400,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_001129.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" >++Set++</a></div></td>
</tr>
<tr>
<td bgcolor="#FFCCCC">Ubah Satuan </td>
<td bgcolor="#FFCCCC">:</td>
<td bgcolor="#FFCCCC"><div align="left">
<select name="IdSatuan">
<option value="<? echo $yu[IdSatuan]; ?>"><? echo ucfirst(strtolower($yu[NamaSatuan])); ?></option>
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
</tr><? /*
<tr>
<td>Tgl ED </td>
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
<td>No Bacth </td>
<td>:</td><td><div align="left">
<input type="text" name="NoBatch" maxlength="100" size="20" class="style1" value="<? echo $yu[Bacth]; ?>">
</div></td>
</tr>*/ ?>
<tr>
<td><span class="style1">Qty</span></td>
<td>:</td><td><div align="left">
<input name="Qty" type="text" class="style1"  value="<? echo $yu[Qty]; ?>" size="12" maxlength="12"/>
</div></td>
</tr>

<tr>
<td colspan="3" bgcolor="#D4D0C8">
  <div align="center"><strong>POTONGAN  </strong></div></td>
</tr>
<tr>
<td>Prc  (%) </td>
<td>:</td><td><div align="left">
<input name="PotPrc" type="text" class="style1" id="PotPrc"  value="<? echo $yu[PotPrc]; ?>"size="20" maxlength="100">
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
<input type="hidden" name="kembang" value="<? echo $kembang; ?>">
<input type="hidden" name="dimas" value="<? echo $dimas; ?>">
<input name="PotRp" type="hidden" class="style1"   value="<? echo $yu[PotRp]; ?>" size="20" maxlength="100">
</div></td>
</tr>
 <tr>
<td>DiskRp</td>
<td>:</td><td><div align="left">
<input name="PotRp" type="text" class="style1" id="PotRp" value="<? echo $yu[PotRp]; ?>" size="20" maxlength="100">

</div></td>
</tr>
 <tr>
<td>Harga Beli (<?  echo  $yu[Kait]; ?>)</td><td>:</td><TD><div align="left"><?
  if($yu[Kait]==1){
$Harga =$yu[Harga];
}else{
$Harga =$yu[Total];
}
?>
 <input type="text" name="Habe" maxlength="12" value="<? echo $Harga; ?>" size="12" class="style1">
   || @ Rp.<? echo number_format($yu[Harga],2); ?>, Total : <? echo number_format($yu[Total]); ?></div></TD>
</tr>
<tr>
<td>Ukuran Satuan</td><td>:</td><td><div align="left">
<input name="bk"   type="radio"  value="" <? if($yu[Kait]!=1){?> checked="checked"<? } ?>>Besar
<input name="bk"   type="radio"  value="1" <? if($yu[Kait]==1){?> checked="checked"<? } ?>>Kecil
</div></td>
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
<td colspan="3"><div align="left" class="style2">Update Terakhir :
    <?
echo "$yu[Opr] $yu[TglJam]";
?>
</div></td>
</tr><tr>
  <td colspan="3"><div align="left">
  <input name="fgf" type="submit" class="style1" value="Update">
   
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
