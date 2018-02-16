<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$kama = $_GET["kama"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
if(!$x[id]){
header("Location:../fito_sayangku.php");
}else{
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style2 {font-size: 12px}
.style3 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style4 {font-weight: bold}
.style5 {
	color: #FFFF00;
	font-weight: bold;
}
-->
</style>
</head>
<div align="center">
<form action="moudy_personalia.php"> 
  <div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#59BA54" class="style24">
<td height="65" colspan="3" bgcolor="#59BA54">
  
    <div align="center">
      <img src="../../gambar/depan.png">
    </div></td>
</tr>
  <tr>
  <td colspan="2" valign="top">
  <div align="left">
  <table width="477" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
      <tr bgcolor="#BCCCDF">
        <td height="21" colspan="3" bgcolor="#59BA54"><div align="center" class="style1">
          <div align="left" class="style5">HALAMAN transfer</div>
        </div></td>
        </tr>
      <tr>
        <td width="210"><span class="style6 style1 style2">MASTER KEY </span></td>
        <td width="17"><div align="center" class="style1 style2 style4">
          <div align="center">:</div>
        </div></td><td width="321"><div align="left" class="style3 style7 style1 style2"><? echo $x[MstKey]; ?>
          <input type="hidden" name="id" value="<? echo $id; ?>"></div></td>
        </tr>
      <tr>
        <td><span class="style6 style1 style2">TGL MASUK</span></td><td><div align="center" class="style6 style1 style2 style4">
          <div align="center">:</div>
        </div></td><td><div align="left" class="style6 style1 style2"><? echo "$x[TglMasuk]-$x[BlnMasuk]-$x[ThnMasuk]"; ?></div></td>
        <tr>
          <td><span class="style6 style1 style2">RUANGAN</span></td><td><div align="center" class="style6 style1 style2 style4">
            <div align="center">:</div>
        </div></td><td><div align="left" class="style6 style1 style2"><?
		
		$splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);
echo strtoupper($j[NamaRuangan]); echo " ($j[id])";
?><input type="hidden" name="miduk" value="<? echo $splo[0]; ?>">
          </div></td>
        </tr>
      <tr>
        <td><span class="style6 style1 style2">RP /KAMAR</span></td><td><div align="center" class="style6 style1 style2 style4">
          <div align="center">:</div>
        </div></td><td><div align="left" class="style6 style1 style2">Rp.<? echo number_format($x[RpPerKamar]); ?></div></td>
        </tr>
      <tr>
        <td><span class="style6 style1 style2">NAMA BAGIAN</span></td><td><div align="center" class="style6 style1 style2 style4">
          <div align="center">:</div>
        </div></td><TD><div align="left" class="style6 style1 style2"><? echo strtoupper($x[NamaPasien]); ?></div></TD>
        </tr>
      <tr>
        <td><span class="style6 style1 style2">DOKTER</span></td><td><div align="center" class="style6 style1 style2 style4">
          <div align="center">:</div>
        </div></td><td><div align="left" class="style6 style1 style2"><? echo $x[KetDokter]; ?></div></td>
        </tr>
      <tr>
        <td><span class="style6 style1 style2">RUJUKAN</span></td><td><div align="center" class="style6 style1 style2 style4">
          <div align="center">:</div>
        </div></td><td><div align="left" class="style6 style1 style2"><? echo $x[NamaRujukan]; ?></div></td>
        </tr>
      <tr bgcolor="#FFCCFF">
        <td><span class="style14 style1 style2">ASSURANSI</span></td><td><div align="center" class="style6 style10 style1 style2 style4">
          <div align="center">:</div>
        </div></td><td><div align="left" class="style14 style1 style2"><? echo $x[NamaPer];  ?><span class="style6 style1 style2">
        <input  type="hidden" name="seska"  value="<? echo $poc[0]; ?>">
        </span></div></td>
       <? 
		$poc = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$poc[0]'");
$j = mysql_fetch_array($Ruan);
   ?>
      
      <tr class="style3">
        <td>KELAS</td><td>:</td><td><div align="left">
		 
          <select name="h" class="style3">
            <option value="0">--Pilih Kelas--</option>
            <?
$jkj_sdkls = mysql_query("SELECT id,KodeKelas FROM kelas ORDER BY NamaKelas");
while($hd = mysql_fetch_array($jkj_sdkls)){
?>
            <option value="<? ?>" onClick="location.href='n.php?id=<? echo $id; ?>&kama=<? echo $hd[id]; ?>';"><? 
$kdik9d090df = mysql_query("SELECT NamaKelas FROM kelas WHERE NamaKelas !='' AND id='$hd[id]'");
$gb = mysql_fetch_array($kdik9d090df);
echo strtoupper($gb[NamaKelas]);
 ?></option>
            <? } ?>
            </select>
          </div></td>
	    </tr>
		<?
		$kdkjkdjfd  = mysql_query("SELECT * FROM kelas WHERE id='$kama'");
		$yop = mysql_fetch_array($kdkjkdjfd);
		if($yop[id]){
		?><tr>
		<td colspan="3" bgcolor="#D4D0C8"><div align="center" class="style3">KELAS : <?
		echo strtoupper($yop[NamaKelas]);
		?>.</div>		</td></tr>
      <?
	  }
   if($kama>0){
   ?> <tr class="style3">
        <td><span class="style3">RUANGAN</span></td>
        <td><div align="center"><strong><span class="style3">:</span></strong></div></td><td><span class="style3">
          <?
	$KDJKDF_JSDSK = mysql_query("SELECT KodeKelas FROM kelas WHERE id='$kama'");
	$ke = mysql_fetch_array($KDJKDF_JSDSK);
	?>
          <select name="NoRuangan" class="style3">
            <option value="">--RUANGAN/KELAS/BED--</option>
            <?
	$Ruan = mysql_query("SELECT * FROM ruangan  WHERE KodeKelas='$ke[KodeKelas]' AND  stat=0");
	while($j = mysql_fetch_array($Ruan)){
	?>
            <option value="<? echo $j[id]; ?>">
              <?  echo "$j[NamaRuangan] ($j[NoRuangan]-$j[NoBed])";  ?>
              </option>
            <? } ?>
            </select>
          <?
$CE = mysql_query("SELECT COUNT(id) AS jj FROM transfer WHERE MstKey='$x[MstKey]'");
$yes = mysql_fetch_array($CE);
$buss = mysql_query("SELECT ");
if($yes[jj]>0){
?>
          <input type="hidden" name="IdRuangan" value="<? echo $x[IdKelas]; ?>">
          <? }else{ ?>
          <input type="hidden" name="IdRuangan" value="<? echo $x[IdKelas]; ?>">    
          <? } ?></span></td>
        </tr>
      <? } ?>
      <tr class="style3" valign="top">
        <td>KETERANGAN</td><td><div align="center"><strong>:</strong></div></td><td><textarea name="Keterangan" cols="30" rows="3" class="style3"></textarea></td>
	    </tr>
      <tR bgcolor="#BCCCDF">
        <td colspan="3" bgcolor="#59BA54">&nbsp;</td>
        </tR>
      <tr>
        <td colspan="3" bgcolor="#FFFF00"><div align="center">
          <input name="dfff" type="submit" class="style3" value="Simpan">
          <input name="fgfgf" type="button" class="style3" onClick="location.href='../fito_sayangku.php?id=<? echo $id; ?>';" value="Kembali">
          </div></td>
	    </tr>
    </table>
  </div>
  </td><td width="625" valign="top">
  <div align="left">
  <table border="1" class="style2">
  <tr>
  <td width="24" bgcolor="#59BA54" class="style3">NO</td>
  <td width="68" bgcolor="#59BA54" class="style3">TGL</td>
  <td width="69" bgcolor="#59BA54" class="style3"><div align="center">JAM</div></td>
  <td width="213" bgcolor="#59BA54" class="style3">ASAL</td>
  <td width="160" bgcolor="#59BA54" class="style3">TUJUAN</td>
  <td width="208" bgcolor="#59BA54" class="style3">KET</td>
   </tr>
  <?
  $nomer=1;
  $jkdmj = mysql_query("SELECT * FROM transfer WHERE MstKey='$id' ORDER BY id ASC");
  while($hh = mysql_fetch_array($jkdmj)){
  ?>
  <tr class="style3">
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo "$hh[tgl]-$hh[bln]-$hh[thn]"; ?></div></td>
  <td><div align="center"><? echo $hh[jam];?></div></td>
  <td><div align="left"><? 
  $kuk = mysql_query("SELECT * FROM ruangan WHERE id='$hh[Asal]'");
  $un= mysql_fetch_array($kuk);
  echo strtoupper($un[NamaRuangan]);
  ?></div></td>
  <tD><div align="left"><? 
  echo strtoupper($hh[NamaRuangan]); 
  ?></div></tD>
  <tD><div align="left"><? 
  echo strtoupper($hh[Keterangan]); 
  ?></div></tD>
  
  </tr>
   <?
  $nomer++; } ?>  <tr>
    <td colspan="6" bgcolor="#59BA54">&nbsp;</td>
    </tr>
  </table>
  </div>
  </td>
  </tr>
  </table>
   </div>
</form>
</div>
</html>
<? } ?>
 