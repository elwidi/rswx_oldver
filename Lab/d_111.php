<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$fito = $_GET["fito"];
$ak = $_GET["ak"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
 $hsggsgs_sdk  = mysql_query("SELECT * FROM ket_hasil_lab  WHERE IdPasien='$kp[id]'");
 $osa = mysql_fetch_array($hsggsgs_sdk);
if(!$kp[id]){
//header("Location:./rambut_gondrong.php");
}
 $koka = mysql_query("SELECT JenisKelamin FROM datapasien WHERE NoPasien='$kp[NoPasien]'");
$ii_ii = mysql_fetch_array($koka);

 ?>
<html>
<head>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
-->
</style>
</head>
<body>
<div align="center">
                  <form action="fgfgf_lll.php">
                    <div align="left">
                      <table border="0" cellpadding="2" cellspacing="2">
                        <tr>
                          <td width="431" colspan="3"><div align="center" class="style2">
                            <div align="left">ISIKAN KETERANGAN <BR>HASILPEMERIKSAANLAB
                            </div>
                          </div></td>
    </tr>
                        <tr>
                          <td colspan="3"><span class="style1">.</span></td>
    </tr>
                        <tr>
                          <td colspan="3" valign="top">
                            <div align="left">
                              <table border="0" cellpadding="2" cellspacing="2" class="style1">
                                <tr valign="top">
                                  <td width="121">KETERANGAN</td>
    <TD width="3">:</TD>
    <td width="282"><div align="left">
      <textarea name="Keterangan" cols="30" rows="2" class="style1"><? echo $osa[Keterangan]; ?></textarea>
      <input type="hidden" name="fito" value="<? echo $fito; ?>">
      </div></td>
    </tr>
                                <tr>
                                  <td colspan="3">&nbsp;</td>
    </tr>
                                <tr>
                                  <td colspan="3" valign="top">
                                    <div align="left">
                                      <input name="dff" type="submit" class="style1" value="Simpan" /> 
                                      <input name="fggf" type="button" class="style1" onClick="window.close()" value="Selesai" />
                                    </div>    </td>
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

} ?>
