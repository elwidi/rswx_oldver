<?
session_start();
include "../konek.php";
include "../ceke.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
if($dik_dimas[sembilanbelas]!=1){
echo "ANDA TIDAK BERHAK MASUK KE HALAMAN INI";
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66CC00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #FFFFFF;
}
-->
</style>
</head>
<body bgcolor="#999999">
<div align="left">
<table border="1">
<tr>
<td width="587" colspan="3" bgcolor="#993333"><div align="left">
  <span class="style3">YAKIN DATA PEMBELIAN INI AKAN DIACC<br />
  DAN DIKIRIM KE KEUANGAN &amp; AKUNTANSI?</span><br>
<input type="button" name="fgfgf" value=" YA " onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"  onClick="location.href='rrr.php?id=<? echo $id; ?>';" class="style1" <? if($kk[Cek]==2){?> disabled="disabled"<? } ?>> 
 || <input type="button" name="fgfjkngfk" value="TIDAK" onClick="window.close()" class="style1" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" > <? //de72 ?>
 || <input type="button" name="fgfgf" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"    onClick="wCompare_099s = window.open('de72.php?iin=bca&id=<? echo $id; ?>', 
  'wCompare_099s', 'width=780,height=300,left=370,Top=156,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare_099s.focus();"  value="CEK DETIL" class="style1"> </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2" bgcolor="#ECE9D8" class="style1">
<tr>
<td width="123">NO PO</td>
<td width="3">:</td>
<td width="256"><div align="left">
<?
echo "$kk[NoPo]";
?>
</div></td>
</tr>
<tr>
<td>NAMA SUPPLIER</td><td>:</td><td><div align="left"><?
echo $kk[NamaSupplier]; 
?></div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<? 
}
?>
