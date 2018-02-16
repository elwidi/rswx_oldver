<?
session_start();
include "../konek.php";
include "../ceke.php";
$RegId = $_GET["RegId"];
$NoResep = $_GET["NoResep"];
$Persen = $_GET["Persen"];
$Rc = $_GET["Rc"];
$cedu = $_GET["cedu"];
$NamaPasien = $_GET["NamaPasien"];
$IdDepo = $_GET["IdDepo"];
$NamaObat = $_GET["NamaObat"];

 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
?>
<html>
<head>
<style type="text/css">
<!--
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style11 {font-size: 10px; font-family: Arial, Helvetica, sans-serif; }
.style15 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
.style18 {
	font-size: 14px;
	color: #FFFF66;
	font-weight: bold;
}
.style20 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #FFFF66; }
.style22 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #FFFF66; font-weight: bold; }
.style23 {
	color: #000000;
	font-weight: bold;
}
-->
</style><script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#FFCC99';
	which.style.cursor='hand'
	}
	function moveout(which){
	which.style.background=''
	}
	//-->
	</script>
</head>
<body>
<div align="center">
 <table width="411" border="0" cellpadding="2" cellspacing="2" bgcolor="#FFFFFF">
 <tr bgcolor="#000033">
 <td colspan="6" bgcolor="#FFFFFF"><div align="center" class="style23">LIST DATA OBAT</div></td>
 </tr>
 
<TR>
<td bgcolor="#000000" class="style22">NO</td>
<td width="79" bgcolor="#000000" class="style22"><span class="style22">KODE </span></td>
<td width="185" bgcolor="#000000" class="style22"><span class="style22">NAMA </span></td>
 <TD width="88" bgcolor="#000000" class="style7"><div align="right"> <span class="style22">HARGA</span></div></TD>
</TR>
<?
$no=1;
$uy = mysql_query("SELECT * FROM dataobat WHERE NamaObat Like '$NamaObat%' AND NamaObat!='' ORDER BY NamaObat LIMIT 0,100");
while($g = mysql_fetch_array($uy)){
$par = $no%2;
if($par==1){
$warna='bgcolor="#E4FEFA"';
}else{
$warna='';
}?>
 <tr   <? echo $warna; ?> valign="top"
onClick="location.href='770nj.php?Harga=<? echo $g[Tiga]; ?>&Rc=<? echo $Rc; ?>&NoResep=<? echo $NoResep; ?>&Persen=<? echo $Persen; ?>&IdDepo=<? echo $IdDepo; ?>&NamaPasien=<? echo $NamaPasien; 
?>&RegId=<? echo $RegId; ?>&IdObat=<? echo $g[id]; ?>&cegat=<? echo $jumlah_beli1; ?>';" onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" 
class="style11">
 <td><div align="center" class="style11"><? echo $no; ?></div></td>
<td  ><div align="left" class="style11"><? echo $g[KodeObat]; ?></div></td>
<td  ><div align="left" class="style11"><? echo $g[NamaObat]; ?></div></td>
<td  ><div align="right" class="style11"><? echo number_format($g[Tiga]);?></div></td>
 
  </tr>
<? $no++; } ?>
<tr bgcolor="#000033">
<td colspan="8" bgcolor="#000000">&nbsp;</td>
</tr>
</table>
</div>
</body>
</html>
<?  }else{
 header("Location:./keluar.php");
 }  ?>