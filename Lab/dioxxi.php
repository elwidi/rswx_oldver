<?
session_start();
include "../konek.php";
include "../ceke.php";
 $fito = $_GET["fito"];
$Dus = $_GET["Dus"];
$Keterangan= $_GET["Keterangan"];
$pjk = strlen($Keterangan);
if($pjk<=5){
echo "KETERANGAN HARAP DI ISI MINIMAL 5 KARAKTER,...<br>";
}else{
	if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
	$TglJam = date("d.m.Y-H:i:s");
	if($NoBukti=='xx'){
	$red = mysql_query("INSERT INTO `ket_hasil_lab2` (`id`, `IdPasien`, `Keterangan`, `Opr`, `TglJam`, `NoBukti`) 
	VALUES (NULL, '$fito', '$Keterangan','PK.$a[Nama]', '$TglJam','$NoBukti')");
	
	}else{
	$red = mysql_query("INSERT INTO `ket_hasil_lab2` (`id`, `IdPasien`, `Keterangan`, `Opr`, `TglJam`, `NoBukti`) 
	VALUES (NULL, '$fito', '$Keterangan','$a[Nama]', '$TglJam','$NoBukti')");
 	}
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="juju009_0.php?&gundul=pacul&ff=2&IdPaket=<? echo $IdPaket; ?>&IdDetil=<? echo $IdDetil; ?>&fito=<? echo $fito; ?>&NoBukti=<? echo $NoBukti;?>";
 self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()">
	
	</body>
	</html>
	<? 
		/*
		if($red){
header("Location:./suitinap.php?NoBukti=$NoBukti&fito=$fito&gundul=pacul&ff=2");
		}else{
		echo "PROSES SIMPAN DATA GAGAL,...<br>";
		}
  */
	}else{
	header("Location:../keluar2.php");
	}
} //end of keterangan
?>