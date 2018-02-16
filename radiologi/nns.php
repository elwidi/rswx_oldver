<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
header('Refresh: 2');
$IdBiaya  = $_GET["IdBiaya"];
$anak  = $_GET["anak"];
$NamaBiaya = $_GET["NamaBiaya"];
$ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
//
//$jujhuh = mysql_query("SELECT * FROM TarifRad WHERE id='$IdBiaya'");
//$bk = mysql_fetch_array($jujhuh);

if(!$ii[id]){
header("Location:./index.php");
}elseif($a[Level]==16){
?><html>
<head><style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style2 {font-size: 12px}
-->
</style><script language="JavaScript">
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
	</script></head>
<body>
<table border="0" cellpadding="2" cellspacing="2">
<tr valign="top">
<td><div align="left">
 <table width="573" border="0" cellpadding="2" cellspacing="2" class="style1">
<tr>
<td width="31" bgcolor="#62BE5B"><div align="center"><strong>NO</strong></div></td>
<td width="308" bgcolor="#62BE5B"><strong>NAMA BIAYA</strong></td>
<td width="52" bgcolor="#62BE5B"><div align="center"><strong>QTY</strong></div></td>
<td width="84" bgcolor="#62BE5B"><strong>HARGA</strong></td>
<td width="64" bgcolor="#62BE5B" colspan="2"><div align="right"><strong>TOTAL</strong></div></td>

</tr>
<?
$nomer=1;
 $ksjs =mysql_query("SELECT * FROM txnjalan WHERE RegId='$ii[RegId]' AND KodeKelompok='Rad' ORDER BY id desc");
while($pp = mysql_fetch_array($ksjs)){
?>
<tr>
  <td><div align="center"><? echo $nomer; ?></div></td>
  <td><div align="left"><? echo strtoupper($pp[NamaBiaya]); ?></div></td>
  <td><div align="center">1</div></td>
  <td><div align="right"><? echo number_format($pp[Harga]); ?></div></td>
  <td><div align="right"><? echo number_format($pp[JumlahHarga]);
  $tot = $tot + $pp[JumlahHarga]; 
   ?></div></td>
   <td  onClick="wCompare3WW = window.open('U.php?id=<? echo $id; ?>&IdDetil=<? echo $pp[id]; ?>', 
  'wCompare3WW', 'width=580,height=140,left=330,Top=250,resizable=yes,directories=no,status=no,toolbar=no,menubar=0,location=no,scrollbars=yes'); 
    wCompare3WW.focus();"  onMouseOver="movein(this,'');window.status='';" onMouseOut="moveout(this);window.status='';"><a href="#"   style="text-decoration:none">HAPUS</a></td>
</tr>
<?
$nomer++; } ?>
<tr>
  <td colspan="4" bgcolor="#62BE5B"><div align="center"><strong>TOTAL</strong></div></td>
  <td bgcolor="#62BE5B"><div align="right"><?
  echo number_format($tot);
  ?></div></td>
</tr>
<?

?>
</table>
 </div></td> 
</tr>
</table>
</body>
</html>
<? } ?>