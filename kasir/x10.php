<?
session_start();
include "../ceke.php";
 include "../konek.php";
///
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
//
$odfodi_Dfdfdl = mysql_query("SELECT * FROM datapasien WHERE NoPasien='$hh[NoPasien]'");
$ss = mysql_fetch_array($odfodi_Dfdfdl);
//
$ksjdskds_dsds = mysql_query("SELECT * FROM vaksin_pasien WHERE IdPasen='$id'");
$ii= mysql_fetch_array($ksjdskds_dsds);
///////////////////////////////////==========================
$idfdfd_DFdfdfdf =  mysql_query("SELECT * FROM bacth_vaksin WHERE IdRj='$id'");
$ps = mysql_fetch_array($idfdfd_DFdfdfdf);
$TglJam=date("d.m.Y-H:i:s");
//echo "$hh[Umur]";
if($hh[Umur]>5){}else{
/*
$isi= mysql_query("INSERT INTO  
`vaksin_pasien`
 (`id`, `IdPasen`, `NoPasien`, `NamaPasien`, `Bcg`, `Polio1`, `Polio2`, `Polio3`, `Polio4`, 
 `Dpt1`, `Dpt2`, `Dpt3`, `Heb1`, `Heb2`, `Heb3`, `DptKombo`, `Opr`, `TglJam`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`) VALUES
  (NULL, '$id', '$hh[NoPasien]', '$hh[NamaPasien]', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '$a[Nama]','$TglJam','$hh[TglMasuk]','$hh[BlnMasuk]','$hh[ThnMasuk]')");
  */
  }
