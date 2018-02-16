<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ha  =$_GET["ha"];
$NamaBiaya = $_GET["NamaBiaya"];
$asik = $_GET["asik"];
 $kdjfkdjfkd = mysql_query("SELECT * FROM TarifRad WHERE id='$id'");
$ii = mysql_fetch_array($kdjfkdjfkd);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
 ?>
<html>
<head> 
<script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFFF00';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}

.style34 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color:#FFFF99
}

.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 15px;
}
-->
</style>
</head> 
<body bgcolor="#CCCCCC">
<div align="center">
<form action="de.php">
  <table border="0" cellpadding="1" cellspacing="1">

    <tr>
      <td valign="top"><div align="left">
          <table border="0" cellpadding="2" cellspacing="2" class="style1">
            <tr>
              <td width="135">KODE BIAYA</td>
              <td width="3"><strong>:</strong></td>
              <td width="244"><div align="left">
                  <input name="KodeBiaya" type="text" class="style1" value="<? echo $ii[KodeBiaya]; ?>" size="20" maxlength="40">
              </div></td>
            </tr>
            <tr>
              <td>NAMA BIAYA</td>
              <td><strong>:</strong></td>
              <td><div align="left">
                  <input name="NamaBiaya" type="text" class="style1" value="<? echo $ii[NamaBiaya]; ?>" size="30" maxlength="100">
              </div></td>
            </tr>
			<tr>
			<td>KELOMPOK</td><td>:</td><td><div align="left">
			<select name="Kelompok" class="style1">
			<option value="<? echo $ii[Kelompok]; ?>"><? echo $ii[Kelompok]; ?></option>
			<option value="REG">REG</option>
			<option value="AMB">AMB</option>
			<option value="ANAK">ANAK</option>
			<option value="BEDAH">BEDAH</option>
			<option value="BIDAN">BIDAN</option>
			<option value="GIGI">GIGI</option>
			<option value="ICU">ICU</option>
			<option value="KAMAR">KAMAR</option>
			<option value="KONSUL">KONSUL</option>
			<option value="KULIT">KULIT</option>
			<option value="LAB">LAB</option>
			<option value="OK">OK</option>
			<option value="RAD">RAD</option>
			<option value="RM">RM</option>
			<option value="THT">THT</option>
			<option value="TINDAKAN RANAP">TINDAKAN RANAP</option>
			<option value="UGD">UGD</option>
			<option value="VISITE">VISITE</option>
			<option value="VK">VK</option>
			<option value="MCU">MCU</option>
 			</select>
			</div></td>
			</tr>
            <tr>
              <td>HARGA</td>
              <td><strong>:</strong></td>
              <td><div align="left">
			  <input name="Total" value="<? echo $ii[Total]; ?>" type="text" class="style1" id="Total" size="12" maxlength="12">
			   || <?
			   echo number_format($ii[HargaAs]);
			   ?></div></td>
            </tr>
            <tr>
              <td>FILM</td>
              <td><strong>:</strong></td>
              <td><div align="left">
			  <input name="Film" value="<? echo $ii[Film]; ?>" type="text" class="style1" id="Film" size="12" maxlength="12">
			  </div></td>
            </tr>
            <tr>
              <td>DEVELOPER</td>
              <td><strong>:</strong></td>
              <td><div align="left">
			  <input name="Developer"  value="<? echo $ii[Developer]; ?>"type="text" class="style1" id="Developer" size="12" maxlength="12">
			  </div></td>
            </tr>
            <tr>
              <td>LISTRIK</td>
              <td><strong>:</strong></td>
              <td><div align="left">
			  <input name="Listrik"  value="<? echo $ii[Listrik]; ?>"type="text" class="style1" id="Listrik" size="12" maxlength="12">
			  <input type="hidden" name="id" value="<? echo $id; ?>">
			  </div></td>
            </tr>
            <tr>
              <td>MAP</td>
              <td><strong>:</strong></td>
              <td><div align="left">
			  <input name="Map"  value="<? echo $ii[Map]; ?>"type="text" class="style1" id="Map" size="12" maxlength="12">
			  </div></td>
            </tr>
            <tr>
              <td>SEWA ALAT </td>
              <td><strong>:</strong></td>
              <td><div align="left">
			  <input name="SewaAlat" value="<? echo $ii[SewaAlat];?>" type="text" class="style1" id="SewaAlat" size="12" maxlength="12">
			  </div></td>
            </tr>
            <tr>
              <td>JS DOKTER </td>
              <td><strong>:</strong></td>
              <td><div align="left">
			  <input name="JasaDokter" value="<? echo $ii[JasaDokter]; ?>" type="text" class="style1" id="JasaDokter" size="12" maxlength="12">
			  </div></td>
            </tr>
            <tr>
              <td>JASA RUJUK </td>
              <td><strong>:</strong></td>
              <td><div align="left">
			  <input name="JasaRujuk" value="<? echo $ii[JasaRujuk]; ?>" type="text" class="style1" id="JasaRujuk" size="12" maxlength="12">
			  </div></td>
            </tr>
			<tr>
              <td>JASA RS </td>
              <td><strong>:</strong></td>
              <td><div align="left">
			  <input name="JasaRs" value="<? echo $ii[JasaRs]; ?>" type="text" class="style1"  size="12" maxlength="12">
			  </div></td>
            </tr>
			 
            <tr>
			<td colspan="3"><div align="center">
			.</div></td>
			</tr>
            <tr>
              <td colspan="3" bgcolor="#9966CC"><div align="center">
			    <input name="fg" type="submit" class="style34" value="Simpan" style="background:#336633" onClick="win();">
				
				<input type="button" name="fgfgv" value="Tutup" onClick="window.close()" class="style34" style="background:#333333">
				<input type="button" name="fgf" value="Hapus" onClick="location.href='ub4.php?NamaBiaya=<? echo $NamaBiaya; ?>&ha=<? echo $ha; ?>&id=<? echo $id; ?>';" class="style34"  style="background:#336633" >
              </div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
<?
}else{
header("Location:../keluar.php");
}
?>