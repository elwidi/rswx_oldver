<?
session_start();
include "../konek.php";
include "../ceke.php";
$RegId = $_GET["RegId"];
$id  = $_GET["id"];
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
 $dul = mysql_query("SELECT *  FROM  jual_ob_rl_tmp  WHERE id=$id");
$as = mysql_fetch_array($dul);
?>
<html>
<head>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style3 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style4 {font-size: 12px}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style7 {
	color: #000000;
	font-weight: bold;
}
.style8 {color: #FFFFFF}
-->
</style>
</head>
<body alink="#ffffff" vlink="#ffffff" link="#ffffff">
<div  align="center">
<form action="deleup.php">
<table border="0" cellpadding="2" cellspacing="2">
<tr bgcolor="#000099">
<td colspan="3"><div align="center" class="style7">
<span class="style8">YAKIN DATA INI AKAN DIHAPUS  ?</span><br>
<a href="deleup.php?RegId=<? echo $RegId; ?>&id=<? echo $id; ?>" style="text-decoration:none ">YA</a> / <a href="tampil_obrl.php?NoResep=<? echo $NoResep; ?>&RegId=<? echo $RegId; ?>" style="text-decoration:none ">TIDAK</a></div></td>
<input type="hidden" name="hari" value="sabar">
</tr>
<tr>
<td>REC</td><td>:</td><td><div align="left"><? echo "#$as[id]"; ?></div></td>
</tr>
 <TR>
<td width="187"><span class="style3">KODE OBAT</span></td>
<td width="11"><span class="style6">:</span></td>
<td width="155"><div align="left" class="style1 style4"><? echo $as[KodeObat]; ?></div></td>
</TR>
<tr>
<td><span class="style3">NAMA OBAT</span></td>
<td><span class="style6">:</span></td>
<td><div align="left" class="style3"><? echo strtoupper($as[NamaObat]); ?></div></td>
</tr>
<tr>
<td><span class="style3">QTY</span></td>
<td><span class="style6">:</span></td>
<td><div align="left" class="style3">
<input type="text" name="Qty" maxlength="6" size="6" value="<? echo $as[Qty]; ?>" class="style3">
<input type="hidden" name="id" value="<? echo $id; ?>">
<input type="hidden" name="RegId" value="<? echo $RegId; ?>">
</div></td>
</tr>
<tr>
<td><span class="style3">HARGA</span></td>
<td><span class="style6">:</span></td>
<td><div align="left" class="style3"><? echo number_format($as[Harga]); ?></div></td>
</tr>
<tr bgcolor="#000099">
<td colspan="3"><div  align="left">
<input  type="submit" value="Update" name="fgf" class="style3"> 
</div></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<? 
 }else{
header("Location:./keluar.php");
} ?>