<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_1 WHERE id='$id' AND IdOpr='$a[id]'");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
//
$ldjfd090df = mysql_query("SELECT * FROM oder_1detil WHERE id='$IdDetil'");
$yh = mysql_fetch_array($ldjfd090df);
if(!$yh[id]){
echo "RECORD SET DATA TIDAK DIKENAL,...........";
}elseif(!$ok[id]){
echo "MAAF DATA INI TIDAK SESUAI MILIK ANDA ...";
}else{
?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #003333;
}
-->
</style>

<span class="style1">YAKIN DATA INI AKAN DIHAPUS?</span><br />
<font color="#990000"><?
echo $yh[NamaObat]; echo "<br> QTY $yh[Qty] $yh[NamaSatuan]";
?>.<br>
<input type="button" name="ffg" value="YA" onclick="location.href='d98d.php?id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>';" /> || 
<input type="button" name="ffgf" value="TIDAK" onclick="location.href='../keluar2.php';" />
<?
}
?>