if(!$hh[id]){
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
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
-->
</style>
</head>
<body>
<div align="left">
<?
if($hh[Umur]>5){
}else{
?>
<?
if($ii[id]){
?><form action="tagihane_lama_bgt.php">
<? }else{ ?>
<form action="aku_tetap_konsisten.php">
<?  }  } ?><table border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td colspan="3"><div align="left">
<span class="style1">TENTUKAN JENIS VAKSIN</span><br />
<table border="0" cellpadding="1" cellspacing="1" class="style1">
<tr>
<td width="107">NO RM</td>
<td width="3">:</td>
<td width="307"><div align="left"><? echo $hh[NoPasien]; ?></div></td>
</tr>
<tr>
<td>NAMA PASIEN</td><td>:</td><td><div align="left"><? echo $hh[NamaPasien]; ?></div></td>
</tr>
<tr>
<td>TGL LAHIR</td><td>:</td><td><div align="left"><? echo "$ss[tgllhr]"; ?></div></td>
</tr>
<tr>
<td>TGL DAFTAR</td><td>:</td><td><div align="left"><? echo "$hh[TglMasuk]-$hh[BlnMasuk]-$hh[ThnMasuk]"; ?></div></td>
</tr>
<tr>
<td>USIA</td><td>:</td><td><div align="left"><? echo "$hh[Umur] Thn";
$pc = explode(":",$hh[BlnUmur]); 
echo " $pc[0] Bln $pc[1] Hr"; ?></div></td>
</tr>
<tr valign="top">
<td>ALAMAT</td><td>:</td><td><div align="left"><? 
echo $ss[Alamat]; ?></div></td>
</tr>
</table></div></td>
</tr>
<?
if($hh[Umur]>5){
?><tr>
  <td colspan="3"  bgcolor="#FF99FF">USIA PASIEN <? echo $hh[Umur]; ?> Thn Jadi Tidak bisa di Input Vaksin ( <5 Thn)</td>
</tr>
<? 
}else{
?>
<tr>
  <td colspan="3" bgcolor="#ECE9D8">JENIS VAKSIN........TERAKHIR UPDATE : <? echo $ii[Nama]; echo "  $ii[TglJam]";?> </td>
</tr>
<? } ?>
<tr valign="top">
  <td colspan="2"><div align="left">
  <table width="461" border="0" cellpadding="2" cellspacing="2" class="style2">
  <TR>
  <td width="7">1</td>
  <td width="126">BCG</td>
  <td width="10">:</td>
  <td width="292"> 
    <div align="left">
      <input type="radio"  <? if($ii[Bcg]==1){ ?> checked="checked"<? } ?> name="Bcg" value="1"> 
      Ya 
      <input type="radio" name="Bcg" value="0"  <? if($ii[Bcg]==0){ ?> checked="checked"<? } ?>> 
      Tidak 
      <input type="hidden" name="id" value="<? echo $id; ?>">
          <input type="hidden" name="doa" value="tobat">
          <input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">
          <input type="hidden" name="tgl1" value="<? echo $tgl1; ?>">
          <input type="hidden" name="tgl2" value="<? echo $tgl2; ?>">
          <input type="hidden" name="bln2" value="<? echo $bln2; ?>">
          <input type="hidden" name="thn1" value="<? echo $thn1; ?>">
          <input type="hidden" name="IdBagian" value="<? echo $IdBagian; ?>">  
          || 
          <input name="Bcg_1" type="text" id="Bcg_1" size="12" maxlength="80" value="<? echo $ps[Bcg]; ?>"> 
    </div></td>
  </TR>
  <TR>
 <td>2</td>   <td>POLIO 1 </td>
    <td>:</td>
    <td>  <div align="left">
      <input type="radio"  <? if($ii[Polio1]==1){ ?> checked="checked"<? } ?> name="Polio1" value="1"> 
      Ya 
      <input type="radio" name="Polio1" value="0"  <? if($ii[Polio1]==0){ ?> checked="checked"<? } ?>>   
      Tidak
  || 
  <input name="Polio_1" type="text" id="Polio_1" size="12" maxlength="80" value="<? echo $ps[Polio_1]; ?>">
    </div></td>
  </TR>
  <TR>
    <td>3</td><td>POLIO 2 </td>
    <td>:</td>
    <td><div align="left">
      <input type="radio"  <? if($ii[Polio2]==1){ ?> checked="checked"<? } ?> name="Polio2" value="1"> 
      Ya 
      <input type="radio" name="Polio2" value="0"  <? if($ii[Polio2]==0){ ?> checked="checked"<? } ?>>
      Tidak 
      || 
      <input name="Polio_2" type="text" id="Polio_2" size="12" maxlength="80" value="<? echo $ps[Polio_2];  ?>">
    </div></td>
  </TR>
  <TR>
    <td>4</td><td>POLIO 3 </td>
    <td>:</td>
    <td><div align="left">
      <input type="radio"  <? if($ii[Polio3]==1){ ?> checked="checked"<? } ?> name="Polio3" value="1"> 
      Ya 
      <input type="radio" name="Polio3" value="0"  <? if($ii[Polio3]==0){ ?> checked="checked"<? } ?>>
      Tidak 
      || 
      <input name="Polio_3" type="text" id="Polio_3" size="12" maxlength="80"  value="<? echo $ps[Polio_3]; ?>">
    </div></td>
  </TR>
  <TR>
    <td>5</td><td>POLIO 4 </td>
    <td>:</td>
    <td><div align="left">
      <input type="radio"  <? if($ii[Polio4]==1){ ?> checked="checked"<? } ?> name="Polio4" value="1"> 
      Ya 
      <input type="radio" name="Polio4" value="0"  <? if($ii[Polio4]==0){ ?> checked="checked"<? } ?>>
      Tidak 
      || 
      <input name="Polio_4" type="text" id="Polio_4" size="12" maxlength="80" value="<? echo $ps[Polio_4]; ?>">
    </div></td>
  </TR>
  <TR>
    <td>6</td><td>DPT 1 </td>
    <td>:</td>
    <td><div align="left">
      <input type="radio"  <? if($ii[Dpt1]==1){ ?> checked="checked"<? } ?> name="Dpt1" value="1"> 
      Ya 
      <input type="radio" name="Dpt1" value="0"  <? if($ii[Dpt1]==0){ ?> checked="checked"<? } ?>>
      Tidak
      || 
      <input name="Dpt_1" type="text" id="Dpt_1" size="12" maxlength="80" value="<? echo $ps[Dpt_1]; ?>">
    </div></td>
  </TR>
  <TR>
    <td>7</td><td>DPT 2 </td>
    <td>:</td>
    <td><div align="left">
      <input type="radio"  <? if($ii[Dpt2]==1){ ?> checked="checked"<? } ?> name="Dpt2" value="1"> 
      Ya 
      <input type="radio" name="Dpt2" value="0"  <? if($ii[Dpt2]==0){ ?> checked="checked"<? } ?>>
      Tidak
      || 
      <input name="Dpt_2" type="text" id="Dpt_2" size="12" maxlength="80" value="<? echo $ps[Dpt_2]; ?>">
    </div></td>
  </TR>
  <TR>
    <td>8</td>
	<td>DPT 3 </td>
    <td>:</td>
    <td><div align="left">
      <input type="radio"  <? if($ii[Dpt3]==1){ ?> checked="checked"<? } ?> name="Dpt3" value="1"> 
      Ya 
      <input type="radio" name="Dpt3" value="0"  <? if($ii[Dpt3]==0){ ?> checked="checked"<? } ?>>
      Tidak
      || 
      <input name="Dpt_3" type="text" id="Dpt_3" size="12" maxlength="80" value="<? echo $ps[Dpt_3]; ?>">
    </div></td>
  </TR>
  <TR>
    <td>9</td>
    <td>Pentabio</td>
    <td>:</td>
    <td><div align="left">
      <input type="radio"  <? if($ii[Pentabio]==1){ ?> checked="checked"<? } ?> name="Pentabio" value="1"> 
      Ya 
      <input type="radio" name="Pentabio" value="0"  <? if($ii[Pentabio]==0){ ?> checked="checked"<? } ?>>
      Tidak
      || 
      <input name="Pentabio_1" type="text" id="Pentabio_1" size="12" maxlength="80" value="<? echo $ps[Pentabio_1]; ?>">
    </div></td>
  </TR>
 <!--  <TR>
    <td colspan="2" bgcolor="#A8FDB5">BACTH NO </td>
    <td colspan="2" bgcolor="#A8FDB5"><div align="left">
	<input type="text" name="Bacth" maxlength="120"  size="15" class="style2" value="<? echo $ii[Bacth]; ?>">
	</div></td>
    </TR>
  --> </table>
  </div></td>
  <td width="539" valign="top"><div align="left">
  <table width="434" border="0" cellpadding="2" cellspacing="2" class="style2">
    <TR>
    <td>10</td>
    <td>HEB-B 0 </td>
    <td>:</td>
  <td width="267"><input type="radio"  <? if($ii[Heb0]==1){ ?> checked="checked"<? } ?> name="Heb0" value="1"> Ya 
  <input type="radio" name="Heb0" value="0"  <? if($ii[Heb0]==0){ ?> checked="checked"<? } ?>>
  Tidak ||
  <input name="Heb0_1" type="text" id="Heb0_1" size="12" maxlength="80" value="<? echo $ps[Heb0]; ?>"></td>  
    </TR>
  <TR>
  <td width="15">11</td>
  <td width="123">HEB-B 1 </td>
  <td width="3">:</td>
  <td width="267"><input type="radio"  <? if($ii[Heb1]==1){ ?> checked="checked"<? } ?> name="Heb1" value="1"> Ya 
  <input type="radio" name="Heb1" value="0"  <? if($ii[Heb1]==0){ ?> checked="checked"<? } ?>>
  Tidak || 
  <input name="Heb1_1" type="text" id="Heb1_1" size="12" maxlength="80" value="<? echo $ps[Heb1]; ?>"></td>
  </TR>
  <TR>
 <td>12</td>   
 <td>HEB B 2 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Heb2]==1){ ?> checked="checked"<? } ?> name="Heb2" value="1"> Ya 
  <input type="radio" name="Heb2" value="0"  <? if($ii[Heb2]==0){ ?> checked="checked"<? } ?>>
  Tidak || 
  <input name="Heb2_1" type="text" id="Heb2_1" size="12" maxlength="80" value="<? echo $ps[Heb2]; ?>"></td>
  </TR>
  <TR>
    <td>13</td>
    <td>HEB-B 3 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Heb3]==1){ ?> checked="checked"<? } ?> name="Heb3" value="1"> Ya 
  <input type="radio" name="Heb3" value="0"  <? if($ii[Heb3]==0){ ?> checked="checked"<? } ?>>
  Tidak || 
  <input name="Heb3_1" type="text" id="Heb3_1" size="12" maxlength="80" value="<? echo $ps[Heb3]; ?>"></td>
  </TR>
  <TR>
    <td>14</td>
    <td>DPT-HB KOMBO </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[DptKombo]==1){ ?> checked="checked"<? } ?> name="DptKombo" value="1"> Ya 
  <input type="radio" name="DptKombo" value="0"  <? if($ii[DptKombo]==0){ ?> checked="checked"<? } ?>>
  Tidak || 
  <input name="Kombo_1" type="text" id="Kombo_1" size="12" maxlength="80" value="<? echo $ps[Kombo_1]; ?>"></td>
  </TR>
   <TR>
    <td>15</td>
    <td>DPT-HB KOMBO -2 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[DptKombo2]==1){ ?> checked="checked"<? } ?> name="DptKombo2" value="1"> Ya 
  <input type="radio" name="DptKombo2" value="0"  <? if($ii[DptKombo2]==0){ ?> checked="checked"<? } ?>>
  Tidak || 
  <input name="Kombo_2" type="text" id="Kombo_2" size="12" maxlength="80" value="<? echo $ps[Kombo_2]; ?>"></td>
  </TR>
   <TR>
    <td>16</td>
    <td>DPT-HB KOMBO -3</td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[DptKombo3]==1){ ?> checked="checked"<? } ?> name="DptKombo3" value="1"> Ya 
  <input type="radio" name="DptKombo3" value="0"  <? if($ii[DptKombo3]==0){ ?> checked="checked"<? } ?>>
  Tidak || 
  <input name="Kombo_3" type="text" id="Kombo_3" size="12" maxlength="80" value="<? echo $ps[Kombo_3]; ?>"></td>
  </TR>
  <TR>
    <td>17</td>
    <td>CAMPAK </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Campak]==1){ ?> checked="checked"<? } ?> name="Campak" value="1"> Ya 
  <input type="radio" name="Campak" value="0"  <? if($ii[Campak]==0){ ?> checked="checked"<? } ?>>
  Tidak || 
  <input name="Campak_1" type="text" id="Campak_1" size="12" maxlength="80" value="<? echo $ps[Campak]; ?>"></td>
  </TR>
  <TR valign="top">
  <td>18</td>
  <td>KETERANGAN</td><td>:</td><td colspan="2"><div align="left">
  <textarea rows="3" cols="30" name="Keterangan" class="style1"><? echo $ii[Keterangan]; ?></textarea>
  </div></td>
  </TR>
  <TR>
    <td colspan="4">&nbsp;</td>
    </TR>
  </table>
  </div></td>
