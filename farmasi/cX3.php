 <?
session_start();
include "../konek.php";
include "../ceke.php";
 
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD);
//
$lklfkfdl = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'"); 
$yh = mysql_fetch_array($lklfkfdl);
//
   $kdjfkd_Dfdfd = mysql_query("SELECT COUNT(id) AS hh FROM  journal_tmp WHERE NoTxn='HPP-$dimas'");
 $yb = mysql_fetch_array($kdjfkd_Dfdfd);
 /*
 if($yb[hh]>0){
 echo "DATA INI SUDAH TERJOURNAL SEMENTARA SILAHKAN RESET JIKA AKAN DI EDIT<br>";
 ?><input type="button" name="fffg" value="Selesai" onClick="window.close()">
 <input disabled="disabled" type="button" name="fgfgfgf" value="Reset" style="background:#FF99CC" onClick="wCompare_0m133 = window.open('../Akuntansi/z_po.php?anak=mama&dimas=<? echo $dimas; 
	?>&id=<? echo $id; ?>', 
  'wCompare_0m133', 'width=580,height=120,left=370,Top=160, resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_0m133.focus();" ><? 
}else
*/ if(!$kk[id]){
header("Location:../keluar2.php");
}else{
 ?>
<html>
<head>
<style type="text/css">
<!--
.style5 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style6 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
}
-->
</style>
</head>
<body>
<div align="left">
<?
if($yb[hh]>0 || $yh[Stak]==2){

}else{
?>
<form action="ft_3434.php">
<? } ?><table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="636" height="28" colspan="3"><div align="left">
<span class="style6">HALAMAN TERIMA BARANG DATANG</span><br />
 </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="1" cellspacing="1" class="style5">
<tr>
<td width="137">NOPO</td>
<td width="3">:</td>
<td width="431"><div align="left"><? echo $kk[NoPo]; ?></div></td>
</tr>
<tr>
<td>SUPPLIER</td><td>:</td><td><div align="left"><? echo strtoupper($kk[NamaSupplier]); ?>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="kembang" value="<? echo $kembang; ?>">
</div></td>
</tr>

<tr>
<td>PILIH FAKTUR</td>
<td>:</td><td><div align="left">
<select name="Fak" class="style5">
  <option value="-">-Pilih Faktur-</option>
  <option value="" onClick="location.href='cX3.php?id=<? echo $id; ?>';">Faktur Baru</option>
<?
  $kdik_dfd= mysql_query("SELECT id,NoFaktur FROM fakturpo WHERE IdPo='$id'");
  while($ca = mysql_fetch_array($kdik_dfd)){   ?>
  <option value="<? echo $ca[id]; ?>" onClick="location.href='cX3.php?dimas=<? echo $ca[id]; ?>&id=<? echo $id; ?>';"><? echo $ca[NoFaktur]; ?></option>
  <? } ?>
  </select>
  <input   type="hidden" name="dimas" value="<? echo $dimas; ?>">
 || TAMPIL PER : <input <? if($v==3){ ?> checked="checked"<? } ?> type="radio" name="ffgf" value="1" onClick="location.href='cX3.php?v=3&id=<? echo $id; ?>&dimas=<? echo $dimas; ?>';" >FAKTUR 
 <input type="radio" name="ffgf" value="1" <?
 if($v==3){ }else{
 ?>checked="checked" <? } ?> onClick="location.href='cX3.php?id=<? echo $id; ?>&dimas=<? echo $dimas; ?>';">SEMUA 
 </div></td>
</tr>
<tr>
  <td>NO INV </td>
  <td>:</td>
  <td><div align="left">
  <input name="NoInv" type="text" class="style5" size="20" maxlength="50" value="<? echo $yh[NoInv]; ?>" />
  || <select name="Fak" class="style5">
  <option value="-">-Pilih Inv-</option>
 <?
  $kdik_dfd2= mysql_query("SELECT id,NoInv FROM fakturpo WHERE IdPo='$id' AND NoInv!=''");
  while($ca2 = mysql_fetch_array($kdik_dfd2)){   ?>
  <option value="<? echo $ca2[id]; ?>" onClick="location.href='cX3.php?dimas=<? echo $ca2[id]; ?>&id=<? echo $id; ?>';"><? echo $ca2[NoInv]; ?></option>
  <? } ?>
  </select></div></td>
