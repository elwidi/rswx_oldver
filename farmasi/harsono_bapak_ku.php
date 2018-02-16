<?
session_start();
include "../konek.php";
include "../ceke.php";
 $KDJFKDJF_090kdjfkdjfdfkdfdKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'");
$ii = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdKD);
if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP,.....<br>";
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
<form action="dd_Dfdfdfd.php">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="275" colspan="3"><div align="left" class="style1">
ATUR CARA PEMBAYARAN
</div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" class="style2" cellpadding="1" cellspacing="1">
<tr>
<td width="70">NoPo</td>
<td width="3">:</td>
<td width="178"><div align="left">
<?
echo $ii[NoPo];
?>
</div></td>
</tr>
<tr>
<td>Tgl Po</td><td>:</td><td><div align="left"><?
echo "$ii[Tgl] "; $bln=$ii[Bln]; $thn1=$ii[Thn];
include "../bulan.php"; 
?></div></td>
</tr>
<tr>
<td>Supplier</td><td>:</td><td><div align="left"><?
echo ucfirst(strtolower($ii[NamaSupplier])); 
?></div></td>
</tr>
<tr>
<td>Cara Bayar</td><td>:</td><td><div align="left">
<select name="CaraBayar" class="style2">
<option value="<? echo $ii[Stap]; ?>"><?
if($ii[Stap]==0){
	echo "Cash";
	}elseif($ii[Stap]==1){
	echo "Hutang";
	}else{
	echo "?";
	}
 ?></option> 
<option value="0">Cash</option>
<option value="1">Hutang</option>
</select>
<input type="hidden" name="id" value="<? echo $id; ?>">
</div></td>
</tr>
<tr>
<td>Ppn</td><td>:</td><td><div align="left"><?
 ?>
<input type="radio" name="Ppn" value="1"  <? if($ii[Ppn]==1){ ?> checked="checked"<?  } ?>>Ya
 <input type="radio" name="Ppn" value="0" <? if($ii[Ppn]==0){ ?> checked="checked"<?  } ?>>Tidak
</div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Simpan" name="fgfgf">
  <input type="button" name="fgfgf" value="Tutup" onClick="window.close()">
  </div></td>
  </tr>
</table>
</div>
</td>
</tr>
</table>
</form>
</body> 
</html>
<?
}
?>