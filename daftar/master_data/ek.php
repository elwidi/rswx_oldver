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
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style3 {
	font-size: 14px;
	font-style: italic;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
.style5 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: italic;
	font-weight: bold;
}
.style6 {font-weight: bold}
.style7 {
	font-size: 18px;
	color: #ECE9D8;
}
.style8 {color: #333333}
-->
</style>
</head>
<body>
<div align="center"> 
<form action="anaku.php"> 
  <div align="left">
  <table width="1225" border="0">
 <tr bgcolor="#58BB4F"class="style1">
<td width="1180" colspan="3" ><img src="../../gambar/depan.png"></td>
</tr>

  <tr valign="top">
  <td ><div align="left">
    <table border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
       <tr bordercolor="#000000" class="style2">
        <td width="213"><div align="left" class="style2">
          <div align="left">LANTAI</div>
    </div></td>
    <td width="25"><div align="left" class="style5 style6">
      <div align="center">:</div>
    </div></td>
    <td width="334"><div align="left" class="style2">
      <div align="left">
        <select name="Lantai" class="style2">
          <option value="LANTAI I">LANTAI I</option>
          <option value="LANTAI II">LANTAI II</option>
          <option value="LANTAI III">LANTAI III</option>
          </select>
        </div>
    </div></td>
    </tr>
      <tr bordercolor="#000000" class="style2">
        <td width="213"><div align="left" class="style2">
          <div align="left">NO RUANGAN </div>
    </div></td>
    <td width="25"><div align="left" class="style5 style6">
      <div align="center">:</div>
    </div></td>
    <td width="334"><div align="left" class="style2">
      <div align="left">
        <input name="NoRuangan" type="text" class="style2" size="20" maxlength="20" />
        </div>
    </div></td>
    </tr>
      <tr bordercolor="#000000" class="style2">
        <td><div align="left">KELAS</div></td>
    <td><div align="center"><strong><em>:</em></strong></div></td>
    <td>
      <div align="left">
        <select name="KodeKelas">
          <option value="">--Kelas--</option>
          <?
$Kelas = mysql_query("SELECT id FROM kelas ORDER BY NamaKelas");
while($j2 = mysql_fetch_array($Kelas)){
?>
          <option value="<? echo $j2[id]; ?>">
            <? 
$Njk = mysql_query("SELECT NamaKelas FROM kelas WHERE id='$j2[id]'");
$koi = mysql_fetch_array($Njk);
echo strtoupper($koi[NamaKelas]);
?>
            </option>
          <? } ?>
          </select>
        </div></td>
    </tr>
      <tr bordercolor="#000000" class="style2">
        <td><div align="left">BED NOMER</div></td>
    <td><div align="center"><strong>:</strong></div></td>
    <td><div align="left">
      <input type="text" name="NoBed" maxlength="10" size="10"> 
      </div></td>
    </tr>
      <tr bordercolor="#000000" class="style2">
        <td><div align="left" class="style2">
          <div align="left">NAMA RUANGAN </div>
    </div></td>
    <td><div align="left" class="style5">
      <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style2">
      <div align="left">
        <input name="NamaRuangan" type="text" class="style2" value="" size="50" maxlength="60">
        </div>
    </div></td>
    </tr>
      <tr bordercolor="#000000">
        <td><div align="left" class="style2">
          KETERANGAN</div></td>
    <td><div align="left" class="style5">
      <div align="center">:</div>
    </div></td>
    <td><div align="left" class="style2">
      <div align="left">
        <input name="Keterangan" type="text" class="style2" value="" size="50" maxlength="60">
        </div>
    </div></td>
    </tr>
      <tr bordercolor="#000000">
        <td colspan="3">&nbsp;</td>
    </tr>
      <tr  bgcolor="#FFCCCC">
        <td colspan="3" bgcolor="#009933"><div align="center">
          <input type="submit" value="Simpan" name="simpan" />
          <input type="button" name="FGF" value="Kembali" onClick="location.href='bisa_saja_ya.php';">
          
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
} ?>