<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){ ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style5 {font-size: 12px}
.style6 {color: #FFFFFF}
-->
</style>
</head>
<body>
<div align="center">
<form action="minum_kopi.php">
  <div align="left">
    <table border="0" cellpadding="2" cellspacing="3" bgcolor="#FFFFFF">
      <tr bgcolor="#FF9999">
        <td width="1034" height="32" colspan="3" bgcolor="#FFFFFF"><div align="center" class="style1 style6">  
          <img src="../gambar/labe.png">
          </div></td>
    </tr>
      <tr>
        <td colspan="3" valign="top">
          <div align="left">
            <table border="0" cellpadding="2" cellspacing="2">
              <tr bordercolor="#D4D0C8" valign="top">
                <td width="155" bgcolor="#FFEEDD"><div align="left" class="style4"><span class="style2">NAMA BIAYA </span></div></td><td width="6" bgcolor="#FFEEDD"><div align="center" class="style4"><strong>:</strong></div></td><td width="277" bgcolor="#FFEEDD"><div align="left" class="style6 style2 style5">
                  <input name="NamaBiaya" type="text" class="style4" value="" size="45" maxlength="120">
                  </div></td>
    </tr>
              <tr bordercolor="#D4D0C8">
                <td bgcolor="#FFEEDD"><div align="left" class="style4"><span class="style2">SVIP</span></div></td><td bgcolor="#FFEEDD"><div align="center" class="style4"><strong>:</strong></div></td><td bgcolor="#FFEEDD"><div align="left" class="style4 style2 style5">
                  <input name="Svip" type="text" class="style4" id="Svip"  size="15" maxlength="15">
                  </div></td>
    </tr>
              <tr>
                <td><div align="left"><span class="style4">VIP</span></div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Vip" type="text" class="style4" id="Vip"   size="15" maxlength="15">
                  </div></td>
              </tr>
              <tr>
                <td><div align="left"><span class="style4">SATU</span></div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Satu" type="text" class="style4" id="Satu"  size="15" maxlength="15">
                  </div></td>
              </tr>
              
              
              <tr class="style4">
                <td>DUA</td>
              <td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                <input name="Dua" type="text" class="style4" id="Dua" value="<? echo $as[Reagen]; ?>" size="15" maxlength="15">
                </div></td>
              </tr>
              <tr class="style4">
                <td><div align="left">TIGA</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Tiga" type="text" class="style4" id="Tiga" value="<? echo $as[Alkes]; ?>" size="15" maxlength="15">
                  </div></td>
              </tr><tr class="style4">
                <td><div align="left">ICU</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Icu" type="text" class="style4" id="Icu" value="<? echo $as[Kontrol]; ?>" size="15" maxlength="15">
                  </div></td>
              </tr><tr class="style4">
                <td><div align="left">NICU</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Nicu" type="text" class="style4" id="Nicu" value="<? echo $as[Listrik]; ?>" size="15" maxlength="15">
                  </div></td>
              </tr><tr class="style4">
                <td><div align="left">HCU</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Hcu" type="text" class="style4" id="Hcu" value="<? echo $as[JasaRs]; ?>" size="15" maxlength="15">
                  </div></td>
    </tr>
	<tr class="style4">
                <td><div align="left">PICU</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Picu" type="text" class="style4" id="Picu" value="<? echo $as[JasaRs]; ?>" size="15" maxlength="15">
                  </div></td>
    </tr>
	<tr class="style4">
                <td><div align="left">ISOLASI</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Isolasi" type="text" class="style4" id="Isolasi" value="<? echo $as[JasaRs]; ?>" size="15" maxlength="15">
                  </div></td>
    </tr>
		<tr class="style4">
                <td><div align="left">PERINA</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Perina" type="text" class="style4" id="Perina" value="<? echo $as[JasaRs]; ?>" size="15" maxlength="15">
                  </div></td>
    </tr>
		<tr class="style4">
                <td><div align="left">NEONATOLOGI</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Neonatologi" type="text" class="style4" id="Neonatologi" value="<? echo $as[JasaRs]; ?>" size="15" maxlength="15">
                  </div></td>
    </tr>
		<tr class="style4">
                <td><div align="left">RUJUKAN</div></td><td><div align="center"><strong>:</strong></div></td><td><div align="left" class="style4">
                  <input name="Rujukan" type="text" class="style4" id="Rujukan" value="<? echo $as[JasaRs]; ?>" size="15" maxlength="15">
                  </div></td>
    </tr>
	<tr bordercolor="#D4D0C8">
      <td colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
              <tr bgcolor="#FF9999">
                <td colspan="3" bgcolor="#4AB243"><div align="center">
                  <input name="simpan" type="submit" class="style4" value="Simpan">
                  
                  <input name="kmba" type="button" class="style4" onClick="location.href='makan_gemblong.php';" value="Kembali"> 
                  
                  <input name="Kernc" type="button" class="style4" onClick="location.href='keluar.php';" value="Keluar">
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
header("Location:../keluar.php");
}
?>