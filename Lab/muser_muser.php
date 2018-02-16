<?
session_start();
include "../konek.php";
include "../ceke.php";
 $id  = $_GET["id"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12 || $a[Level]==16){
$DtPas = mysql_query("SELECT * FROM datapasien WHERE id='$id'");
$z = mysql_fetch_array($DtPas);
$tresa =mysql_query("SELECT COUNT(id) AS kk FROM rwtjalan WHERE NoPasien='$z[NoPasien]'");
$ios = mysql_fetch_array($tresa);
if(!$z[id]){
header("Location:./dabar.php");
}
   ?>
<html>
<head>
<style type="text/css">
<!--
.style2 {font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 18px;}
.style4 {font-family: "Times New Roman", Times, serif}
.style5 {font-family: Arial, Helvetica, sans-serif}
.style6 {font-size: 12px}
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style9 {color: #000000}
-->
</style>
</head>
<body>
   <div align="center">
 <table width="535" border="0" cellpadding="3" cellspacing="3" bgcolor="#FFFFFF">
<tr bgcolor="#990000">
  <td height="37" colspan="3" bgcolor="#D4D0C8">
    <div align="center" class="style2 style9">KOREKSI DATA PASIEN </div></td>
</tr>
<tr bordercolor="#000000" bgcolor="#FFCCCC" class="style6">
<td colspan="3" bgcolor="#66CC66"><div align="center"></div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td width="193"><div align="left" class="style7">
  <div align="left">NO RM </div>
</div></td><td width="4"><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td width="602"><div align="left" class="style7">
  <div align="left">
    <input type="text"  name="NoPasien" disabled="disabled" maxlength="20" size="20"  value="<? echo $z[NoPasien]; ?>"/>
	<input type="hidden" name="id" value="<? echo $id; ?>">
  </div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">NAMA PASIEN </div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="NamaPasien" type="text"  disabled="disabled" class="style7" id="NamaPasien" value="<? echo $z[NamaPasien]; ?>" size="30" maxlength="100">
  </div>
</div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">ALAMAT</div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="Alamat" type="text"  disabled="disabled" class="style7" id="Alamat" value="<? echo $z[Alamat]; ?>" size="30" maxlength="100">
  </div>
</div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">NAMA BAPAK </div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="NamaBapak" type="text"  disabled="disabled" class="style7" id="NamaBapak" value="<? echo $z[NamaBapak]; ?>" size="30" maxlength="100">
  </div>
</div></td>
</tr>
<!-- 
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">NO INDEN </div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="NoIden" type="text"  disabled="disabled" id="NoIden" size="20" maxlength="20"  value="<? // echo $z[NoIden]; ?>"/>
  </div>
</div></td>
</tr>
--><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">JENIS KELAMIN </div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td>
<td> <div align="left"><span class="style4"><span class="style5"><span class="style6"><select name="JenisKelamin" class="style7">
<option value="<? echo $z[JenisKelamin]; ?>"><?
echo $z[JenisKelamin];
 ?></option>
<option value="LAKI-LAKI">Pria</option>
<option value="PEREMPUAN">Wanita</option>
</select></span></span></span></div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">TMP LAHIR </div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="TempatLhr" type="text"  disabled="disabled" class="style7" id="TempatLhr" value="<? echo $z[TempatLhr]; ?>" size="30" maxlength="50" />
  </div>
</div></td>
</tr><tr bordercolor="#000000" bgcolor="#FFCCCC" class="style6">
<td><div align="left" class="style7">
  <div align="left">TGL LAHIR </div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <? $kok = explode("-",$z[tgllhr]); ?>
	<input  name="TglLahir" type="text"  disabled="disabled" class="style7" value="<? echo $kok[0]; ?>" size="2" maxlength="2">
	- 	<input name="BlnLahir" type="text"  disabled="disabled" class="style7" value="<? echo $kok[1]; ?>" size="2" maxlength="2">
	- 	<input name="ThnLahir" type="text"  disabled="disabled" class="style7" value="<? echo $kok[2]; ?>" size="4" maxlength="4">
    </div>TglLahir
</div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">STATUS KAWIN </div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <select name="StatusKawin" class="style7">
	<option value="<? echo $z[StatusKawin]?>"><? echo $z[StatusKawin]; ?></option>
	<option value="Kawin">Kawin</option>
	<option value="Belum Kawin">Belum Kawin</option>
	</select>
	
  </div>
</div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">PENDIDIKAN</div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="Pendidikan" type="text"  disabled="disabled" class="style7" id="Pendidikan" value="<? echo $z[Pendidikan]; ?>" size="20" maxlength="100" />
  </div>
</div></td>
</tr>
<tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">TELP</div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="Telpon" type="text"  disabled="disabled" class="style7" id="Telpon" value="<? echo $z[Telpon]; ?>"   size="30" maxlength="30">
  </div>
</div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">PEKERJAAN</div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="Pekerjaan" type="text"  disabled="disabled" class="style7" id="Pekerjaan" value="<? echo $z[Pekerjaan]; ?>" size="20" maxlength="100" />
  </div>
</div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left" class="style7">
  <div align="left">TGL MASUK </div>
</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <input name="TglMasuk" type="text"  disabled="disabled" class="style7" value="<? echo $z[TglMasuk]; ?>" size="20" maxlength="100">
  </div>
</div></td>
</tr><tr bordercolor="#000000" class="style6">
<td><div align="left">AGAMA</div></td>
<td><div align="center" class="style7">
  <div align="left"><strong><em>:</em></strong></div>
</div></td><td><div align="left" class="style7">
  <div align="left">
    <select name="agama" class="style7">
	<option value="<? echo $z[agama]; ?>"><? echo $z[agama]; ?></option>
	<option value="Katholik">Katholik</option>
	<option value="Kristen">Kristen</option>
	<option value="Islam">Islam</option>
	<option value="Budha">Budha</option>
	<option value="Hindhu">Hindu</option>
	</select>
  </div>
</div></td>
</tr>
<tr bgcolor="#CCCCCC" class="style7">
<td><strong>OPR</strong></td>
<td><strong>:</strong></td>
<td><div align="left"><strong><? echo strtoupper($z[Opr]); ?></strong></div></td>
</tr>
<tr bgcolor="#CCCCCC" class="style7">
<td><strong>TERAKHIR UPDATE </strong></td>
<td><strong>:</strong></td>
<td><div align="left"><strong><? echo ($z[TglJam]); ?></strong></div></td>
</tr>
<tr bordercolor="#000000">
<td colspan="3">&nbsp;</td>
</tr>
<tr bgcolor="#66CC66">
<td colspan="3">
<div align="center">
 <input name="Kembali" type="button" class="style7" onClick="window.close()" value="TUTUP HALAMAN SILAHKAN LAKUKAN KLIK DISINI">
</div>
 </td>
</tr>
</table>
  </div>
</body>
</html>
<?
}else{
header("Location:./keluar.php");
}
?>
