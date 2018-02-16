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
///////////////////////////////////
$TglJam=date("d.m.Y-H:i:s");
 
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
-->
</style>
</head>
<body>
<div align="left">
<form action="s_ddd.php">
<table border="0" cellpadding="2" cellspacing="2" class="style1">
<?
if($ii[id]){
?><tr bgcolor="#FFCCCC"><? 
}else{
?> 
<tr>
<? } ?>
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
<tr>
  <td colspan="3" bgcolor="#ECE9D8">JENIS VAKSIN........TERAKHIR UPDATE : <? echo $ii[Nama]; echo "  $ii[TglJam]";?> </td>
</tr>
<tr valign="top">
  <td colspan="2"><div align="left">
  <table width="289" border="0" cellpadding="2" cellspacing="2" class="style2">
  <TR>
  <td width="16">1</td><td width="90">BCG</td>
  <td width="9">:</td>
  <td width="146"> 
  <input type="radio"  <? if($ii[Bcg]==1){ ?> checked="checked"<? } ?> name="Bcg" value="1"> Ya 
  <input type="radio" name="Bcg" value="0"  <? if($ii[Bcg]==0){ ?> checked="checked"<? } ?>> Tidak 
  <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="doa" value="tobat">
  <input type="hidden" name="IdDokter" value="<? echo $IdDokter; ?>">
  <input type="hidden" name="tgl1" value="<? echo $tgl1; ?>">
  <input type="hidden" name="tgl2" value="<? echo $tgl2; ?>">
  <input type="hidden" name="bln2" value="<? echo $bln2; ?>">
  <input type="hidden" name="thn1" value="<? echo $thn1; ?>">
  <input type="hidden" name="IdBagian" value="<? echo $IdBagian; ?>">  </td>
  </TR>
  <TR>
 <td>2</td>   <td>POLIO 1 </td>
    <td>:</td>
    <td>  <input type="radio"  <? if($ii[Polio1]==1){ ?> checked="checked"<? } ?> name="Polio1" value="1"> Ya 
  <input type="radio" name="Polio1" value="0"  <? if($ii[Polio1]==0){ ?> checked="checked"<? } ?>>   