</tr>
<tr>
  <td>NO FAKTUR </td>
  <td>:</td>
 <td><div align="left">
  <input name="NoFak" type="text" class="style5" size="20" maxlength="50" value="<? echo $yh[NoFaktur]; ?>" />
        ( <? echo $yh[Stak];?> )</div></td></tr>
  <tr>
  <td>NO Dn</td><td>:</td><td><div align="left">
  <input type="text" name="NoDn" maxlength="50" size="20" class="style5" value="<? echo $yh[NoDn]; ?>"> || 
  <select name="select" class="style5">
    <option value="-">-Pilih NoDn-</option>
    <?
  $kdik_dfd3= mysql_query("SELECT id,NoDn FROM fakturpo WHERE IdPo='$id' AND NoDn!=''");
  while($ca3 = mysql_fetch_array($kdik_dfd3)){   ?>
    <option value="<? echo $ca3[id]; ?>" onClick="location.href='cX3.php?dimas=<? echo $ca3[id]; ?>&id=<? echo $id; ?>';"><? echo $ca3[NoDn]; ?></option>
    <? } ?>
  </select>
  </div></td>
  </tr>
  <tr>
  <td>NO SO</td><td>:</td><td><div align="left">
  <input type="text" name="NoSo" maxlength="50" size="20" class="style5" value="<? echo $yh[NoSo]; ?>">
  || 
  <select name="select" class="style5">
    <option value="-">-Pilih NoSo-</option>
    <?
  $kdik_dfd4= mysql_query("SELECT id,NoSo FROM fakturpo WHERE IdPo='$id' AND NoSo!=''");
  while($ca4 = mysql_fetch_array($kdik_dfd4)){   ?>
    <option value="<? echo $ca4[id]; ?>" onClick="location.href='cX3.php?dimas=<? echo $ca4[id]; ?>&id=<? echo $id; ?>';"><? echo $ca4[NoSo]; ?></option>
    <? } ?>
  </select>
  </div></td>
  </tr>
<tr>
<td>TGL BRG DATANG</td><td>:</td><td><div align="left">
    <select name="TglDtgl" class="style5" >
	<?
	if($yh[TglDtgl]>0){
	?>
	<option value="<? echo $yh[TglDtgl]; ?>"><? echo $yh[TglDtgl]; ?></option><?
	}else{
	?><option value="<? echo date("d")-0; ?>"><? echo date("d")-0; ?></option>
      <?
	  }
		 
$ttg2x= 31;
while($ttg2x>0){
?>
      <option value="<? echo $ttg2x;  ?>"><? echo $ttg2x;  ?></option>
      <? $ttg2x--; } ?>
    </select>
/
<select name="BlnDtg" class="style5" >
<?
if($yh[BlnDtg]>0){
?><option value="<? echo $yh[BlnDtg]; ?>"><? echo $yh[BlnDtg]; ?></option><? 
}else{
?><option value="<? echo date("m")-0; ?>"><?  echo date("m")-0;  ?></option>
  <? } ?><option value="<? echo date("m")-0; ?>">
  <? $bln=date("m"); $thn1='';
include "../bulan.php"; ?>
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
<select name="ThnDtg" class="style5"><?
if($yh[ThnDtg]>0){
?><option value="<? echo $yh[ThnDtg]; ?>"><? echo $yh[ThnDtg]; ?></option><? 
}else{
?>
<option value="<? echo date("Y"); ?>"><? echo date("Y"); ?></option>
  <? } ?><option value="<? echo date("Y");?>"><? echo date("Y");?></option>
  <?
$hyh2 = 2013;
while($hyh2<=2020){
?>
  <option value="<? echo $hyh2; ?>"><? echo $hyh2; ?></option>
  <? 
$hyh2++;
}
?>
</select>
</div></td>
</tr>
<tr>
  <td>TGL JT </td>
  <td>:</td>
  <td><span class="style15 style2 style8  style3">
    <select name="TglJt" class="style5" id="TglJt">
	<?
	if($yh[TglJt]>0){
	?><option value="<? echo $yh[TglJt]; ?>"><? echo $yh[TglJt]; ?></option><?
	}else{
	?><option value="-">-Tgl Jt-</option>
      <?
	  }
		 
