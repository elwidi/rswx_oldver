<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
$ada = mysql_query("SELECT * FROM labumum WHERE id='$fito'");
$kp = mysql_fetch_array($ada);
 
 
 $TglJam=date("d.m.Y-H:i:s");
 $IdPasien="LR.$fito";
 $n=mysql_query("INSERT INTO  `ket_hasil_lab` (`id`, `IdPasien`, `Keterangan`, `Opr`, `TglJam`) 
 VALUES (NULL, '$IdPasien', '$Keterangan', '$a[Nama]', '$TglJam')");
 if(!$n){
 $kdjf = mysql_query("UPDATE ket_hasil_lab SET Keterangan='$Keterangan',Opr='$a[Nama]',TglJam='$TglJam'
 WHERE IdPasien='$IdPasien'");
 }
 
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ku_f.php?fito=<? echo $fito; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body  onload="win44()">
</body>
</html>