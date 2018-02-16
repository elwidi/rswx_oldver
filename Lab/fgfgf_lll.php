<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$fito = $_GET["fito"];
$Keterangan = $_GET["Keterangan"];
$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
 $hsggsgs_sdk  = mysql_query("SELECT * FROM ket_hasil_lab  WHERE IdPasien='$kp[id]'");
 $osa = mysql_fetch_array($hsggsgs_sdk);
   $TglJam = date("d.m.Y-H:i:s");
 $isk = mysql_query("INSERT INTO  `ket_hasil_lab` (`id`, `IdPasien`, `Keterangan`, `Opr`, `TglJam`) 
 VALUES (NULL, '$fito', '$Keterangan', '$a[Nama]', '$TglJam')");
 if(!$isk[id]){
 $simp = mysql_query("UPDATE   ket_hasil_lab SET Keterangan='$Keterangan',Opr='$a[Nama]',TglJam='$TglJam' WHERE IdPasien='$fito'");
 }
 ?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="oioi_00.php?fito=<? echo $fito; ?>&ak=1";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html>
