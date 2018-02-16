<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$ii = mysql_fetch_array($jdmj);
if(!$ii[id]){
header("Location:../../keluar2.php");
}else{
?>
<html>
<head><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#66FF00';
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
	font-size: 14px;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style3 {
	color: #003399;
	font-weight: bold;
}
-->
</style>
</head>
<body bgcolor="#DBFFDB">
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="640" colspan="3"><div align="center" class="style1">
  <div align="left" class="style3">DETAIL DATA PASIEN RINAP<br>
      <?
echo "$ii[MstKey]<br>";
echo strtoupper($ii[NamaPasien]); echo " ($ii[NoPasien])";
?>
  </div>
</div></td>
</tr>
<tr>
  <td colspan="3">
    <div align="left">
      <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="fggf" value="Input ICD" class="style2" onClick="location.href='s.php?id=<? echo $id; ?>';" >
      <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="fggf2" value="Tambah Dokter" class="style2" onClick="location.href='s.php?id=<? echo $id; ?>&anak=fito';">
      <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="fggf22" value="transfer Kamar" class="style2" onClick="location.href='s.php?id=<? echo $id; ?>&anak=dimas';" >
      <input  onClick="location.href='s.php?id=<? echo $id; ?>&anak=iin';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="fggf222" value="Cek Total Bill" class="style2" >
      <input  onMouseOver="movein(this,'');window.status='';" 
	  onClick="location.href='s.php?id=<? echo $id; ?>&anak=sopanya';" onMouseOut="moveout(this);window.status='';" type="button" name="fggf2222" value="Ganti Dokter " class="style2" >
	    <input  onMouseOver="movein(this,'');window.status='';" 
	  onClick="location.href='s.php?id=<? echo $id; ?>&anak=berbakat';" onMouseOut="moveout(this);window.status='';" type="button" name="fggf2222" value="Pulangkan Pasien " class="style2" >
      <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="fggf22222"
	  onClick="location.href='s.php?id=<? echo $id; ?>&anak=doa';" value="Ganti Penjamin &amp; Rujukan" class="style2" >
	  <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="fggf22222"
	  onClick="location.href='s.php?id=<? echo $id; ?>&anak=ela';" value="materai " class="style2" >
<? /*	  <input type="button" name="fgkfjkf" value="Hapus" onClick="location.href='dim.php?id=<? echo $id; ?>';" class="style2" style="background:#FF9999" disabled="disabled">
     */ ?> <input  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" type="button" name="fggf22223" value="Selesai"
	   onClick="window.close()" class="style2" > 
    </div></td></tr>
<tr>
  <td colspan="3"><div align="left">
  <input type="button" name="fgfgfgf" value="Batalkan Transaksi "  onClick="location.href='s.php?id=<? echo $id; ?>&anak=taat';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" class="style2">
  </div></td>
</tr>
</table>
</div>
</body>
</html>
<? } ?>
