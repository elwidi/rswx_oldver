<?
session_start();
include "../konek.php";
include "../ceke.php";
 $jdfd = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh= mysql_fetch_array($jdfd);
//
  $kdjfkdkdf = mysql_query("SELECT * FROM txnugd WHERE id='$Detil'");
 $vb = mysql_fetch_array($kdjfkdkdf);
//
$KeyID="$hh[KodeDokter]-$vb[IdBiaya]";
//echo "dfd $KeyID";
$jshdsjhjs_sds = mysql_query("SELECT * FROM pecah_jasa WHERE KeyID='$KeyID'");
$te =  mysql_fetch_array($jshdsjhjs_sds);
//
if(!$hh[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	font-style: italic;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
  }
.style3 {
	color: #FFFFFF;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<form action="uyduyd.php"> 
<table border="0" cellspacing="0">
<tr>
<td width="589"><div align="left">
<span class="style1">MENU BERIKAN DISKON TXN</span><br />
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td>Id Biaya</td><td>:</td><td><div align="left"><? echo $vb[IdBiaya];  ?></div></td>
</tr>
<tr>
<td width="97">Nama Biaya</td>
<td width="8">:</td>
<td width="305"><div align="left"><? echo ucfirst(strtolower($vb[NamaBiaya])); ?></div></td>
</tr>
<tR>
<td>Harga</td><td>:</td><td><div align="left"><? echo number_format($vb[Harga]); ?></div></td> 
</tR><?
if(!$te[id]){
?><tr>
<td colspan="3" bgcolor="#993399"><div align="left" class="style3">
Tarif Belum Disetting,....!!!!
</div></td>
</tr><? 
}else{?>
<tr>
<td>Diskon</td><td>:</td><td><div align="left">
<input type="text" name="Disk" maxlength="12" size="12"  autofocus="autofocus"  value="<? echo $vb[disk]; ?>" />
<?
//id=25709&Detil=578&x=99
?>
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="Detil" value="<? echo $Detil; ?>">
<input type="hidden" name="x" value="<? echo $x; ?>">
</div></td>
</tr>
<tr>
<td>Tujuan Diskon</td><td>:</td><td><div align="left">
 
<input type="radio" name="TujuanDiskon" value="2" <? if($vb[TujuanDiskon]==2){ ?> checked<? } ?> />Jasa Dokter
<input type="radio" name="TujuanDiskon" value="3"  <? if($vb[TujuanDiskon]==3){ ?> checked<? } ?>/>Jasa Rs
<input type="radio" name="TujuanDiskon" value="4"  <? if($vb[TujuanDiskon]==4){ ?> checked<? } ?>/>ALL
 
</div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="submit" value="Update" name="dfdf" class="style1">
  <input type="button" name="fgfg" value="Tutup" onClick="window.close()" class="style1">
  </div></td>
  </tr>
  <? } ?>
</table>
</div></td>
</tr>
</table></form>
</body>
</html>
<?
}?>