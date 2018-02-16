<?
session_start();
 include "../konek.php";
 include "../ceke.php";
$id = $_GET["id"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$buku = mysql_query("SELECT * FROM labumum2 WHERE id='$id'");
$h = mysql_fetch_array($buku);
if(!$h[id]){
header("Location:./mencret_jorok.php?id=1");
}
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-size: 12px}
.style7 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000099;
}
.style8 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div align="center">
<form action="buku_iin_lucu.php">
  <div align="left">
    <table width="573" border="0" cellpadding="2" cellspacing="2" bgcolor="#ECE9D8">
      <tr bgcolor="#990000">
        <td height="46" colspan="3" bgcolor="#FFFFFF"><div align="center" class="style1 style8">
          <img src="../gambar/labe.png">
          </div></td>
    </tr>
      <tr valign="top"> 
        <td colspan="3" bgcolor="#FFFFFF"><div align="left">
		<table border="0" cellpadding="2" cellspacing="2">
		      <tr>
        <td width="209"><span class="style4">NO DAFTAR</span></td>
    <td width="3"><div align="center"><strong><span class="style4">:</span></strong></div></td>
    <td width="341"><div align="left" class="style2 style5"><? echo $id; ?>
      <input type="hidden" name="id" value="<? echo $id; ?>"></div></td>
    </tr>
      <tr class="style4">
        <td>TGL LHR</td><td><div align="center"><strong>:</strong></div></td><td><div align="left"><input name="TglLahir" type="text" class="style4" id="TglLahir" value="<? echo $h[TglLahir]; ?>" size="2" maxlength="2"> - 
          <input name="BlnLahir" type="text" class="style4" value="<? echo $h[BlnLahir]; ?>" size="2" maxlength="2"> -
          <input name="ThnLahir" type="text" class="style4" value="<? echo $h[ThnLahir]; ?>" size="4" maxlength="4"></div></td>
    </tr>
      
      <tr>
        <td><span class="style4">NAMA PASIEN</span></td>
    <td><div align="center"><strong><span class="style4">:</span></strong></div></td>
    <td><div align="left" class="style4">
      <textarea name="NamaPasien" cols="30"  rows="2" class="style4" ><? echo $h[NamaPasien]; ?></textarea>
      </div></td>
    </tr>
      <tr>
        <td><span class="style4">JENIS KELAMIN</span></td>
    <td><div align="center"><strong><span class="style4">:</span></strong></div></td>
    <td><div align="left" class="style4">
      <select name="JenisKelamin" class="style4">
        <option value="<? echo $h[JenisKelamin]; ?>"><? echo $h[JenisKelamin];  ?></option>
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
        </select>
      </div></td>
    </tr>
      <tr>
        <td><span class="style4">ALAMAT</span></td>
    <td><div align="center"><strong><span class="style4">:</span></strong></div></td>
    <td><div align="left" class="style4"><textarea name="Alamat" cols="30"  rows="2" class="style4" ><? echo $h[Alamat]; ?></textarea>
      </div></td>
    </tr>
      <tr>
        <td><span class="style4">TELP </span></td>
    <td><div align="center"><strong><span class="style4">:</span></strong></div></td>
    <td><div  align="left" class="style4"><input name="HpTelp" type="text" class="style4" value="<? echo $h[HpTelp]; ?>" size="30" maxlength="30"></div></td>
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
        <td colspan="3" bgcolor="#63BF5C"><div align="center">
          <input name="fgfg" type="submit" class="style4" value="Proses">
          <input name="fgfgf" type="button" class="style4" onClick="location.href='permen_karet.php?iki=<? echo $id; ?>';" value="Transaksi">
          <input name="ffgf" type="button" class="style4" onClick="location.href='mencret_jorok.php?id=2';" value="Mundur">
          </div></td>
    </tr>
		</table>
		</div></td>
    </tr>

    </table>
  </div>
</form>
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}
?>