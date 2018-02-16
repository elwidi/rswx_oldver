<?
session_start();
include "../ceke.php";
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
///
$kdjfdD= mysql_query("SELECT * FROM kb WHERE IdPasien='$id'");
$ph = mysql_fetch_array($kdjfdD);
 if(!$hh[id]){
echo "DATA TIDAK DIKENAL, ATAU SUDAH DIHAPUS,...<br>";
}else{
$kjkdfd_Dfdfd =  mysql_query("SELECT * FROM kb_2 WHERE IdPasien='$id'");
$fila  = mysql_fetch_array($kjkdfd_Dfdfd);
?>
<html>
<head>
<style type="text/css">
<!--
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>
<body>
<div align="left">
<form action="iin_bojoku.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td colspan="2" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td width="88"><div align="center">
<img src="KB.jpg" width="86" height="55">
</div></td><td width="224"><div align="left">
HALAMAN INPUT KB
</div></td>
</tr>
</table>
</div>
</td>
</tr>
<tr>
<td colspan="3" valign="top"><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="127">No Pasien </td>
<td width="8">:</td>
<td width="299"><div align="left">
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
?></div></td>
</tr>
<tr  valign="top">
   <td>Jenis Kb</td><TD>:</TD><td><div align="left">
   <select name="JenisKb" class="style2">
   <?
   if($ph[id]){
   ?>
   <option value="<? echo $ph[JenisKb]; ?>"><? echo $ph[JenisKb]; ?></option>
   <? 
   }else{
   ?><option value="-">--Pilih Jenis Kb--</option>
   <? } ?><option value="Suntik">Suntik</option>
   <option value="IUD">IUD</option>
   <option value="Implan">Implan</option>
   <option value="Steril">Steril</option>
   <option value="Pil">Pil</option>
   </select>
    <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="doa" value="tobat">
  <input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">
  <input type="hidden" name="tgl1" value="<? echo $tgl1; ?>">
  <input type="hidden" name="tgl2" value="<? echo $tgl2; ?>">
  <input type="hidden" name="bln2" value="<? echo $bln2; ?>">
  <input type="hidden" name="thn1" value="<? echo $thn1; ?>">
  <input type="hidden" name="IdBagian" value="<? echo $IdBagian; ?>"></div></td>
</tr>
<tr>
<td>Tgl Periksa Berikut</td><TD>:</TD><td><div align="left">
<input type="text" name="TglPeriksa2" maxlength="3" size="3" class="style2" value="<? echo $ph[TglKembali]; ?>">
- 
<input type="text" name="BlnPeriksa2" maxlength="3" size="3" class="style2" value="<? echo $ph[BlnKembali]; ?>">
- 
<input type="text" name="ThnPeriksa2" maxlength="6" size="6" class="style2" value="<? echo $ph[ThnKembali]; ?>">
  
</div></td>
</tr>
<tr valign="top">
<td>Keterangan</td><TD>:</TD><TD><div align="left">
<textarea tabindex="2" cols="40" rows="3" name="Keterangan" class="style2"><? echo $ph[Keterangan]; ?></textarea> 
</div></TD>
</tr>
<?
if($ph[id]){
?>
<tr>
<td colspan="3" valign="top">
<div align="left">
DATA BERHASIL DIINPUT : <? echo ucfirst(strtolower($ph[Opr]));  echo " $ph[TglJam]"; ?>
</div>
</td>
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
  <input type="button" name="Vaksin" value="Vaksin"  class="style2" onClick="location.href='x10.php?id=<? echo $id; ?>&IdBagian=<? echo $IdBagian; ?>&doa=<? echo $doa; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>&IdDokter=<? echo $IdDokter; ?>';" <?  if($aku=='belajar_sholat'){?> disabled="disabled"<? } ?>>
  <?
  if($ph[id]){
  ?><input type="button" name="gghg" value="Hapus" onClick="wCompares2012_01 = window.open('ela_anak_kedua.php?id=<? echo $ph[id]; ?>', 
  'wCompares2012_01', 'width=780,height=170,left=240,Top=320,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompares2012_01.focus();"  style="background:#FF99CC"class="style2">
  <? } ?><input name="ffgf" type="button" class="style2"  style="background:#FFCC00" onClick="location.href='anc.php?id=<? echo $id; ?>&IdBagian=<? echo $IdBagian; ?>&doa=<? echo $doa; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>&IdDokter=<? echo $IdDokter; ?>';"  <?  if($aku=='belajar_sholat'){?> disabled="disabled"<? } ?> value="Anc">
  <input type="button" name="fgfgfg" value="Cek Laporan" onClick="location.href='semoga_aku_tetap_sabar.php';" class="style2" style="background:#99FF99">
  <input type="button" name="gghg" value="Selesai" onClick="window.close()" class="style2">
  </div></td>
  </tr>
</table>
</div></td><TD width="311" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td width="89">Kb Baru </td>
<td width="3">:</td>
<td width="193"><div align="left">
<input type="radio" name="KbBaru" value="1" <? if($fila[KbBaru]==1){ ?> checked="checked"<? } ?>> Ya
<input type="radio" name="KbBaru" value="0" <? if($fila[KbBaru]!=1){ ?> checked="checked"<? } ?>> Tidak
</div></td>
</tr>
<tr>
  <td>Kb Aktif </td>
  <td>:</td>
  <td><input type="radio" name="KbAktif" value="1" <? if($fila[KbAktif]==1){ ?> checked="checked"<? } ?>>
Ya
  <input type="radio" name="KbAktif" value="0" <? if($fila[KbAktif]!=1){ ?> checked="checked"<? } ?>>
Tidak </td>
</tr>
<tr>
  <td>Kb 4T </td>
  <td>:</td>
  <td><input type="radio" name="Kb4T" value="1" <? if($fila[Kb4T]==1){ ?> checked="checked"<? } ?>>
Ya
  <input type="radio" name="Kb4T" value="0" <? if($fila[Kb4T]!=1){ ?> checked="checked"<? } ?>>
Tidak </td>
</tr>
<tr>
  <td colspan="3"><strong>KAB ALKI </strong></td>
  </tr>
<tr>
  <td>.-Anemia</td>
  <td>:</td>
  <td><input type="radio" name="Anemia" value="1" <? if($fila[Anemia]==1){ ?> checked="checked"<? } ?>>
Ya
  <input type="radio" name="Anemia" value="0" <? if($fila[Anemia]!=1){ ?> checked="checked"<? } ?>>
Tidak </td>
</tr>
<tr>
  <td>.-Lila&lt;23 Thn </td>
  <td>&nbsp;</td>
  <td><input type="radio" name="Lila" value="1" <? if($fila[Lila]==1){ ?> checked="checked"<? } ?>>
Ya
  <input type="radio" name="Lila" value="0" <? if($fila[Lila]!=1){ ?> checked="checked"<? } ?>>
Tidak </td>
</tr>
<tr>
  <td>.-Peny Kronis </td>
  <td>:</td>
  <td><input type="radio" name="PKronis" value="1" <? if($fila[PKronis]==1){ ?> checked="checked"<? } ?>>
Ya
  <input type="radio" name="PKronis" value="0" <? if($fila[PKronis]!=1){ ?> checked="checked"<? } ?>>
Tidak </td>
</tr>
<tr>
  <td>.-Ims</td>
  <td>&nbsp;</td>
  <td><input type="radio" name="Ims" value="1" <? if($fila[Ims]==1){ ?> checked="checked"<? } ?>>
Ya
  <input type="radio" name="Ims" value="0" <? if($fila[Ims]!=1){ ?> checked="checked"<? } ?>>
Tidak </td>
</tr>
<tr>
  <td>Do</td>
  <td>:</td>
  <td><input type="radio" name="DoKb" value="1" <? if($fila[DoKb]==1){ ?> checked="checked"<? } ?>>
Ya
  <input type="radio" name="DoKb" value="0" <? if($fila[DoKb]!=1){ ?> checked="checked"<? } ?>>
Tidak </td>
</tr>
</table>
</div>
</TD>
</tr>
</table>
</form>
</div>
</body>
</html>
<? } ?>