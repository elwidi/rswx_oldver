<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $kdjfkdjfkd = mysql_query("SELECT * FROM jualobat WHERE id=$IdDetil");
$ya = mysql_fetch_array($kdjfkdjfkd);
 $kdjkdfd_Dfdfd = mysql_query("SELECT * FROM racikembal WHERE id=1");
 $yapa = mysql_fetch_array($kdjkdfd_Dfdfd);

//
$idufiduifdjdkfd_Dfdf = mysql_query("SELECT * FROM returobatjalan WHERE IdJual='$ya[id]'");
$nb= mysql_fetch_array($idufiduifdjdkfd_Dfdf);
//
if($nb[id]){
echo "DATA INI SUDAH DIRETUR OLEH ";  ?><font color="#990000"><b><i><u><? echo strtoupper($nb[Opr]); ?></u></i></b><br>
ALASAN : <? echo $nb[Alasan]; ?><br>
TGL / JAM : <?
echo $nb[TglJam];
?><br>	
 
	<input type="button" name="fgfgf" value="Hapus"  onClick="location.href='h_ff2.php?NoResep=<? echo $NoResep; ?>&IdDetil=<? echo $IdDetil; ?>&mas=90';" >
 <?
}elseif(!$ya[id]){
//header("Location:../keluar2.php");
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
<body bgcolor="#ECF5FF">
<div align="left">
<form action="xxdddd.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="328" colspan="3"><div align="left" class="style1">
MENU RETUR OBAT<br />
<?
echo "#$id";
?>
</div></td>
</tr>
<tr valign="top">
  <td colspan="3"><div align="left">
  <table border="0" class="style2" cellpadding="2" cellspacing="2">
  <tR>
  <td width="94">NAMA OBAT</td>
  <td width="3">:</td>
  <td width="205"><div align="left">
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
  <td>HARGA</td><td>:</td><td><div align="left">
  <input type="text"    name="Harga" value="<? if($ya[HargaBeli]>$yapa[Embalase]){
  echo $ya[HargaBeli]-$yapa[Embalase];
  }else{
  echo $ya[HargaBeli];
  }  ?>">
  </div></td>
  </tr>
  <tr valign="top">
  <td>RETUR</td><td>:</td><td><div align="left">
  <input name="Qty" type="text" class="style2" size="14" maxlength="14">
   <input type="hidden" name="id" value="<? echo $id; ?>">
  <input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
  <input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
  <br><input type="radio" value="1" name="Mingo" checked="checked">
      +E ||
      <input type="radio" value="0" name="Mingo" >
      Non E </div></td>
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