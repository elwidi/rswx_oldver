<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfkdjfkd = mysql_query("SELECT * FROM jualobat2 WHERE id='$id' AND JamTran='$NoResep'");
$ya = mysql_fetch_array($kdjfkdjfkd);
//
$idufiduifdjdkfd_Dfdf = mysql_query("SELECT * FROM retur_inap WHERE IdJual='$ya[id]'");
$nb= mysql_fetch_array($idufiduifdjdkfd_Dfdf);
//
if($nb[id]){
echo "DATA INI SUDAH DIRETUR OLEH ";  ?><font color="#990000"><b><i><u><? echo strtoupper($nb[Opr]); ?></u></i></b><br>
ALASAN : <? echo $nb[Alasan]; ?><br>
TGL / JAM : <?
echo $nb[TglJam];

}elseif(!$ya[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
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
<form action="h_ff.php">
<table border="0">
<tr>
<td width="387" colspan="3"><div align="left" class="style1">
MENU RETUR OBAT<br />
<?
echo "#$id";
?>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" class="style2" cellpadding="2" cellspacing="2">
  <tr>
  <td>NO RESEP</td><td>:</td><td><div align="left"><?
  echo "$ya[JamTran]";
  ?>
  <input type="hidden" name="NoResep" value="<? echo $ya[JamTran]; ?>">
  </div></td>
  </tr>
<tr>
<td>TGL RETUR</td><td>:</td><td><div align="left"><select name="Tgl" class="style2" id="Tgl">
 		  <option value="<? echo date("d")-0; ?>"><? echo date("d")-0; ?></option>
		  <?
		 
$ttg= 1;
while($ttg<32){
?>
          <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
          <? $ttg++; } ?>
    </select>
  /
  
  <select name="Bln" class="style2" id="Bln">
  <option value="<? echo date("m")-0; ?>"><? $bln=date("m")-0;
  include "../bulan.php";   ?></option>
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
  <select name="Thn" class="style2" id="Thn">

<?
$awale = 2014;
while($awale<=2015){
?>       
<option value="<? echo $awale; ?>"><? echo $awale; ?></option>
<? $awale++; } ?>
  </select></div></td>
</tr>  <tR>
  <td width="94">NAMA OBAT</td>
  <td width="3">:</td>
  <td width="264"><div align="left">
  <? echo strtoupper($ya[NamaObat]); ?>
  </div></td>
  </tR>
  <tr>
  <td>QTY</td><td>:</td><td><div align="left">
 <?
 echo $ya[Qty];
 ?></div></td>
  </tr>
  <tr>
  <td>RETUR</td><td>:</td><td><div align="left">
  <input name="Qty" type="text" class="style2" size="14" maxlength="14">
  <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
  </div></td>
  </tr>
  <tr valign="top">
    <td>ALASAN</td>
    <td>:</td>
    <td><div align="left">
	<textarea rows="3" cols="30" name="Keterangan" class="style2"></textarea>
	</div></td>
  </tr>
  <tr valign="top">
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr valign="top">
    <td colspan="3"><div align="left">
	<input type="submit" value="Simpan" name="ffg">
	<input type="button" name="dkgjfkjgf" value="Batal" onClick="window.close()">
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
<? } ?>