<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 $gatr = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
$as = mysql_fetch_array($gatr);
if($as[id]!=$id){
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
.style6 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div align="center">
<form action="simpan_sublab.php">
  <div align="left">
    <table width="533" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
      <tr >
        <td height="31" colspan="3"><div align="center" class="style1 style6">
 
          </div></td>
    </tr>
      <tr>
        <td colspan="3" valign="top">
          <div align="left">
            <table border="0" cellpadding="2" cellspacing="2">
              <tr>
                <td width="205"><span class="style4">NAMA BIAYA</span></td><td width="15"><div align="center"><strong><span class="style4">:</span></strong></div></td><td width="271"><span class="style4">
                  <input name="NamaBiaya" type="text" class="style4" value="" size="30">
                  <input type="hidden" name="IdBiaya" value="<? echo $id; ?>">
                  </span></td>
    </tr>
              <tr class="style4">
                <td><span class="style4">KELOMPOK</span></td><td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><span class="style4">
                  <select name="Kelompok" class="style4">
                    <option value="">--Kelompok--</option>
                    <?
	$Kel = mysql_query("SELECT * FROM kelompoklab ORDER BY NamaKelompok");
	while($sw = mysql_fetch_array($Kel)){
	?>
                    <option value="<? echo $sw[NamaKelompok]; ?>"><? echo strtoupper($sw[NamaKelompok]); ?></option>
                    <? } ?>
                    </select>
                  || 
                  <input name="dfdf" type="button" class="style4" disabled="disabled" onClick="location.href='tambah_klopo.php?id=<? echo $id; ?>';" value="Tambah Kelompok">
                  </span></td>
    </tr>
              <tr class="style4">
                <td>LEVEL</td><td>:</td><td><select name="Level">
                  <option value="1">Satu</option>
                  <option value="2">Dua</option>
                  <option value="3">Tiga</option>
                  </select></td>
    </tr>
              <tr>
                <td><span class="style4">SATUAN</span></td>
    <td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style2 style5">
      <input name="Satuan" type="text" class="style4" id="Satuan" value="" size="30">
      </div></td>
    </tr>
              <tr>
                <td><span class="style4">HASIL</span></td><td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4">
                  <input name="Hasil" type="text" class="style4" value="" size="30">
                  </div></td>
    </tr>
              <tr>
                <td><span class="style4">NILAI NORMAL </span></td>
    <td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4">
      <input name="NilaiNormal" type="text" class="style4" id="NilaiNormal" value="" size="30">
      </div></td>
    </tr>
              <tr>
                <td><span class="style4">MAX PRIA</span></td>
    <td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4">
      <input name="MaxP" type="text" class="style4" id="MaxP" value="" size="30">
      </div></td>
    </tr>
              <tr>
                <td><span class="style4">MIN PRIA </span></td>
    <td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4">
      <input name="MinP" type="text" class="style4" id="MinP" value="" size="30">
      </div></td>
    </tr><tr>
      <td><span class="style4">MAX WANITA </span></td>
    <td><div align="center"><strong><span class="style4">:</span></strong></div></td><td><div align="left" class="style4">
      <input name="MaxW" type="text" class="style4" id="MaxW" value="" size="30">
      </div></td>
    </tr>
              <tr>
                <td><span class="style4">MIN WANITA </span></td>
      <td><div align="center"><strong>:</strong></div></td>
      <td><span class="style4">
        <input name="MinW" type="text" class="style4" id="MinW" value="" size="30">
        </span></td>
    </tr>
              <tr bgcolor="#000099">
                <td colspan="3" bgcolor="#4CAF45">
                  <div align="center" class="style2">
                    <input  name="dfdff" type="submit" class="style4" value="Simpan"> 
                    <input  name="dfg" type="button" class="style4" onClick="location.href='ikan_goreng.php?id=<? echo $id; ?>';" value="Kembali">
                  </div></td>
    </tr>
              </table>
    </div>    </td>
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