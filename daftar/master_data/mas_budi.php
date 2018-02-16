<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
//NamaKelas=%25PE&makan=tahu
$NamaKelas = $_GET["NamaKelas"];
$makan = $_GET["makan"];
$iki = $_GET["iki"];
$KodeKelas = $_GET["KodeKelas"];
$ela=$_GET["ela"];
$id = $_GET["id"];
$kdjfkdldkfld = mysql_query("SELECT * FROM kelas WHERE id='$id'");
$ii =  mysql_fetch_array($kdjfkdldkfld);
if(!$ii[id]){
header("Location:../../keluar.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
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
-->
</style>
</head>
<body>

<div align="left">
  <table border="0" cellpadding="2" cellspacing="2">
    <tr bgcolor="#58BB4F"class="style1">
<td width="1169" colspan="3" ><img src="../../gambar/depan.png"></td>
</tr>
    <tr>
      <td valign="top">
        <div align="left">
          <form action="ew.php">
      <div align="left">
        <table border="0" cellpadding="2" cellspacing="2"  bgcolor="#FFFFFF">
          <tr>
            <td valign="top">
              <div align="left">
                <table border="0" cellpadding="2" cellspacing="2" class="style1">
                  <tr>
                    <td width="145">KODE KELAS</td>
        <td width="8">:</td>
        <td width="198"><div align="left">
          <input type="text" name="KodeKelas" maxlength="10" size="10" value="<? echo $ii[KodeKelas]; ?>">
          <input type="hidden" name="id" value="<? echo $id; ?>">
          </div></td>
        </tr>
                  <tr>
                    <td>NAMA KELAS </td><td>:</td><td><div align="left">
                      <input type="text" name="NamaKelas" maxlength="100"  size="20" value="<? echo $ii[NamaKelas]; ?>">
                      </div></td>
        </tr>
                  <tr>
                    <td>TARIF</td>
          <td>:</td>
          <td><div align="left">
            <input name="Tarif" type="text" id="Tarif"  size="12" maxlength="12" value="<? echo $ii[Tarif]; ?>">
            </div></td>
        </tr>
                  <tr>
                    <td>JASA SARANA</td>
          <td>:</td>
          <td><input name="JasaSarana" type="text" id="JasaSarana"  size="12" maxlength="12" value="<? echo $ii[JasaSarana]; ?>"></td>
        </tr>
                  <tr>
                    <td>JASA MEDIK </td>
          <td>:</td>
          <td><input name="JasaMedik" type="text" id="JasaMedik"  size="12" maxlength="12" value="<? echo $ii[JasaMedik]; ?>"></td>
        </tr>
                  <tr>
                    <td>JASA PERAWAT </td>
          <td>:</td>
          <td><input name="JasaPerawat" type="text" id="JasaPerawat"  size="12" maxlength="12" value="<? echo $ii[JasaPerawat]; ?>"></td>
        </tr>
                  <tr>
                    <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
                  <tr>
                    <td colspan="3" bgcolor="#333333"><div align="center">
                      <input type="submit" value="Simpan" name="fgfg">
                      <?
$dfldklf = mysql_query("SELECT COUNT(id) AS jj FROM kelas ");
$j = mysql_fetch_array($dfldklf);
?>
                      <input type="button" name="fgf" value="Cek Data : <? echo $j[jj]; ?>" onClick="location.href='ck.php';">
                      <input type="button" name="gffg" value="Kembali" onClick="location.href='bisa_saja_ya.php';">
                      </div></td>
          </tr>
                  </table>
        </div>    </td>
        </tr>
        </table>
      </div>
    </form>
    </div>    </td>
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