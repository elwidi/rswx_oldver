<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$iin = $_GET["iin"];
$dimas = $_GET["dimas"];
$hasil = $_GET["hasil"];
$tres = $_GET["tres"];
  $id = $_GET [ "id" ];
  $NamaBarang = $_GET["NamaBarang"];
 $PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
  
if(!$x[id]){
header("Location:./diono.php");
}
$Daat = mysql_query("SELECT id,NamaDokter FROM dokter WHERE id='$IdDokter'");
$sx= mysql_fetch_array($Daat);
  ?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#333333';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script><style type="text/css">
<!--
.style3 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style6 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #003399; }
.style66 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #ffffff; }
.style7 {color: #003399}
.style10 {
	color: #333333;
	font-style: italic;
	font-weight: bold;
}
.style15 {color: #333333}
.style16 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color: #FFFF66;
}
.style17 {
	color: #990000;
	font-weight: bold;
	font-style: italic;
}
.style19 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #333333; font-style: italic; font-weight: bold; }
.style21 {color: #000000; font-weight: bold; }
.style22 {
	color: #000000;
	font-weight: bold;
}
.style23 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #003399; font-weight: bold; }
.style25 {color: #FFFF99}
.style26 {color: #000099}
.style27 {color: #000000}
.style28 {color: #FFFFFF}
.style29 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; color: #FFFFFF; }
.style1 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
    </style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body alink="#000000" vlink="#000000" link="#000000">
   <?
if($hasil>0){
?>
  <form action="d909_fg.php">
  <? 
}elseif($kandang=='sapi'){
}elseif($iin=='bojo'){
?>
  <form  target="_self">
  <? 
}else{
?>
  <form action="ela_anak_sayang.php"> 
  <? } ?>
   <table > 
  <tr  bgcolor="#FFCCCC">
<td colspan="3" bgcolor="#FFFFFF">
<img src="../gambar/radpng" width="985" height="147"></td>
</tr>
 <tr>
<td width="166">
              <div align="left">
      <span class="style6">REG ID</span>              </div>        </td><td width="7">
               : 
            </td>
      <td width="807"><div align="left" class="style3 style7"><? echo $x[MstKey]; ?>
                   <input type="hidden" name="IdPasien" value="<? echo $id; ?>">
      </div></td>
</tr>
<tr>
<td>
              <div align="left">
                <span class="style6">TGL MASUK</span>              </div>        </td><td>
                 <div align="center" class="style6"><strong>:</strong></div>
             </td><td>
                 <div align="left" class="style6"><? echo "$x[TglMasuk]-$x[BlnMasuk]-$x[ThnMasuk]"; ?> ||  <? 
				echo $x[JamMasuk]; 
				?></div>
             </td>
</tr>
<tr>
<td>
              <div align="left">
                <span class="style6">KELAS</span> </div> </td><td>
                 <div align="center" class="style6"><strong>:</strong></div>
             </td><td>
                 <div align="left" class="style6"><? 
				 $splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan); 
echo "$j[NamaKelas]"; ?></div>
             </td>
</tr>
<tr>
<td>
              <div align="left">
                <span class="style6">RUANGAN</span>              </div>        </td><td>
                 <div align="center" class="style6"><strong>:</strong></div>
             </td><td>
                 <div align="left" class="style6"><?   echo $j[NamaRuangan]; ?></div>
             </td>
</tr>
 <tr>
<td>
              <div align="left">
                <span class="style6">NAMA PASIEN</span>              </div>        </td><td>
                 <div align="center" class="style6"><strong>:</strong></div>
             </td><TD>
                 <div align="left" class="style6"><? echo strtoupper($x[NamaPasien]); ?></div>
             </TD>
</tr>
<?
$kandang = $_GET["kandang"];
if($kandang=='sapi'){

}elseif($ipung==1){
?><!-- 
<tr valign="top">
<td bgcolor="#990000" class="style16">DOKTER GANTI</td>
<td bgcolor="#990000" class="style16">:</td>
<td bgcolor="#990000" class="style16"><div align="left">
  <span class="style21">
  <select name="Kodok" class="style3">
    <option value="">--PILIH DOKTER--</option>
    <? /*
$dhjdhfjdjsdfjn = mysql_query("SELECT id FROM dokter ORDER BY NamaDokter");
while($ff_i = mysql_fetch_array($dhjdhfjdjsdfjn)){
?>
    <option value="<? echo $ff_i[id]; ?>" onClick="location.href='frs.php?KodeDokter=<? echo $ff_i[id]; ?>&id=<? echo $id; ?>&makan=enak';">
      <?
$jhjdhf_kdfjdkfj = mysql_query("SELECT NamaDokter FROM dokter WHERE id='$ff_i[id]'");
$rt = mysql_fetch_array($jhjdhf_kdfjdkfj);
echo $rt[NamaDokter]; 
 ?>
      </option>
    <? }  */ ?>
  </select>
  </span></div></td>
</tr>
-->
<?
}else{
?>
<tr>
<td bgcolor="#333333">
              <div align="left" class="style21 style28">
      <span class="style3">DOKTER</span>              </div>        </td>
<td bgcolor="#333333">
                 <div align="center" class="style29">:</div>      </td>
<td bgcolor="#333333">
                 <div align="left" class="style29"><?  echo $x[KetDokter]; ?></div>      </td>
</tr>
<? } ?>
<?
if($iin=='bojo' && $dimas==3){
$kesas_sdsds  = mysql_query("SELECT COUNT(id) AS kk FROM InapLogistik WHERE IdPasien='$id'");
$uwa = mysql_fetch_array($kesas_sdsds);
if($uwa[kk]>0){
?>
 <tr bgcolor="#99CC66">
 <td colspan="3" valign="top">
 <div align="center">
   <?
   if($tres==3){
   ?>
   <input name="hsus" type="button" class="style3" 
   onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>&iin=bojo&dimas=3';"     onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="<? echo "SEMBUNYIKAN  $uwa[kk] ITEM BARANG LOGISTIK";  ?>"><? 
   }else{
   ?><input name="hsus" type="button" class="style3" 
   onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>&iin=bojo&dimas=3&tres=3';"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="<? echo "TAMPILKAN  $uwa[kk] ITEM BARANG LOGISTIK";  ?>">
   <? } ?>
 </div></td>
</tr>
<? 
}
 if($tres==3){
?>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style6">
<tr>
<td width="18" bgcolor="#FFCC99">NO</td>
<td width="277" bgcolor="#FFCC99">NAMA BARANG</td>
<td width="44" bgcolor="#FFCC99"><div align="center">QTY</div></td>
<td width="70" bgcolor="#FFCC99"><div align="right">HARGA</div></td>
<td width="59" bgcolor="#FFCC99"><div align="right">JML</div></td>
<td width="118" bgcolor="#FFCC99">OPR</td>
<td width="73" bgcolor="#FFCC99">TGL JAM</td>
</tr>
<?
$jo=1;
$kses = mysql_query("SELECT * FROM InapLogistik WHERE IdPasien='$id'");
while($uds = mysql_fetch_array($kses)){
?>
<tr>
<td bgcolor="#000000"><div align="center"><? echo $jo; ?></div></td>
<td bgcolor="#D4D0C8"><div align="left"><? echo strtoupper($uds[NamaBarang]); ?></div></td>
<td bgcolor="#D4D0C8"><div align="center"><? echo number_format($uds[Qty],2); ?></div></td>
<td bgcolor="#D4D0C8"><div align="right"><? echo number_format($uds[Harga],2);
 ?></div></td>
<td bgcolor="#D4D0C8"><div align="right"><? echo number_format($uds[JmlHarga],2); 
$tiku = $tiku + $uds[JmlHarga];
?></div></td>
<td bgcolor="#D4D0C8"><div  align="left"><? echo strtoupper($uds[Opr]); ?></div></td>
<td bgcolor="#D4D0C8"><div align="left"><? echo $uds[Jam]; ?></div></td>
</tr>

<? $jo++; }
 ?>
<tr>
  <td colspan="4" bgcolor="#FFCC99"><div align="center">TOTAL</div></td>
  <td bgcolor="#FFCC99"><div align="right"><? echo number_format($tiku,2); ?></div></td>
  <td colspan="2" bgcolor="#000000"><div align="right"></div></td>
  </tr></table>
 </div></td>
</tr>
<? 
}?>

<? 
}
?>
<tr>
<td> <div align="left" class="style6">RUJUKAN
 </div></td><td><div align="center" class="style6"><strong>:</strong></div></td><td><div align="left" class="style6"><? echo $x[NamaRujukan]; ?></div></td>
</tr>
<tr bgcolor="#000000">
<td bgcolor="#FFFFFF"><span class="style19">ASSURANSI</span></td>
<td bgcolor="#FFFFFF"><div align="center" class="style6 style10">:</div></td>
<td bgcolor="#FFFFFF"><div align="left" class="style19">
<? 
if($x[NamaPer]=="JAMSOSTEK ASURANSI" && $x[TglKeluar]==0){
?>
<a href="sambel_pete_wek.php?id=<? echo $id; ?>" style="text-decoration:none "> 
<? echo strtoupper($x[NamaPer]); ?></a><?
}else{
echo strtoupper($x[NamaPer]);
}  ?></div></td>
</tr>
<?
$dkdkdk_009 = mysql_query("SELECT SUM(Jam) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
$u_r = mysql_fetch_array($dkdkdk_009);
//
$dkdkdk_0092 = mysql_query("SELECT SUM(Db) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
$u_r2 = mysql_fetch_array($dkdkdk_0092);
//
$dkdkdk_0093 = mysql_query("SELECT SUM(Kk) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
$u_r3 = mysql_fetch_array($dkdkdk_0093);
//
$dkdkdk_0094 = mysql_query("SELECT SUM(Tunai) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
$u_r4 = mysql_fetch_array($dkdkdk_0094);
//
$gede = $u_r[jj]+$u_r2[jj]+$u_r3[jj]+$u_r4[jj];

if($gede>0){
?>
<tr bgcolor="#990000"  class="style66">
<td> <strong>TOTAL DP </strong></td>
<td> <strong>:</strong> </td>
<td>  <strong>

<? echo number_format($gede); ?> RECORD || 
 
</strong> </td>
</tr>
<? 
}
?>
<?
if($iin=='bojo' && $tres!=3){
?>
<tr class="style6">
<td bgcolor="#99CCCC"><span class="style22">MASUKAN NAMA BARANG</span></td>
<td bgcolor="#99CCCC">:</td>
<td bgcolor="#99CCCC"><div align="left">
<input type="text" name="NamaBarang" maxlength="20" size="20">
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="iin" value="bojo">
<input type="hidden" name="dimas" value="3">
</div></td>
</tr>
<?
if($tres==3){ 
}elseif($hasil>0){
$kdjkdjfkd = mysql_query("SELECT NamaBarang,Harga FROM barang_logistik WHERE id='$hasil'");
$ere = mysql_fetch_array($kdjkdjfkd);
?>
<tr class="style22">
<td bgcolor="#FFCC00" class="style6"><strong>BARANG YD DIPILIH</strong></td>
<td bgcolor="#FFCC00" class="style23">:</td>
<td bgcolor="#FFCC00" class="style6"><div align="left"><strong>
  <?
echo strtoupper($ere[NamaBarang]);
?>
</strong></div></td>
</tr>
<tr>
<td bgcolor="#FFCC00" class="style23">QTY</td>
<td bgcolor="#FFCC00" class="style23">:</td>
<td bgcolor="#FFCC00" class="style23"><div align="left"> 
  <input type="text" name="Qty" maxlength="10" size="10" value="1">
  <input type="hidden" name="hasil" value="<? echo $hasil; ?>"></div></td></tr>
<tr>
<td bgcolor="#FFCC00" class="style23">HARGA</td>
<td bgcolor="#FFCC00" class="style23">:</td>
<td bgcolor="#FFCC00" class="style6"><div align="left"><strong>
  <? 
if($ere[Harga]==0){
echo "NILAI ? KONFORM KE IT / LOGISTIK"; 
}else{
echo number_format($ere[Harga]); 
} ?>
</strong></div></td>
</tr>
 <? 
}
?>
 <? 
}else{
?>
<tr bgcolor="#ECE9D8">
<td colspan="3"><div align="left" class="style6 style15">
  <div align="center"><strong>STRUK U/ DOKTER TUJUAN </strong></div>
</div></td>
</tr>
<?
}
 
 //$Nii =mysql_query("SELECT SUM(Nilai) AS jj FROM penerimaandp WHERE MstKey='$x[MstKey]'");
 //$pop = mysql_fetch_array($Nii);
if($pop[jj]==$TBiayaX && $pop[jj]!=''){ }else{
?>
<?
 if($iin=='bojo' || $kandang=='sapi' || $a[Level]==1){

}else{
?>
<tr>
<td><span class="style6">PILIH NOMER STRUK </span></td>
<td><div align="center" class="style6"><strong>:</strong></div></td><td><div align="left" class="style6">
#MM-
    <input type="text" name="NoStruk" maxlength="20" size="20">
 
<span class="style17">.</span></div></td>
</tr>
<? } ?>
<? } 
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){}else{?>
 <tr bgcolor="#FF6699">
 <td colspan="3" ><div align="center">
  <?
  if($tres==3){
  
  }elseif($iin=='bojo'){
  ?><input name="dfdf" type="submit" class="style6"     value="Simpan Data"  > 
  <? } 
  if($tres==3 || $kandang=='sapi'){
  }elseif($iin=='bojo'){
  ?><input name="fdgfg" type="button" class="style6"    onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>';"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Selesai Pemakaian Barang Logistik"  >
  <? 
  }else{
  ?> <input name="fdgfg" type="button" class="style6"    onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>&iin=bojo';"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Input Pemakaian Barang Logistik" <? if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==1){?> disabled="disabled"<? } ?>>
  
  <? } ?>
<?
  if($kandang=='sapi' || $a[Level]==16){ }else{
  ?><input name="fgfg" type="button" class="style6"    onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>&kandang=sapi';"   onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="Input Rencana Pulang"<? if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==1){?> disabled="disabled"<? } ?>>
  <? } ?>
 </div></td>
</tr>
<? } ?>
<?
//$kikikiki_0p2= mysql_query("SELECT SUM(Total) AS hh FROM ObatLuarInap WHERE IdPasien='$id' AND Stat=1");
//$hx2= mysql_fetch_array($kikikiki_0p2);
if($hx2[hh] && $a[Level]!=16){
?>
<tr class="style6">
<td bgcolor="#D4D0C8"><span class="style21 style26">TRANSAKSI OBAT LUAR OK</span></td>
<td bgcolor="#D4D0C8"><span class="style21 style25">:</span></td>
<td bgcolor="#D4D0C8"><div align="left"><span class="style3">Rp.
  <? 
echo number_format($hx2[hh]);
?>
  |</span>| <a href="#"  onClick="wCompare = window.open('jiiC_Lu_009.php?id=<? echo $id; ?>', 
  'wCompare', 'width=680,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none">
	HISTORI / CETAK ULANG KWITANSI OBAT LUAR</a></div></td>
</tr>
<?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==1){
 $kikikiki_0p3= mysql_query("SELECT COUNT(id) AS hh FROM ObatLuarInap WHERE IdPasien='$id' and Stat=1");
	 $hx3= mysql_fetch_array($kikikiki_0p3);
?>
<tr>
<td colspan="3" bgcolor="#000000"><div align="center">
  <input name="fggf2" type="button" class="style1"  onClick="wCompare = window.open('../apotik/ftft_898.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"   value="Lihat Detail Data Pasokan Obat Sudah Dibayar <? echo $hx3[hh]; ?> ITEM"  style="background:#00FF33"  >
</div></td>
</tr>
<? 
}
?>
<? 
}?>
<?
//$kikikiki_0p= mysql_query("SELECT SUM(Total) AS hh FROM ObatLuarInap WHERE IdPasien='$id' AND Stat=0");
//$hx= mysql_fetch_array($kikikiki_0p);
//if($hx[hh]){
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]!=16){?>
<tr valign="top">
<td colspan="3">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style6"><?
	 $kikikiki_0p2= mysql_query("SELECT id,Tgl,Bln,Thn FROM ObatLuarInap WHERE IdPasien='$id' and Stat=0 ORDER BY Thn,Bln,Tgl");
	 while($hx2= mysql_fetch_array($kikikiki_0p2)){
	 if($Tanggale!="$hx2[Tgl]/$hx2[Bln]/$hx2[Thn]"){?>
<tr>
<td width="202">TRANSAKSI OBAT LUAR</td>
<td width="8">:</td>
<td width="91"><div align="left">
<?
 $kikikiki_0p= mysql_query("SELECT SUM(Total) AS hh FROM ObatLuarInap WHERE IdPasien='$id'  AND Tgl='$hx2[Tgl]' AND Bln='$hx2[Bln]' AND Thn='$hx2[Thn]' AND Stat=0");
$hx= mysql_fetch_array($kikikiki_0p);
?>Rp.<? 
echo number_format($hx[hh]);
?>
</div></td><td><div align="left"><? echo "$hx2[Tgl]-$hx2[Bln]-$hx2[Thn]"; ?></div></td><td width="497"><div align="left">
 <a href="#"  onClick="wCompare = window.open('jiiu_009.php?id=<? echo $id; ?>&Tgl=<? echo $hx2[Tgl]; ?>&Bln=<? echo $hx2[Bln];
  ?>&Thn=<? echo $hx2[Thn]; ?>', 
  'wCompare', 'width=580,height=540,left=500,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" style="text-decoration:none">BAYAR KLIK DISINI</a>
</div></td>
</tr>
<? } $Tanggale ="$hx2[Tgl]/$hx2[Bln]/$hx2[Thn]";
	} ?></table>
</div></td>
</tr>
<? } //end of level!=16 ?>
</table>
 <? 
//}
?>
  </div></td>
</tr>
 <?
if($kandang=='sapi' && $a[Level]!=16){
?>
<tr>
<td colspan="3"> 
  <div align="left">
  <!-- <form action="sikan.php">-->
  <table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFF99" class="style6">
    <tr valign="top">
      <td width="286">INPUT RENCANA PULANG</td>
    <td width="11">:</td>
    <td width="571"><div align="left"><?
$Jjjh  = mysql_query("SELECT * FROM rencana_pulang WHERE IdPasien='$id'");
$ki = mysql_fetch_array($Jjjh);
 
$pergi = $_GET["pergi"];
if($pergi=='joga'){
  $rtty = mysql_query("DELETE FROM rencana_pulang WHERE IdPasien='$id'");
}
?>
      <textarea rows="2" cols="30" name="RencanPulang" ><? echo $ki[Keterangan]; ?></textarea>
      <input type="hidden" name="id" value="<? echo $id; ?>">
      </div></td>
    </tr>
    <tr>
      <td>OPR</td><td>:</td><td><div  align="left"><? echo strtoupper($ki[Opr]); ?></div></td>
    </tr>
    <tr>
      <td>TGL JAM</td><td>:</td><td><div align="left"><? echo $ki[TglJam]; ?></div></td>
    </tr>
    <tr>
      
      <td colspan="3" bgcolor="#333333"><div align="left"><input type="submit" value="Simpan" name="ffgf"      >
        <input type="button"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"name="ffg" value="Batal/Hapus" onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>&kandang=sapi&pergi=joga';">
        <input type="button"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"name="dffdd" value="Reset" onClick="location.href='sabar_itu_baik.php?id=<? echo $id; ?>';">
        </div></td>
    </tr>
  </table>
  </div></td>
</tr>
<? 
}elseif($iin=='bojo' || $a[Level]==1){

}else{
?>
<tr bgcolor="#CC3300">
  <td colspan="3" bgcolor="#CCCCCC">
    <div align="left">
      <?
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){ ?>
      <input <?
		   if($belajar_sa_bar[tuju]==1){}else{ ?>disabled="disabled"<? } ?> name="sdfjhdjfd" type="button" class="style3" onClick="location.href='../Farmasi/nando.php?id=<? echo $id; ?>';"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="INPUT ALKES OLEH :  <? echo strtoupper($a[Nama]); ?>">
        <input type="button" name="fggf" value="BUAT NOMER UNTUK TXN RAD BARU" onClick="location.href='nola_anak_baik.php?id=<? echo $id; 
  ?>&IdDokter=<? echo $x[Dokter]; ?>&IdDept=<? echo $x[KodeBagian]; ?>';" style="background:#FF66CC" class="style3">
      <? }else{
  ?> 
         <input name="fggfg" type="button" class="style3" onClick="location.href='besan_muda_pacaran_lagi.php?id=<? echo $id; ?>';"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="BUAT STRUK BARU">
         <? } ?>
     </div></td></tr>
<tr bgcolor="#9DFDBA">
  <td colspan="3" bgcolor="#333333">
    
     <div align="left">
       <?
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){ }else{
 ?>
       <? } ?>
       
       <input name="dffff" type="button" class="style3"   onClick="wCompare = window.open('kripik_goreng.php?id=<? echo $id; ?>', 
  'wCompare', 'width=580,height=500,left=270,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"   value="CETAK STRUK">  
       
     <?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){}else{
?>
       
     <? } ?>
     <input name="dffgg" type="button" class="style3" onClick="location.href='../Daftar/fito_sayangku.php';"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" value="KEMBALI">
  </div></td></tr>
<? } if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==1){}else{?>
<tr  bgcolor="#FFCCCC">
<td colspan="3"><div align="center">
<?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
}else{
?>
      
	 <? } ?>
      
<!--  <input name="fgfggg" type="button"      onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"class="style17" onClick="location.href='mas_bagong_gendut.php?id=<? //echo $id; ?>';" value=" New Form Cetak Kwt "> -->
<?
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){}else{
?>
 
<? } ?>
</div></td>
</tr>
<? } ?>
<?
if($iin=='bojo'|| $a[Level]==1){

}else{
?><tr>
<td colspan="3"> <div align="left">
<iframe src="itu_aya_ayam.php?MstKey=<? echo $x[MstKey]; ?>" width="889" height="200" frameborder="0"></iframe>
</div></td>
</tr>
<? } ?>
<?
if($tres==3){

}elseif($dimas=='3'){
?>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style6">
<tr>
<td width="18" bgcolor="#D4D0C8">NO</td>
<td width="140" bgcolor="#D4D0C8">NAMA BARANG</td>
<td width="68" bgcolor="#D4D0C8"><div align="right">HARGA</div></td>
<td width="73" bgcolor="#D4D0C8">OPR</td>
<td width="106" bgcolor="#D4D0C8">TGLJAM</td>
</tr>
<?
$no=1;
$kesas909= mysql_query("SELECT * FROM barang_logistik WHERE NamaBarang like '$NamaBarang%' AND NamaBarang NOT LIKE '%kosong%'");
while($kds = mysql_fetch_array($kesas909)){
?>
<tr onClick="location.href='sabar_itu_baik.php?hasil=<?  echo $kds[id]; ?>&IdPasien=<? echo $IdPasien; ?>&NamaBarang=<? echo $NamaBarang; ?>&id=<? echo $id; ?>&iin=bojo&dimas=3';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';">
<td><div align="center"><? echo $no; ?></div></td>
<td><div align="left"><? echo strtoupper($kds[NamaBarang]); ?></div></td>
<td><div  align="right"><? echo number_format($kds[Harga]); ?></div></td>
<td><div align="left"><? echo strtoupper($kds[Opr]); ?></div></td>
<td><div align="left"><? echo $kds[TglJam]; ?></div></td>
</tr>
<? $no++; } ?>
</table>
</div></td>
</tr>
<? 
}
?>
</table>    
</form>
</body>
</html>
 