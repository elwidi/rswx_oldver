<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$buku = mysql_query("SELECT * FROM pasienradluar WHERE id='$id'");
$h = mysql_fetch_array($buku);
if(!$h[id]){
header("Location:./mencret_jorok.php?id=1");
}
?>
<html>
<head>
<style type="text/css">
<!--
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-size: 12px}
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000099;
}
.style9 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div align="center">
<form action="buku_iin_lucu.php">
<table width="573" border="0" cellpadding="2" cellspacing="2" bgcolor="#ECE9D8">
<tr bgcolor="#990000">
<td height="46" colspan="3"><div align="center" class="style9">DETAIL DATA PASIEN <br>
TRANSAKSI PASIEN LAB LUAR</div></td>
</tr>
<tr>
<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td width="209"><span class="style4">NO DAFTAR</span></td>
<td width="3"><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td width="341"><div align="left" class="style2 style5"><? echo $id; ?>
<input type="hidden" name="id" value="<? echo $id; ?>"></div></td>
</tr>
<tr class="style4">
<td>TGL LHR</td><td><div align="center"><strong>:</strong></div></td><td><div align="left"><input name="TglLahir" type="text" id="TglLahir" value="<? echo $h[TglLahir]; ?>" size="2" maxlength="2"> - 
<input type="text" name="BlnLahir" value="<? echo $h[BlnLahir]; ?>" maxlength="2" size="2"> -
 <input type="text" name="ThnLahir" value="<? echo $h[ThnLahir]; ?>" maxlength="4" size="4"></div></td>
</tr>

<tr>
<td><span class="style4">NAMA PASIEN</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div align="left" class="style4">
<textarea  rows="2" cols="30" name="NamaPasien" ><? echo $h[NamaPasien]; ?></textarea>
</div></td>
</tr>
<tr>
<td><span class="style4">JENIS KELAMIN</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div align="left" class="style4">
<select name="JenisKelamin">
<option value="<? echo $h[JenisKelamin]; ?>"><? echo $h[JenisKelamin];  ?></option>
<option value="Pria">Pria</option>
<option value="Wanita">Wanita</option>
</select>
</div></td>
</tr>
<tr>
<td><span class="style4">ALAMAT</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div align="left" class="style4"><textarea  rows="2" cols="30" name="Alamat" ><? echo $h[Alamat]; ?></textarea>
</div></td>
</tr>
<tr>
<td><span class="style4">TELP </span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div  align="left" class="style4"><input type="text" name="HpTelp" value="<? echo $h[HpTelp]; ?>" maxlength="30" size="30"></div></td>
</tr>
<tr>
<td><span class="style4">USER INPUT</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><div align="left" class="style4"><? echo strtoupper($h[Opr]); ?></div></td>
</tr>
<tr>
<td height="23" colspan="3"><div align="center"><span class="style7">PENGEDIT TERAKHIR AKAN TERCATAT DIDATBASE</span></div></td>
</tr>
<tr bgcolor="#990000">
<td colspan="3"><div align="center">
<input type="submit" value="Proses" name="fgfg">
 <input type="button" name="fgfgf" value="Transaksi" onClick="location.href='permen_karet.php?iki=<? echo $id; ?>';">
<input type="button" name="ffgf" value="Mundur" onClick="location.href='mencret_jorok.php?id=2';">
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>