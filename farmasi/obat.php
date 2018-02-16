<?
session_start();
 include "../konek.php";
include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11 || $a[Level]==14 || $a[Level]==3){
$pj = strlen($Gol);
   $skskjs = mysql_query("SELECT KodeObat,id FROM dataobat WHERE KodeObat LIKE '$Gol%' ORDER BY Vas DESC");
$bb = mysql_fetch_array($skskjs);
$pch = explode("-",$bb[KodeObat]);
$cb=$pch[1]+1;
$Dol="$Gol-$cb";
?>
<html>
<head>
<?
include "car_1.php";
?>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif; font-size: 12px;color: #000000}
.style3 {font-weight: bold}
.style4 {
	color: #000000;
	font-weight: bold;
}
.style5 {font-size: 12px}

-->
</style>
</head>
<body>
<div align="center">
<form action="simpan_obat.php">
<input type="hidden" name="Vas" value="<? echo $cb; ?>">
<table width="484" border="0" cellpadding="2" cellspacing="2"  bgcolor="#FFFFFF" class="style1">
<tr>
<td height="40" colspan="3"><div align="center">
INPUT DATA OBAT BARU
<br>
<?
 ?></div></td>
</tr>
<tr>
<td colspan="3"><span class="style3">.</span></td>
</tr>
<tr>
<td>GOLONGAN</td><td>:</td><td><div align="left">
<select name="IdGol" class="style1" <? if($pj>0){  ?> disabled="disabled"<? }else{} ?>>
  <option value="-">--Golongan--</option>
  <?
  $jkpop= mysql_query("SELECT id,NamaGolongan FROM golobat ");
  while($dv = mysql_fetch_array($jkpop)){
  $Gol = strtoupper(substr($dv[NamaGolongan],0,3));
  ?>
  <option value="<? echo $dv[id]; ?>" onClick="location.href='obat.php?mas=hari&Gol=<? echo $Gol; ?>&IdGol=<? echo $dv[id]; ?>';"><? 
  $kdikdidkdi = mysql_query("SELECT NamaGolongan FROM golobat WHERE id='$dv[id]'");
  $mn = mysql_fetch_array($kdikdidkdi);
  echo strtoupper($mn[NamaGolongan]); 
  ?></option>
  <? } ?>
 
  </select></div></td>
</tr>
<tr>
<td width="149">KODE OBAT</td>
<td width="8"><span class="style4">:</span></td>
<td width="305"><div align="left"><input  <? if($pj>0){ }else{ ?> disabled="disabled"<? } ?>name="KodeggObat" class="style1" size="10" maxlength="10" value="<? echo "$Dol"; ?>">
<input type="hidden" name="IdGol" value="<? echo $IdGol; ?>">
<input type="hidden" name="KodeObat" value="<? echo $Dol; ?>">
</div></td>
</tr>
<tr>
<td>NAMA OBAT</td><td><span class="style4">:</span></td><td><div align="left">
<input type="text"  <? if($pj>0){ }else{ ?> disabled="disabled"<? } ?>  class="style123" id="suggest" name="NamaObat" />
</div></td>
</tr>
<!-- <tr>
<td>SATUAN</td><td><span class="style4">:</span></td><td><div align="left">
<input  <? /*if($pj>0){ }else{ ?> disabled="disabled"<? } */ ?> name="Satuan" type="text"  class="style1" size="20" maxlength="20">
</div></td>
</tr>
-->
  <tr>
<td>MERK</td><td><span class="style4">:</span></td><td><div align="left">
<select name="Merk" class="style1">
<option value="">--Merk--</option>
<?  
$jdjudjh = mysql_query("SELECT KodeMerk FROM merk ORDER BY NamaMerk");
while($xx = mysql_fetch_array($jdjudjh)){
?>
<option value="<? echo $xx[KodeMerk]; ?>"><?
$jkdjd_989 = mysql_query("SELECT NamaMerk FROM merk WHERE KodeMerk='$xx[KodeMerk]'");
$v = mysql_fetch_array($jkdjd_989);
echo strtoupper($v[NamaMerk]);
 ?></option>
<? } ?>
</select> || <input  <? if($pj>0){ }else{ ?> disabled="disabled"<? } ?> type="button" name="fgf"  value="+++" onClick="location.href='merk.php';" class="style1">
</div></td>
</tr>
  
<tr>
<td>SATUAN KECIL</td><td>:</td><td><div align="left">
<input type="text" name="Satuan1"  maxlength="100" size="30" class="style1">
</div></td>
</tr>
<tr>
<td>SATUAN BESAR</td><td>:</td><td><div align="left">
<input type="text" name="Satuan2"  maxlength="100" size="30" class="style1">
</div></td>
</tr>
<tr>
<td>ISI</td><td>:</td><td><div align="left">
<input type="text" name="Isi"  maxlength="100" size="30" class="style1">
</div></td>
</tr>
<tr valign="top">
<td>KOMPOSISI</td><td>:</td><td><div align="left">
<textarea rows="3" cols="30" name="Komposisi" class="style1"></textarea>
</div></td>
</tr>
<tr>
  <td>MIN</td>
  <td><span class="style4">:</span></td>
  <td><div align="left">
  <input  <? if($pj>0){ }else{ ?> disabled="disabled"<? } ?> name="Min" type="text" class="style1" size="5" maxlength="5">
  </div></td>
</tr>
<tr>
  <td>MAX</td>
  <td><span class="style4">:</span></td>
  <td><div align="left">
  <input  <? if($pj>0){ }else{ ?> disabled="disabled"<? } ?> name="Max" type="text" class="style1" size="5"  maxlength="5">
  </div></td>
</tr>
<tr>
  <td>EXP</td>
  <td><span class="style4">:</span></td>
  <td><div align="left">
    <span class="style15 style2 style8  style3">
    <select name="tgl1" class="style1" id="tgl1">
      <?
		 
$ttg= 1;
while($ttg<32){
?>
      <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
      <? $ttg++; } ?>
    </select>
/
<select name="bln1" class="style1" id="bln1">
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
<select name="thn1" class="style1" id="thn1">
<?
$ujus = date("Y");
while($ujus<2020){
?>  
<option value="<? echo $ujus; ?>"><? echo $ujus; ?></option>
<? $ujus++; } ?>
 </select>
    </span>  </div></td>
</tr>
<tr>
  <td colspan="3">&nbsp;</td>
  </tr>
<tr>
  <td colspan="3" bgcolor="#999999"><div align="center">
  <input  <? if($pj>0){ }else{ ?> disabled="disabled"<? } ?> name="ffg" type="submit" class="style1" value="Simpan">
  <input name="fgfg" type="button" class="style1" onClick="location.href='data_obat.php?NamaObat=a';" value="Kembali">
  </div></td>
  </tr>
</table>
</form>
</div>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
} ?>
