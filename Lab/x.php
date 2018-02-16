<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ada = $_GET["ada"];
$NoBukti = $_GET["NoBukti"];
$bala = $_GET["bala"];
$NamaBiaya = $_GET["NamaBiaya"];
$ujs = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
?>
<html>
<head> <script language="JavaScript">
	<!--
// tambahan jasa onMouseover
	function movein(which,html){
	which.style.background='#00CC66';
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
	font-weight: bold;
}
.style2 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
 }
-->
</style><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xs9.php?id=<? echo $id; ?>&dimas=<? echo $dimas; ?>";
self.close();
//-->
} 
</SCRIPT>
</head>
<body <? if($dimas>0){ ?> onLoad="win44()"<? } ?>>
<div align="left">
<table border="0" cellpadding="2" cellspacing="2">
<tr>
<td width="314" colspan="3">
  <div align="left" class="style1">LIST DATA TRANSAKSI LAB
<br>
<?
echo $ii[NamaPasien]; echo "($ii[NoPasien])";
?>  </div></td>
</tr>
<tr>
<td colspan="3" valign="top">
<div align="left">
<table border="1" class="style2">
<tr>
<td width="24" bgcolor="#99CC33"><strong>NO</strong></td>
<td width="125" bgcolor="#99CC33"><strong>NO BUKTI</strong></td>
<td width="47" bgcolor="#99CC33"><div align="center"><strong>ITEM</strong></div></td>
<td width="71" bgcolor="#99CC33"><div align="right"><strong>NILAI</strong></div></td>
</tr>
<?
$nom=1;
$kfjgkjgkf = mysql_query("SELECT * FROM nolabinap WHERE IdPasien='$id'");
while($aa = mysql_fetch_array($kfjgkjgkf)){
?>
<tR  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';" onClick="location.href='x.php?id=<? echo $id; ?>&dimas=<? echo $aa[id]; ?>';">
<td><div align="center"><? echo $nom; ?></div></td>
<td><div align="left"><? $bake="LAB-$aa[id]"; 
echo $bake; ?></div></td>
<td><div align="center"><?
$ksiskds = mysql_query("SELECT COUNT(id) as jj FROM txninap2 WHERE NoBukti='$bake'");
$ada = mysql_fetch_array($ksiskds);
echo $ada[jj];
?></div></td>
<td><div align="right"><?
$ksiskds2 = mysql_query("SELECT SUM(JumlahHarga) as jj FROM txninap2 WHERE NoBukti='$bake'");
$ada2 = mysql_fetch_array($ksiskds2);
echo number_format($ada2[jj]);
$toto = $toto + $ada2[jj];
?></div></td>
</tR>

<?
$nom++; } ?>
<tR>
  <td colspan="3" bgcolor="#99CC33"><div align="center"><strong>TOTAL</strong></div></td>
  <td bgcolor="#99CC33"><div align="right"><strong>
    <?
  echo number_format($toto); 
  ?>
  </strong></div></td>
</tR></table>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>
<?
}
?>