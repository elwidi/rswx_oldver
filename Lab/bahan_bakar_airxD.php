<?
session_start();
 include "../konek.php";
 include "../ceke.php";
include "../rake.php";
  $NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 if($a[Level]==12){
 $kop = mysql_query("SELECT * FROM sublab_2 WHERE id=$del");
$ke = mysql_fetch_array($kop);
if(!$ke[id]){
header("Location:./buah_melon_manis.php?id=$id");
}
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif, "Arial Narrow";
	font-size: 14px;
	color: #000000;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"}
.style4 {font-family: Arial, Helvetica, sans-serif, "Arial Narrow"; font-size: 12px; }
.style5 {font-size: 12px}
.style6 {color: #000000}
.style8 {color: #000000; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="center">
<form action="simpan_editsublsssab.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#000099">
<td height="20" colspan="3" bgcolor="#FFFFFF"  ><div align="center" class="style1">
KOREKSI DATASUBLAB
<br>
<?
echo "REC#:$del";
?>
</div></td>
</tr>
<tr class="style4">
<td bgcolor="#FFFFFF"><span class="style6">URUT</span></td>
<td bgcolor="#FFFFFF"><div align="center"><span class="style8">:</span></div></td>
<td bgcolor="#FFFFFF"><div align="left" class="style6">
<input name="Urt" type="text" class="style4" value="<? echo $ke[id]; ?>" size="10" maxlength="20">
 ||
  <input type="button" name="dfd" value="Buat Sub Baru" onClick="location.href='j.php?del=<? echo $del; ?>&id=<? echo $id; ?>';" class="style4"> 
   </div></td>
</tr>
<tr>
<td width="215"><span class="style4">NAMA BIAYA</span></td><td width="5"><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td width="305"><span class="style4">
  <input name="NamaBiaya" type="text" class="style4" value="<? echo $ke[NamaBiaya]; ?>" size="30" maxlength="120">
<input type="hidden" name="IdBiaya" value="<? echo $id; ?>">
<input type="hidden" name="del" value="<? echo $ke[id]; ?>">
</span></td>
</tr>
<tr class="style4">
<td><span class="style4">KELOMPOK</span></td><td><div align="center"><strong><span class="style4">:</span></strong></div></td>
<td><span class="style4">
  
	 <? echo $ke[Kelompok]; ?> 

</span></td>
</tr>
<tr class="style4">
<td>LEVEL</td><td><div align="center"><strong>:</strong></div></td>
<td><select name="Level">
<option value="<? echo $ke[Level]; ?>"><?  echo $ke[Level]; ?></option>
<option value="1">Satu</option>
<option value="2">Dua</option>
<option value="3">Tiga</option>
</select></td>
</tr>
 <tr>
<td><span class="style4">SATUAN</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style2 style5">
  <input name="Satuan" type="text" class="style4" id="Satuan" value="<? echo $ke[Satuan]; ?>" size="30" maxlength="120">
</div></td>
</tr>
<tr>
<td><span class="style4">HASIL</span></td><td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4">
  <input name="Hasil" type="text" class="style4" value="<? echo $ke[Hasil]; ?>" size="30">
</div></td>
</tr>
<tr>
<td><span class="style4">NILAI NORMAL </span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td>
<div align="left" class="style4">
  <input name="NilaiNormal" type="text" class="style4" id="NilaiNormal" value="<? echo $ke[NilaiNormal]; ?>" size="30">
</div></td>
</tr>
<tr>
<td><span class="style4">MAX PRIA</span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4">
  <input name="MaxP" type="text" class="style4" id="MaxP" value="<? echo $ke[MaxP]; ?>" size="30">
</div></td>
</tr>
<tr>
<td><span class="style4">MIN PRIA </span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4">
  <input name="MinP" type="text" class="style4" id="MinP" value="<? echo $ke[MinW]; ?>" size="30">
</div></td>
</tr><tr>
<td><span class="style4">MAX WANITA </span></td>
<td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4">
  <input name="MaxW" type="text" class="style4" id="MaxW" value="<? echo $ke[MaxW]; ?>" size="30">
</div></td>
</tr>
<tr>
  <td><span class="style4">MIN WANITA </span></td>
  <td><div align="center"><strong>:</strong></div></td>
  <td><span class="style4">
    <input name="MinW" type="text" class="style4" id="MinW" value="<? echo $ke[MinW];?>" size="30">
  </span></td>
</tr>
<tr bgcolor="#000099">
  <td colspan="3" bgcolor="#990000">
    <div align="center" class="style2">
      <input  name="dfdff" type="submit" class="style2" value="Simpan"> 
    <input type="button" name="Hapus" value="Hapus" onClick="location.href='bahan_bakar_aifdfdfdry.php?id=<? echo $id; ?>&del=<? echo $del; ?>';">
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