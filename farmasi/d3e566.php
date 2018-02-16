<?
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfkdjkf_kljkj = mysql_query("SELECT * FROM jual_ob_rl WHERE id='$IdDetil'");
$ya = mysql_fetch_array($kdjfkdjkf_kljkj);
if(!$ya[id]){
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
<form action="a_87sss.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="271" colspan="3"><div align="left" class="style1">
 <?
echo ucfirst(strtolower($ya[NamaObat])); 
?><br>
Hapus Data ?<BR>
<input type="button" name="dfkjkdf" value="Ya" onClick="location.href='234fff.php?anak=panah&IdDetil=<? echo $IdDetil; ?>&NoResep=<? echo $NoResep; ?>';" style="background:#FFFFCC"> || 
<input type="button" name="dfkjkdf" value="Tidak" onClick="window.close()" style="background:#FFFFCC"> 
</div></td>
</tr>
<tr valign="top">
<td colspan="3" ><div align="left">
<table border="0" cellpadding="2" cellspacing="2" class="style2">
<tr>
<td>Harga</td><TD>:</TD><TD><div align="left">
<input type="text" name="Harga" maxlength="14" id="12" value="<? echo $ya[Harga]; ?>"><br><input type="radio" value="1" name="Mingo" checked="checked">
      +E ||
      <input type="radio" value="0" name="Mingo" >
      Non E 
</div></TD>
</tr>
<tr>
<td width="74">Qty</td>
<td width="6">:</td>
<td width="171"><div align="left">
<input name="Qty" type="text" class="style2" value="<? echo $ya[Qty]; ?>" size="12" maxlength="12" />
<input type="hidden" name="stata" value="<? echo $stata; ?>">
<input type="hidden" name="IdDetil" value="<? echo $IdDetil; ?>">
<input type="hidden" name="NoResep" value="<? echo $NoResep; ?>">
</div></td>
</tr>
<tr>
<td colspan="3"><div align="left">
<input name="dfdfd" type="submit" class="style2" value="Simpan"  />
<input name="fgfgf" type="button" class="style2" onClick="window.close()" value="Selesai" />
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
<? 
}
?>