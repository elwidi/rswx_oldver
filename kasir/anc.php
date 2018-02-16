<?
session_start();
include "../ceke.php";
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
///
$kdjfdD= mysql_query("SELECT * FROM anc WHERE IdPasien='$id'");
$ph = mysql_fetch_array($kdjfdD);
//
$kdjkfdfd_Dfdfdfd090= mysql_query("SELECT * FROM anc_nw WHERE IdPasien='$id'");
$hv = mysql_fetch_array($kdjkfdfd_Dfdfdfd090);
if(!$hh[id]){
echo "DATA TIDAK DIKENAL";
}else{
?>
<html>
<head><?
include "ciprat_1x.php";
include "ciprat_2x.php";
?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="s023.php"><?
$kdjdjkfd = mysql_query("SELECT * FROM anc_2 WHERE IdPasien='$id'");
$yah = mysql_fetch_array($kdjdjkfd);
?>
<table width="870" height="538" border="0" cellpadding="2" cellspacing="2">
<?
if($yah[id]){
?>
<tr bgcolor="#FF9966" valign="top"><?
}else{
?><tr>
<? } ?>
<td colspan="4" valign="top" >
  <span class="style1">HALAMAN INPUT DATA ANC</span></td>
</tr>
<tr>
<td  width="300" valign="top"><div align="left">
<table width="378" border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="106">No Pasien </td>
<td width="4">:</td>
<td width="238"><div align="left">
<? echo $hh[NoPasien]; ?>
</div></td>
</tr>
<tr>
<td>Nama Pasien </td><td>:</td><td><div align="left"><?
echo $hh[NamaPasien]; 
?></div></td>
</tr>
<tr>
<td>Dokter</td><td>:</td><td><div align="left"><? echo $hh[NamaDokter]; ?></div></td>
</tr>
<tr>
<td>Bagian</td><td>:</td><td><div align="left"><? echo ucfirst(strtolower($hh[Bagian])); ?></div></td>
</tr>
<tr  valign="top">
  <td>Alamat</td>
  <td>:</td>
  <td><div align="left"><?
  $KDIDKFD= mysql_query("SELECT * FROM datapasien WHERE NoPasien='$hh[NoPasien]'");
  $nb= mysql_fetch_array($KDIDKFD);
  echo ucfirst(strtolower($nb[Alamat]));
  ?></div></td>
</tr>
<tr  valign="top">
  <td>Telp</td>
  <td>:</td>
  <td><div align="left"><? echo $nb[Telp]; echo ", $nb[Hp]";?></div></td>
</tr>
<tr>
<td>Tgl Masuk</td><td>:</td><td><div align="left"><?
echo "$hh[TglMasuk] ";
$bln=$hh[BlnMasuk]; $thn1=$hh[ThnMasuk];
include "../bulan.php";
 //
?></div></td>
</tr>
<tr  valign="top">
  <td>Usia Kehamilan </td>
  <td>:</td>
  <td><div align="left">
  <input type="text" name="Umur" maxlength="9" size="9" class="style2" value="<? echo $ph[UmurHamil]; ?>"> <?
  //
  $hari_dalam_minggu = $ph[UmurHamil]*7;
$ukur = 280-$hari_dalam_minggu; 
     $kini = strtotime("$hh[BlnMasuk]/$hh[TglMasuk]/$hh[ThnMasuk]");
    $compare = date("d/m/Y",$kini +$ukur*86400);
  

  ?>
  Minggu
  <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="doa" value="tobat">
  <input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">
  <input type="hidden" name="tgl1" value="<? echo $tgl1; ?>">
  <input type="hidden" name="tgl2" value="<? echo $tgl2; ?>">
  <input type="hidden" name="bln2" value="<? echo $bln2; ?>">
  <input type="hidden" name="thn1" value="<? echo $thn1; ?>">
  <input type="hidden" name="IdBagian" value="<? echo $IdBagian; ?>"></div></td>
</tr>

<tr  valign="top">
  <td>Periksa Berikut </td>
  <td>:</td>
  <td><div align="left"><? echo "$ph[TglKontrol]";
  $bln=$ph[BlnKontrol];
  $thn1 = $ph[ThnKontrol]; 
  include "../bulan.php";
   ?></div></td>
</tr>
<tr  valign="top">
  <td bgcolor="#DEFEFA">Tgl Perkiraan Lahir </td>
  <td bgcolor="#DEFEFA">:</td>
  <td bgcolor="#DEFEFA"><div align="left">
  <?
  echo $compare; 
  $pde = explode("/",$compare);
  ?><font color="#FF9999"><? echo " Atau $ukur hari Lagi"; 
  $TglJam=date("d.m.Y-H:i:s");
   if($ph[id]){
  $iin_istri_hari = mysql_query("INSERT INTO  `kira_lahir` (`id`, `Tgl`, `Bln`, `Thn`, `IdRec`, `IdRj`, `Opr`, `TglJam`) 
  VALUES (NULL, '$pde[0]', '$pde[1]', '$pde[2]', '$ph[id]', '$id', '$a[Nama]', '$TglJam')");
  //
  $odkd =  mysql_query("UPDATE  `kira_lahir` SET `Tgl` = '$pde[0]',
`Bln` = '$pde[1]',
`Thn` = '$pde[2]',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE  `IdRec` ='$ph[id]'");
  //
  } 
  ?></font><? 
  ?>

  </div></td>
</tr>
<tr  valign="top">
  <td>Diagnosa</td>
  <td>:</td>
  <td><textarea rows="3" cols="34" name="Keterangan" class="style2"><? echo $ph[Keterangan]; ?></textarea></td>
</tr>
<?
if($ph[id]){
?>
<tr>
<td colspan="3" valign="top">
<div align="left">
DATA BERHASIL DIINPUT : <? echo ucfirst(strtolower($ph[Opr]));  echo " $ph[TglJam]"; ?></div></td>
</tr>
<? 
}else{
?><tr  valign="top">
  <td colspan="3">&nbsp;</td>
  </tr>
  <? } ?>
<tr  valign="top">
  <td colspan="3"><div align="left">
  <input type="submit" value="Update" name="ghhg" class="style2">
  <input type="button" name="Vaksin" value="Vaksin"  class="style2" onClick="location.href='x10.php?id=<? echo $id; ?>&IdBagian=<? echo $IdBagian; ?>&doa=<? echo $doa; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>&IdDokter=<? echo $IdDokter; ?>';">
  <?
  if($ph[id] || $hv[id]){
  ?><input type="button" name="gghg" value="Hapus" onClick="wCompares2012_01 = window.open('fito_anak_pertama.php?id=<? echo $id; ?>', 
  'wCompares2012_01', 'width=780,height=100,left=240,Top=320,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2012_01.focus();"  style="background:#FF99CC"class="style2">
	<? } ?>
  <input type="button"  name="dfdfd" value="Input Kb" onClick="location.href='dimas4thn.php?id=<? echo $id; ?>&IdBagian=<? echo $IdBagian; ?>&doa=<? echo $doa; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>&IdDokter=<? echo $IdDokter; ?>';"  class="style2" style="background-color:#CCFFCC">
  <input type="button" name="fgfgf" value="Input ICD" onClick="location.href='d_10z.php?id=<? echo $id; ?>';" class="style2"  style="background:#66CC00">
  <input type="button" name="gghg" value="Selesai" onClick="window.close()" class="style2">
  </div></td>
  </tr>
<tr  valign="top">
  <td colspan="3"><div align="left">
  <table width="311" border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td colspan="3">DiRujuk Ke </td>
  </tr>
  <tr>
  <td width="61">Rsu</td>
  <td width="3">:</td>
  <td width="225"><div align="left">
  <?
  if($yah[Rujukan1]!=''){
  echo ucfirst(strtolower($yah[Rujukan1])); ?> || <a href="z23_012.php?id=<? echo $id; ?>&mas=sapa&IdDetil=<? echo $yah[id]; ?>" style="text-decoration:none">Clear</a><? 
  }else{
  ?>
  <input name="text" type="text" class="style8" id="suggest" />
  <? } ?></div></td>
  </tr>
  <tr>
  <td>Swasta</td><td>:</td><td><div align="left">
    <?
  if($yah[Rujukan2]!=''){
  echo ucfirst(strtolower($yah[Rujukan2]));  ?> || <a href="z23_012.php?id=<? echo $id; ?>&mas=haha&IdDetil=<? echo $yah[id]; ?>" style="text-decoration:none">Clear</a>
 <?  }else{
  ?> <input name="text" type="text" class="style8" id="suggest2" />
  <? } ?></div></td>
  </tr>
  </table>
  </div></td>
</tr>
</table>
</div></td><td width="297" valign="top">
<div align="left">
<input type="hidden" name="ibu" value="<? echo $ibu; ?>">
<table width="390" border="0" cellpadding="1" cellspacing="1" class="style2">
<!-- <tr>
<td colspan="3" bgcolor="#CCCCCC"><div align="left">KUNJUNGAN</div></td>
</tr>
  <tr>
<td width="40">K1</td>
<td width="3">:</td>
<td width="244"><div align="left">
  </div></td>
</tr>
<tr>
  <td>L</td>
  <td>:</td>
  <td> </td>
</tr>
-->
<tr>
  <td width="137"  bgcolor="#FFFFFF">IMUNISASI TT (1-5) </td>
  <td width="9" bgcolor="#FFFFFF">:</td>
  <td width="234" bgcolor="#FFFFFF"><div align="left"> <input name="imunisasi_tt" type="radio" class="style2" id="imunisasi_tt
  " size="10" value="1" maxlength="10" <? if($hv[imunisasi_tt]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="imunisasi_tt" type="radio" class="style2" id="imunisasi_tt" size="10" maxlength="10"  value="0" <? if($hv[imunisasi_tt]!=1){ ?> checked="checked"<? } ?>>Tdk
  </div></td>
  </tr>
<?
/*<tr>
  <td width="119">K4</td>
  <td width="7">:</td>
  <td width="161"><input name="K4" type="radio" class="style2" id="K4" size="10" value="1" maxlength="10" <? if($hv[K4]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="K4" type="radio" class="style2" id="K4" size="10" maxlength="10"  value="0" <? if($hv[K4]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
<tr>
  <td>TT1</td>
  <td>:</td>
  <td><input name="Tt1" type="radio"  class="style2" id="Tt1" size="10" value="1"  <? if($hv[Tt1]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Tt1" type="radio"  class="style2" id="Tt1" size="10" value="0"  <? if($hv[Tt1]!=1){ ?> checked="checked"<? } ?>> Tdk</td>
</tr>
<tr>
  <td>TT2</td>
  <td>:</td>
  <td><input name="Tt2" type="radio"  class="style2" id="Tt2" size="10" value="1"   <? if($hv[Tt2]==1){ ?> checked="checked"<? } ?>>
  Ya 
  <input name="Tt2" type="radio"  class="style2" id="Tt2" size="10" value="0"   <? if($hv[Tt2]!=1){ ?> checked="checked"<? } ?>>
  Tdk</td>
</tr>
<tr>
  <td>TT3</td>
  <td>:</td>
  <td><input name="Tt3" type="radio"  class="style2" id="Tt3" value="1" size="10"<? if($hv[Tt3]==1){ ?> checked="checked"<? } ?>>
  Ya
  <input name="Tt3" type="radio"  class="style2" id="Tt3" value="0" size="10"<? if($hv[Tt3]!=1){ ?> checked="checked"<? } ?>>
  Tdk</td>
</tr>
<tr>
  <td>TT4</td>
  <td>:</td>
  <td><input name="Tt4" type="radio"  class="style2" id="Tt4" size="10" value="1" <? if($hv[Tt4]==1){ ?> checked="checked"<? } ?>>
  Ya <input name="Tt4" type="radio"  class="style2" id="Tt4" size="10" value="0" <? if($hv[Tt4]!=1){ ?> checked="checked"<? } ?>> Tdk</td>
</tr>
<tr>
  <td>TT5</td>
  <td>:</td>
  <td><input name="Tt5" type="radio"  class="style2" id="Tt5" size="10" <? if($hv[Tt5]==1){ ?> checked="checked"<? } ?> value="0"> Ya
  <input name="Tt5" type="radio"  class="style2" id="Tt5" size="10" <? if($hv[Tt5]!=1){ ?> checked="checked"<? } ?> value="1"> Tdk</td>
</tr>
*/ ?>
<tr>
  <td bgcolor="#FFFFFF">PEMBERIAN FE </td>
  <td bgcolor="#FFFFFF">:</td>
  <td bgcolor="#FFFFFF"><div align="left"><input name="Beri_Fe" type="radio" class="style2" id="Beri_Fe
  " size="10" value="1" maxlength="10" <? if($hv[Beri_Fe]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Beri_Fe" type="radio" class="style2" id="Beri_Fe" size="10" maxlength="10"  value="0" <? if($hv[Beri_Fe]!=1){ ?> checked="checked"<? } ?>>Tdk</div></td>
  </tr>
<?
/*<tr>
  <td>Fe 1 </td>
  <td>:</td>
  <td><input name="Fe1" type="radio"  class="style2" id="Fe1" size="10" value="1" <? if($hv[Fe1]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Fe1" type="radio"  class="style2" id="Fe1" size="10" value="0" <? if($hv[Fe1]!=1){ ?> checked="checked"<? } ?>> Tdk</td>
</tr>
<tr>
  <td>Fe 2 </td>
  <td>:</td>
  <td><input name="Fe2" type="radio"  class="style2" id="Fe2" size="10" value="1"  <? if($hv[Fe2]==1){ ?> checked="checked"<? } ?> > Ya
  <input name="Fe2" type="radio"  class="style2" id="Fe2" size="10" value="0"  <? if($hv[Fe2]!=1){ ?> checked="checked"<? } ?> >Tdk</td>
</tr>
<tr>
  <td>Fe 3 </td>
  <td>:</td>
  <td><input name="Fe3" type="radio"  class="style2" id="Fe3" size="10"  value="1" <? if($hv[Fe3]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Fe3" type="radio"  class="style2" id="Fe3" size="10"  value="0" <? if($hv[Fe3]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
*/ ?>
<tr>
  <td colspan="3" bgcolor="#87F477">DETEKSI RESIKO</td>
  </tr>
<tr>
  <td>Hb&lt;11</td>
  <td>:</td>
  <td><input name="Hb_1" type="radio"  class="style2"   size="10" value="1"  <? if($hv[Hb_1]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Hb_1" type="radio"  class="style2"   size="10" value="0"  <? if($hv[Hb_1]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
<tr>
  <td>Jarak&lt;2Thn</td>
  <td>:</td>
  <td><input name="Jarak" type="radio"  class="style2"   size="10" value="1"  <? if($hv[Jarak]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Jarak" type="radio"  class="style2"   size="10" value="0"  <? if($hv[Jarak]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
<tr>
  <td>Jml Anak&gt;4 </td>
  <td>:</td>
  <td><input name="JmlAnak" type="radio"  class="style2"   size="10" value="1"  <? if($hv[JmlAnak]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="JmlAnak" type="radio"  class="style2"   size="10" value="0"  <? if($hv[JmlAnak]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
<tr>
  <td>TB&lt;145Cm</td>
  <td>:</td>
  <td><input name="Tb" type="radio"  class="style2"   size="10" value="1"  <? if($hv[Tb]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Tb" type="radio"  class="style2"   size="10" value="0"  <? if($hv[Tb]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
<tr>
  <td>BB Triwulan 3 &lt;45 Kg </td>
  <td>:</td>
  <td><input name="BBt" type="radio"  class="style2"   size="10" value="1"  <? if($hv[BBt]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="BBt" type="radio"  class="style2"   size="10" value="0"  <? if($hv[BBt]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
<tr>
  <td>Lila &lt;23cm </td>
  <td>:</td>
  <td><input name="Lila" type="radio"  class="style2"   size="10" value="1"  <? if($hv[Lila]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Lila" type="radio"  class="style2"   size="10" value="0"  <? if($hv[Lila]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
<tr>
  <td>Hb&lt;11gr%</td>
  <td>:</td>
  <td><input name="Hb2" type="radio"  class="style2"   size="10" value="1"  <? if($hv[Hb2]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Hb2" type="radio"  class="style2"   size="10" value="0"  <? if($hv[Hb2]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
<tr>
  <td>Faktor Resiko Lain </td>
  <td>:</td>
  <td><input name="Rrl" type="radio"  class="style2"   size="10" value="1"  <? if($hv[Rrl]==1){ ?> checked="checked"<? } ?>> Ya
  <input name="Rrl" type="radio"  class="style2"   size="10" value="0"  <? if($hv[Rrl]!=1){ ?> checked="checked"<? } ?>>Tdk</td>
</tr>
<tr valign="top">
  <td>Komplikasi</td>
  <td>&nbsp;</td>
  <td><textarea name="Komplikasi" cols="34" rows="3" class="style2" id="Komplikasi"><? echo $hv[Komplikasi]; ?></textarea></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? } ?>