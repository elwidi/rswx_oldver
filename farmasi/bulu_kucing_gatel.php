<?
session_start();
include "../konek.php";
include "../ceke.php";
$KDJFKDJF_090kdjfkdjfdfkdfdKD = mysql_query("SELECT * FROM polog77x WHERE id='$IdPo'");
$ss = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdKD); 

 //////////////////////
$KDJFKDJFKD2 = mysql_query("SELECT * FROM podetil77 WHERE id='$Gatal'"); 
$tt = mysql_fetch_array($KDJFKDJFKD2); 
 if(!$tt[id]){
 echo "RECORD SET TIDAK DITERIMA,....";
 }else{
 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
 	font-size: 12px;
}
-->
</style>
</head>
<form action="odododood.php">
<table border="0" cellpadding="2" cellspacing="2">
 <tr>
 <td colspan="3"><div align="left" class="style1">
 PECAH DATA PERMINTAAN<br>
 <?
 echo "$ss[NoPo]";
 ?>
 </div></td>
 </tr>
 <tr>
 <td colspan="3" valign="top">
 <div align="left">
 <table border="0" cellpadding="2" cellspacing="2" class="style2">
 <tr>
 <td>Rec</td><td>:</td><td><div align="left"><?
 echo "#$Gatal";
 ?></div></td>
 </tr>
  <tr>
 <td width="121">Nama Barang</td>
 <td width="3">:</td>
 <td width="266"><div align="left"><?
 echo ucfirst(strtolower($tt[NamaBarang])); 
 ?></div></td>
 </tr>
 <tr>
 <td>Satuan</td><td>:</td><td><div align="left"><?
 echo ucfirst(strtolower($tt[NamaSatuan])); 
 ?></div></td>
 </tr>
 <tr>
 <td>Isi</td><td>:</td><td><div align="left"><?
 echo $tt[Pengali]; 
 ?></div></td>
 </tr>
 <tr>
 <td>Harga</td><td>:</td><td><div align="left"><?
 echo number_format($tt[Harga]); 
 ?></div></td>
 </tr>
 <tr>
 <td>Qty Lama </td><td>:</td><td><div align="left"><input name="QtyX"  disabled="disabled"  type="text" class="style2"  value="<? echo $tt[Qty]; ?>">
 <?
 //ok=dimas&IdPo=12&&id=48&Gatal=1980
 ?>
 <input type="hidden" name="ok" value="<? echo $ok; ?>">
 <input type="hidden" name="IdPo" value="<? echo $IdPo; ?>">
 <input type="hidden" name="id" value="<? echo $id; ?>">
 <input type="hidden" name="Gatal" value="<? echo $Gatal; ?>" >
 </div></td>
 </tr>
  <tr>
 <td>Qty Baru </td><td>:</td><td><div align="left"><input name="Qty" type="text" class="style2"    ></div></td>
 </tr>
 <tr>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
   <td>&nbsp;</td>
 </tr>
 <tr>
   <td colspan="3">
   <input type="submit" value="Pecah" name="dfdfd">
   <?
$pale = explode("-",$tt[TglJam]);
if($pale[1]=='x'){
?>
<input name="fgfgf" type="button" class="style2" style="background:#FF9966" onClick="location.href='odododood.php?dimas=sehat&iin=bca&id=<? echo $id; 
?>&Gatal=<? echo $tt[id]; ?>';" value="Hapus">
<?
}
   ?><input type="button" name="fgfgf" value="Tutup" onClick="window.close()">
   </td>
   </tr>
 </table>
 </div>
 </td>
 </tr>

 <tr>
   <td colspan="3">&nbsp;</td>
   </tr>
 </table>
 </form>
  </html>
 <?
 }
 ?>