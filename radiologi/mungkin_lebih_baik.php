<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
 $tgl =date("d"); $bln=date("m"); $thn=date("y");
$tang = "$tgl$bln$thn";
$RegId = date("H:i:s");
$mbah = $tang."-".$RegId;
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
	color: #000000;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-size: 12px}
.style6 {font-weight: bold}
.style7 {color: #000000}
.style8 {
	font-family: "Courier New", Courier, mono;
	font-weight: bold;
	font-size: 18px;
	color: #990000;
}
.style9 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div align="center">
<form action="driver_op.php"> 
<table border="0" cellpadding="1" cellspacing="1" bgcolor="#FFFFFF">
<tr bgcolor="#990000">
<td height="38" colspan="3" bgcolor="#FFFFFF"><div align="center" class="style1 style9"> 
<img src="../gambar/radpng">
</div></td>
</tr>
<tr valign="top">
<td colspan="3"><div align="left">
<table border="0" cellpadding="1" cellspacing="1">
<tr>
<td width="190"><div align="left" class="style4"><span class="style2"><span class="style7">. </span>NO REG</span></div></td><td width="5"><div align="center" class="style2 style5"><strong>:</strong></div></td><td width="331"><div align="left" class="style4">
<? echo "$mbah"; ?>
  <div align="left">
    <input type="hidden" name="mbah" value="<? echo $mbah; ?>">
  </div>
</div></td>
</tr>
<tr>
<td width="190" height="31" class="style4"><div align="left" class="style15 style2 style5">
  <div align="left"><span class="style7">.</span> TANGGAL LAHIR </div>
</div></td><td width="5"><div align="center" class="style15 style6">
  <div align="center">:</div>
</div></td><td width="331"><div align="left" class="style15">
    <div align="left">
      <select name="TglLahir" class="style4" id="TglLahir">
	            <option value="<? echo $tgl; ?>"><? echo $tgl; ?></option>
                 
		      <?
$ttg= 1;
while($ttg<32){
?>
                <option value="<? echo $ttg;  ?>"><? echo $ttg;  ?></option>
                <? $ttg++; } ?>
        </select>
      /
      <select name="BlnLahir" class="style4" id="BlnLahir">
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
      <select name="ThnLahir" class="style4" id="ThnLahir">
      <?
	  $tah = 1920;
	  while($tah<2020){
	  ?>
	  <option value="<? echo $tah; ?>"><? echo $tah;  ?></option>
	  <? $tah++; } ?>
      </select>
</div>
</div></td>
	</tr>
	<tr>
	<td class="style4"><div align="left"><span class="style7">. </span>JENIS</div></td>
	<td><div align="center"><strong>:</strong></div></td><td><div align="left">
	  <select name="JenisKelamin" class="style4">
	    <option value="Pria">Pria</option>
	    <option value="Wanita">Wanita</option>
	    </select>
	  </div></td>
	</tr>
 <tr valign="top">
<td><div align="left" class="style4"><span class="style2"><span class="style7">. </span>NAMA PASIEN</span></div></td><td><div align="center" class="style4"><strong>:</strong></div></td><TD><div align="left"><span class="style4">
    <textarea name="NamaPasien" cols="30" rows="2" class="style4"></textarea>
</span></div></TD>
</tr>
<tr valign="top">
<td><span class="style4"><span class="style7">.</span> TELP/HP</span></td>
<td><div align="center" class="style4"><strong>:</strong></div></td><td><div align="left"><span class="style4">
    <textarea name="HpTelp" cols="30" rows="2" class="style4" id="HpTelp"></textarea>
</span></div></td>
</tr>
<tr valign="top">
<td><span class="style4"><span class="style7">. </span>ALAMAT </span></td>
<td><div align="center" class="style4"><strong>:</strong></div></td><TD><span class="style4">
  <textarea name="Alamat" cols="30" rows="3" class="style4"></textarea>
</span></TD>
</tr>
<tr bgcolor="#000000">
<td colspan="3" bgcolor="#5ABB52"><div align="center">
  <span class="style8">. </span>
 <!--  <input name="ffgg" type="button" class="style8" onClick="location.href='cacing_makan_tanah.php';" value=" Cek Data Terinput "> -->
</div></td>
</tr>
<tr bgcolor="#990000">
<td colspan="3" bgcolor="#FFCC00"><div align="center">
<input name="sdff" type="submit" class="style4" value="Simpan">
<input name="sdffff" type="button" class="style4" onClick="location.href='mencret_jorok.php?id=1';" value="Mundur">
 <input name="sdfdf" type="button" class="style4" onClick="location.href='keluar.php';" value="Keluar">
</div></td>
</tr>
</table>
</div></td>
</tr>

</table>
</form>
<br>
 
</div>
</body>
</html>
<? 
}else{
header("Location:./keluar.php");
}?>
