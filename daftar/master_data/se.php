<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
?>

<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;color: #333333;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
}
.style3 {color: #D4D0C8}
.style4 {color: #000000}
-->
</style>
</head>
<body>

<div align="left">
  <table width="1236" border="0" cellpadding="2" cellspacing="2">
    <tr bgcolor="#58BB4F"class="style1">
<td width="1169" colspan="3" > Isi Data Ruangan</td>
</tr>
    <tr valign="top">
      <td><div align="left">
        <form action="en.php">
          <table border="0" align="left" cellpadding="2" cellspacing="2"  bgcolor="#FFFFFF">
             <tr>
              <td colspan="3" valign="top">
                <div align="left">
                  <table border="0" cellpadding="2" cellspacing="2" class="style1">
                    <tr>
                      <td width="145">KODE KELAS</td>
    <td width="8">:</td>
    <td width="198"><div align="left">
      <input name="KodeKelas" type="text" class="style1" size="10" maxlength="10">
      </div></td>
    </tr>
                    <tr>
                      <td>NAMA KELAS </td><td>:</td><td><div align="left">
                        <input name="NamaKelas" type="text" class="style1"  size="20" maxlength="100">
                        </div></td>
    </tr>
                    <tr>
                      <td>TARIF</td>
      <td>:</td>
      <td><div align="left">
        <input name="Tarif" type="text" class="style1" id="Tarif"  size="12" maxlength="12">
        </div></td>
    </tr>
                    <tr>
                      <td>JASA SARANA</td>
      <td>:</td>
      <td><input name="JasaSarana" type="text" class="style1" id="JasaSarana"  size="12" maxlength="12"></td>
    </tr>
                    <tr>
                      <td>JASA MEDIK </td>
      <td>:</td>
      <td><input name="JasaMedik" type="text" class="style1" id="JasaMedik"  size="12" maxlength="12"></td>
    </tr>
                    <tr>
                      <td>JASA PERAWAT </td>
      <td>:</td>
      <td><input name="JasaPerawat" type="text" class="style1" id="JasaPerawat"  size="12" maxlength="12"></td>
    </tr>
                    <tr>
                      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
                    <tr>
                      <td colspan="3"><div align="center">
                        <input name="fgfg" type="submit" class="style1" value="Simpan">
                        <?
$dfldklf = mysql_query("SELECT COUNT(id) AS jj FROM kelas ");
$j = mysql_fetch_array($dfldklf);
?>
                        <input name="fgf" type="button" class="style1" onClick="location.href='ck.php';" value="Cek Data : <? echo $j[jj]; ?>">
                        <input name="gffg" type="button" class="style1" onClick="location.href='bisa_saja_ya.php';" value="Kembali">
                        </div></td>
      </tr>
                    </table>
    </div>    </td>
    </tr>
            </table>
    </form>
    </div></td>
    </tr>
  </table>
</div>
</body>
</html>
<? 
}else{
header("Location:../keluar.php");
}
?>