$ttg2= 31;
while($ttg2>0){
?>
      <option value="<? echo $ttg2;  ?>"><? echo $ttg2;  ?></option>
      <? $ttg2--; } ?>
    </select>
/
<select name="BlnJt" class="style5" id="BlnJt">
<?
if($yh[BlnJt]>0){
?><option value="<? echo $yh[BlnJt]; ?>"><? echo $yh[BlnJt]; ?></option><? 
}else{
?><option value="-">-BlnJt-</option>
  <? } ?><option value="<? echo date("m")-0; ?>">
  <? $bln=date("m"); $thn1='';
include "../bulan.php"; ?>
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
<select name="ThnJt" class="style5" id="ThnJt"><?
if($yh[ThnJt]>0){
?><option value="<? echo $yh[ThnJt]; ?>"><? echo $yh[ThnJt]; ?></option><? 
}else{
?>
<option value="-">-Thn Jt-</option>
  <? } ?><option value="<? echo date("Y");?>"><? echo date("Y");?></option>
  <?
$hyh = 2014;
while($hyh<=2020){
?>
  <option value="<? echo $hyh; ?>"><? echo $hyh; ?></option>
  <? 
$hyh++;
}
?>
</select>
  </span></td>
</tr>
<?
if($dimas>0){
?>
<? } ?>
<tr <? if($kk[Ppn]==1){ ?> bgcolor="#CCCCCC"<? } ?>>
<td>Ppn</td><td>:</td><td><div align="left"> 
<input type="radio" name="Ppn" value="1" onClick="location.href='d_23232.php?id=<? echo $id; ?>&dimas=<? echo $dima; ?>&Ppn=1';"  <? if($kk[Ppn]==1){ ?> checked="checked"<?  } ?>>Ya
 <input type="radio" name="Ppn" value="0" <? if($kk[Ppn]==0){ ?> checked="checked"<?  } ?>  onClick="location.href='d_23232.php?id=<? echo $id; ?>&dimas=<? echo $dima; ?>&Ppn=0';" >Tidak
</div></td>
</tr>

<tr>
  <td colspan="3" bgcolor="#993333"><div align="left">
  <input name="fgf" type="submit" class="style5" value="Submit" <? if($yb[hh]>0 || $yh[Stak]==2){ ?> disabled="disabled"<? } ?>>
  <?
   if($dimas>0){
  ?>
  <input name="fgf" <? if($yh[Stak]==2){ ?> disabled="disabled"<? } ?> type="button" class="style5" onClick="wComparec45454ddd = window.open('df_099.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&id=<? echo $id; ?>', 
  'wComparec45454ddd', 'width=580,height=120,left=570,Top=256,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparec45454ddd.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   value="Close" >
	<? } ?>
   <? 
   /* onClick="location.href='a012.php?id=<? echo $id; ?>&dimas=<? echo $dimas; ?>';" 
   */
   if($dimas>0){
   ?><input type="button" name="ffgfgf" value="Cetak Bukti"
   
   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
  onClick="wComparecdd34_0_lk_343d = window.open('a02_12.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&IdDetil=<? echo $gg[id]; ?>&id=<? echo $id; ?>', 
  'wComparecdd34_0_lk_343d', 'width=880,height=400,left=70,Top=56,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd34_0_lk_343d.focus();"
	class="style5">
   <? } ?>
   <?
    if($dik_dimas[sembilanbelas]==1 && $yh[Stak]==2){
   ?><input type="button" name="ffgfgf" value="BukaTransaksi"  style="background:#CCFFCC"
   onClick="wComparecdd34_0cxcxc_lk_343d = window.open('x120.php?dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&IdDetil=<? echo $gg[id]; ?>&id=<? echo $id; ?>', 
  'wComparecdd34_0cxcxc_lk_343d', 'width=680,height=200,left=170,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wComparecdd34_0cxcxc_lk_343d.focus();"
	class="style5"><?
   } 
   ?> <input name="fgf" type="button" class="style5" onClick="window.close()" value="Selesai">
  </div></td>
  </tr>
</table>
</div></td>
</tr>
<tr>
  <td colspan="3" valign="top"><div align="left">
  <iframe src="8uuuh.php?v=<? echo $v; ?>&dimas=<? echo $dimas; ?>&kembang=<? echo $kembang; ?>&id=<? echo $id; ?>"  width="1005" height="500" frameborder="0"></iframe>
  </div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
} ?>