Tidak</td>
  </TR>
  <TR>
    <td>3</td><td>POLIO 2 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Polio2]==1){ ?> checked="checked"<? } ?> name="Polio2" value="1"> Ya 
  <input type="radio" name="Polio2" value="0"  <? if($ii[Polio2]==0){ ?> checked="checked"<? } ?>>Tidak </td>
  </TR>
  <TR>
    <td>4</td><td>POLIO 3 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Polio3]==1){ ?> checked="checked"<? } ?> name="Polio3" value="1"> Ya 
  <input type="radio" name="Polio3" value="0"  <? if($ii[Polio3]==0){ ?> checked="checked"<? } ?>>Tidak </td>
  </TR>
  <TR>
    <td>5</td><td>POLIO 4 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Polio4]==1){ ?> checked="checked"<? } ?> name="Polio4" value="1"> Ya 
  <input type="radio" name="Polio4" value="0"  <? if($ii[Polio4]==0){ ?> checked="checked"<? } ?>>Tidak </td>
  </TR>
  <TR>
    <td>6</td><td>DPT 1 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Dpt1]==1){ ?> checked="checked"<? } ?> name="Dpt1" value="1"> Ya 
  <input type="radio" name="Dpt1" value="0"  <? if($ii[Dpt1]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
  <TR>
    <td>7</td><td>DPT 2 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Dpt2]==1){ ?> checked="checked"<? } ?> name="Dpt2" value="1"> Ya 
  <input type="radio" name="Dpt2" value="0"  <? if($ii[Dpt2]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
  <TR>
    <td>8</td>
	<td>DPT 3 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Dpt3]==1){ ?> checked="checked"<? } ?> name="Dpt3" value="1"> Ya 
  <input type="radio" name="Dpt3" value="0"  <? if($ii[Dpt3]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
  <TR>
    <td>9</td>
    <td>PENTABIO</td>
    <td>:</td>
  <td><div align="left">
      <input type="radio"  <? if($ii[Pentabio]==1){ ?> checked="checked"<? } ?> name="Pentabio" value="1"> 
      Ya 
      <input type="radio" name="Pentabio" value="0"  <? if($ii[Pentabio]==0){ ?> checked="checked"<? } ?>>
      Tidak
      || 
      
    </div></td> 
  </TR>
  </table>
  </div></td>
  <td width="378" valign="top"><div align="left">
  <table width="400" border="0" cellpadding="2" cellspacing="2" class="style2">
    <TR>
    <td>10</td>
    <td>HEB-B (Usia) </td>
    <td>:</td>
   <td width="213"><input type="radio"  <? if($ii[Heb0]==1){ ?> checked="checked"<? } ?> name="Heb0" value="1"> Ya 
  <input type="radio" name="Heb0" value="0"  <? if($ii[Heb0]==0){ ?> checked="checked"<? } ?>>Tidak</td> 
  </TR>
  <TR>
  <td width="14">11</td>
  <td width="114">HEB-B 1 </td>
  <td width="3">:</td>
  <td width="213"><input type="radio"  <? if($ii[Heb1]==1){ ?> checked="checked"<? } ?> name="Heb1" value="1"> Ya 
  <input type="radio" name="Heb1" value="0"  <? if($ii[Heb1]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
  <TR>
 <td>12</td>   
 <td>HEB B 2 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Heb2]==1){ ?> checked="checked"<? } ?> name="Heb2" value="1"> Ya 
  <input type="radio" name="Heb2" value="0"  <? if($ii[Heb2]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
  <TR>
    <td>13</td>
    <td>HEB-B 3 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Heb3]==1){ ?> checked="checked"<? } ?> name="Heb3" value="1"> Ya 
  <input type="radio" name="Heb3" value="0"  <? if($ii[Heb3]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
  <TR>
    <td>14</td>
    <td>DPT-HB KOMBO </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[DptKombo]==1){ ?> checked="checked"<? } ?> name="DptKombo" value="1"> Ya 
  <input type="radio" name="DptKombo" value="0"  <? if($ii[DptKombo]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
   <TR>
    <td>15</td>
    <td>DPT-HB KOMBO -2 </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[DptKombo2]==1){ ?> checked="checked"<? } ?> name="DptKombo2" value="1"> Ya 
  <input type="radio" name="DptKombo2" value="0"  <? if($ii[DptKombo2]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
   <TR>
    <td>16</td>
    <td>DPT-HB KOMBO -3</td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[DptKombo3]==1){ ?> checked="checked"<? } ?> name="DptKombo3" value="1"> Ya 
  <input type="radio" name="DptKombo3" value="0"  <? if($ii[DptKombo3]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
  <TR>
    <td>17</td>
    <td>CAMPAK </td>
    <td>:</td>
    <td><input type="radio"  <? if($ii[Campak]==1){ ?> checked="checked"<? } ?> name="Campak" value="1"> Ya 
  <input type="radio" name="Campak" value="0"  <? if($ii[Campak]==0){ ?> checked="checked"<? } ?>>Tidak</td>
  </TR>
  <TR valign="top">
  <td>18</td>
  <td>KETERANGAN</td><td>:</td><td colspan="2"><div align="left">
  <textarea rows="3"  cols="30" name="Keterangan" class="style1"><? echo $ii[Keterangan]; ?></textarea>
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
  <input type="submit" value="Update" name="ghghg" class="style1" style="background-color:#FFFF00"> 
  <input name="ffgf" type="button" class="style2"  onDblClick="location.href='x_s10as.php?tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&bln1=<? echo $bln1; ?>&bln2=<? echo $bln2; ?>&thn1=<? echo $thn1; ?>&id=<? echo $id; ?>';" value="Hapus">
     
   
  <input name="fgf" type="button" class="style2" onClick="window.close()" value="Selesai">
  || Untuk Menghapus data ini lakukan <em><strong>DoubleKlik</strong></em> Tombol &quot;Hapus&quot; </div></td>
 </tr>
 </table>
 </form>
</div>
</body>
</html>
<?
}?>
