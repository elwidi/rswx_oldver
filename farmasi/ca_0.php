<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$iiiii = mysql_query("SELECT * FROM polog77 WHERE id='$IdPo'");
$uh = mysql_fetch_array($iiiii);
//
$dkjfkdjkfd= mysql_query("SELECT * FROM fakturpo WHERE IdPo='$IdPo'");
$ok = mysql_fetch_array($dkjfkdjkfd);
//
if(!$bln){
$bln=date("m");
$thn1=date("Y");
}else{
$bln=$Bln;
$thn1=$Thn;
}
if(!$uh[id]){
header("Location:../keluar2.php");
}else{?>
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
<form action="b99.php">
<table border="1">
<tr>
<td width="427"  colspan="3"><div align="left" class="style1">
DETAIL DATA <br />
PO : <? echo $uh[NoPo]; ?>
</div></td>
</tr>
<tr valign="top">
  <td  colspan="3"><div align="left">
  <table border="0" cellpadding="2" cellspacing="2" class="style2">
  <tr>
  <td width="118">SUPPLIER</td>
  <td width="8">:</td>
  <td width="268"><div align="left"><? echo strtoupper($uh[NamaSupplier]); ?></div></td>
  </tr>
  <tr>
  <td>TGL PO</td><td>:</td><td><div align="left"><?
  echo "$uh[Tgl]"; $bln=$uh[Bln]; $thn1=$uh[Thn];
  include "../bulan.php";
  ?>
  <input type="hidden" name="IdPo" value="<? echo $IdPo; ?>">
  <input type="hidden" name="Bln" value="<? echo $Bln; ?>">
  <input type="hidden" name="Thn" value="<? echo $Thn; ?>">
  </div></td>
  </tr>
  <tr>
    <td>NO FAKTUR </td>
    <td>:</td>
    <td><div align="left">
	<input type="text" name="NoFaktur" maxlength="100" size="30" value="<? echo $ok[NoFaktur]; ?>" class="style2">
	</div></td>
  </tr>
  <tr>
    <td>NO INV </td>
    <td>:</td>
    <td><div align="left">
	<input type="text" name="NoInv" maxlength="100" size="30" value="<? echo $ok[NoInv]; ?>" class="style2">
	</div></td>  </tr>
  <tr>
    <td>TGL FAKTUR </td>
    <td>:</td>
    <td><span class="style15 style2 style8  style3">
      <select name="TglFak" class="style2" id="TglFak">
	  <?
	  if($ok[TglFak]>0){ ?>
        <option value="<? echo $ok[TglFak]; ?>"><? echo $ok[TglFak];
		  ?></option>
		<?
		}
		 
$ttg2= 31;
while($ttg2>0){
?>
        <option value="<? echo $ttg2;  ?>"><? echo $ttg2;  ?></option>
        <? $ttg2--; } ?>
      </select>
/
<select name="BlnFak" class="style2" id="BlnFak">
  <?
  if($ok[BlnFak]>0){
  ?><option value="<? echo $ok[BlnFak]; ?>"><?  $bln=$ok[BlnFak];
  $thn1='';
		include "../bulan.php"; ?></option><?
  }
  ?>
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
<select name="ThnFak" class="style2" id="ThnFak">
<?
  if($ok[ThnFak]>0){
  ?><option value="<? echo $ok[ThnFak]; ?>"><?  echo $ok[ThnFak]; ?></option><?
  }
  ?>  <?
$hyh = 2013;
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
  <tr>
    <td>TGL JT </td>
    <td>:</td>
    <td><span class="style15 style2 style8  style3">
      <select name="TglJt" class="style2" id="TglJt">
       <?
	   if($ok[TglJt]>0){
	   ?><option value="<? echo $ok[TglJt]; ?>"><? echo $ok[TglJt]; ?></option><?
	   }
	     
$ttg2= 31;
while($ttg2>0){
?>
        <option value="<? echo $ttg2;  ?>"><? echo $ttg2;  ?></option>
        <? $ttg2--; } ?>
      </select>
/
<select name="BlnJt" class="style2" id="select2">
 <?
 if($ok[BlnJt]>0){
 ?> <option value="<? echo $ok[BlnJt]; ?>">
  <? 
		$bln =$ok[BlnJt]; $thn1='';
		include "../bulan.php";
		?>
  </option>
  <? } ?>
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
<select name="ThnJt" class="style2" id="select3">
<?
  if($ok[ThnJt]>0){
  ?><option value="<? echo $ok[ThnJt]; ?>"><?  echo $ok[ThnJt]; ?></option><?
  }
  ?>   <?
$hyh = 2013;
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
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3"><div align="left">
	<input type="submit" value="Update" name="fgf" class="style2">
	<input type="button" name="fgfgf" value="Selesai" onClick="window.close()" class="style2">
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
<?   } ?>