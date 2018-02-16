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
	font-size: 12px;
	color: #000000;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 17px;
	color: #000000;
}
.style3 {color: #000000}
.style4 {color: #FFFFFF}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#CCCC33';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body alink="#CCCCCC" link="#000000" vlink="#000000">

<div align="left">
  <table border="0" cellpadding="2" cellspacing="2"  bgcolor="#FFFFFF">
    <tr bgcolor="#58BB4F"class="style1">
<td width="1169" colspan="3" ><img src="../../gambar/depan.png"></td>
</tr>
    <TR>
      <TD colspan="3"><span class="style1"><a href="bisa_saja_ya.php" style="text-decoration:none"> KEMBALI</a> || 
      <a href="se.php" style="text-decoration:none">INPUT DATA KELAS</a> </span></TD>
    </TR>
    <tr>
      <td colspan="3" valign="top">
        <div align="left">
          <table border="1">
            <tr class="style1">
              <td width="24" bgcolor="#000000"><span class="style4">NO</span></td>
    <td width="44" bgcolor="#000000"><span class="style4">KODE</span></td>
    <td width="206" bgcolor="#000000"><span class="style4">NAMA KELAS</span></td>
    <td width="62" bgcolor="#000000"><div align="right" class="style4">TARIF</div></td>
    <td width="66" bgcolor="#000000"><div align="right" class="style4">JASMED</div></td>
    <td width="77" bgcolor="#000000"><div align="right" class="style4">JAS SARANA</div></td>
    <td width="63" bgcolor="#000000"><div align="right" class="style4">JAS PER</div></td>
    <td width="129" bgcolor="#000000"><span class="style4">OPR</span></td>
    <td width="67" bgcolor="#000000"><span class="style4">TGL</span></td>
    </tr>
            <?
$ke=1;
$dkfjkdjfd = mysql_query("SELECT  * FROM kelas order by NamaKelas,KodeKelas LIMIT 0,100");
while($dx =  mysql_fetch_array($dkfjkdjfd)){
?>
            <tr  onClick="location.href='mas_budi.php?id=<? echo $dx[id]; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style1">
              <td><div align="center"><? echo $ke; ?></div></td>
      <td><div align="left"><? echo $dx[KodeKelas]; ?></div></td>
      <td><div align="left"><? echo strtoupper($dx[NamaKelas]); ?></div></td>
      <td><div align="right"><? echo number_format($dx[Tarif]); ?></div></td>
      <td><div align="right"><? echo number_format($dx[JasaMedik]); ?></div></td>
      <td><div align="right"><? echo number_format($dx[JasaSarana]); ?></div></td>
      <td><div align="right"><? echo number_format($dx[JasaPerawat]); ?></div></td>
      <td><div align="left"><? echo strtoupper($dx[Opr]); ?></div></td>
      <td><div align="left"><? echo strtoupper($dx[TglJam]); ?></div></td>
    </tr>
            <? $ke++; } ?>
            <tr class="style1">
              <td colspan="9" bgcolor="#000000">&nbsp;</td>
      </tr>
          </table>
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