</tr>
<tr valign="top">
  <td colspan="3" bgcolor="#999999"><div align="left">
  <input <? if($hh[Umur]>5){?> disabled="disabled"<? }else{  } ?> name="fdfd" type="submit" class="style2" value="Update">
  <?
  if($ps[id] || $ii[id]){
  ?><input name="ffgf" type="button" class="style2" onClick="location.href='x_s10.php?id=<? echo $id; ?>';" value="Hapus">
  <? } ?>
   <input name="ffgf" type="button" class="style2"  style="background:#FFCC00" onClick="location.href='anc.php?id=<? echo $id; ?>&IdBagian=<? echo $IdBagian; ?>&doa=<? echo $doa; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>&IdDokter=<? echo $IdDokter; ?>';" value="Anc">
  <input type="button"  name="dfdfd" value="Input Kb" onClick="location.href='dimas4thn.php?id=<? echo $id; ?>&IdBagian=<? echo $IdBagian; ?>&doa=<? echo $doa; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>&IdDokter=<? echo $IdDokter; ?>';"  class="style2" style="background-color:#CCFFCC">
  <input type="button" name="fgfgf" value="Input ICD" onClick="location.href='d_10z.php?id=<? echo $id; ?>';" class="style3"  style="background:#66CC00">
  <input name="fgf" type="button" class="style2" onClick="window.close()" value="Selesai">
  </div></td>
 </tr>
 </table>
 </form>
</div>
</body>
</html>
<?
}?>
