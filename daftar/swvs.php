<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$tgl1 = $_GET["tgl1"];
$tgl2 = $_GET["tgl2"];
$bln1 = $_GET["bln1"];
$bln2 = $_GET["bln2"];
$thn1 = $_GET["thn1"];
$thn2 = $_GET["thn2"];
$mbak = $_GET["mbak"];
$mas = $_GET["mas"];
$IdAkunt = $_GET["IdAkunt"];
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="4e1_0ddde.php?IdBagian=<? echo $IdBagian; ?>&IdDokter=<? echo $IdDokter; ?>&mbak=<? echo $mbak; ?>&tgl1=<? echo $tgl1;?>&bln1=<? echo $bln1; ?>&thn1=<? echo $thn1; ?>&tgl2=<? echo $tgl2; ?>&bln2=<? echo $bln2; 
?>&thn2=<? echo $thn2; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>