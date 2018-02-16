<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$dia = $_GET["dia"];
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="w.php?IdPasien=<? echo $IdPasien; ?>&dia=<? echo $dia; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

<div align="center">
  <table  border="0" cellpadding="2" cellspacing="2" >
    <tr  bgcolor="#59BA54">
      <td width="582"  colspan="3" bgcolor="#0000FF"><div align="left" class="style1">
      <div align="center" class="style4">DETAIL DATA PASIEN<br />
          <?
echo "$uu[RegId]";
?>
      </div>
    </div></td>
    </tr>
    <tr>
      <td height="57" colspan="3"><div align="center">
<?
echo strtoupper($uu[NamaPasien]);
?><br>
<?
echo " ( $uu[NoPasien] ) ";
?>
      </div></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#0000FF"><div align="center">
      <span class="style2">.  </span>
        <input name="fgf" type="button" class="style2" onClick="location.href='d_Dd.php?dia=hari&id=<? echo $id; ?>';" value="Batalkan Txn">
        <input name="fgf" type="button" class="style2" onClick="location.href='d_Dd.php?id=<? echo $id; ?>';" value="Cetak Ulang Struk">
        <input name="fgf" type="button" class="style2"  onClick="location.href='d_Dd.php?dia=hah&id=<? echo $id; ?>';" value="Input Icd">
        <input type="button" name="ffgfg" value="Rujuk Ke T4Lain" onClick="location.href='d_Dd.php?dia=doa&id=<? echo $id; ?>';" class="style2" style="background:#FF6699">
		<input name="fgf" type="button" class="style2" onClick="window.close()" value="Selesai">
      </div></td>
    </tr>
    <tr>
      <td colspan="3" bgcolor="#FFCC33"><div align="center">
	   <input name="fgf" type="button" class="style2"  onClick="location.href='d_Dd.php?dia=hah&id=<? echo $id; ?>';" value="Tentukan Penanggung Jwab">
	  <input name="FGFG" type="button" class="style2" onClick="location.href='d_Dd.php?dia=baik&id=<? echo $id; ?>';" value="Update Data Penjamin/Rujukan/Dokter/Kartu">
	  </div></td>
    </tr>
  </table>
</div>
</body>
</html>