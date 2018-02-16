<?
session_start();
include "../konek.php";
include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
	$TglJam = date("d.m.Y-H:i:s");
	if($NoBukti=='xx'){
	$red = mysql_query("UPDATE  ket_hasil_lab2 SET Keterangan='$Keterangan',Opr='PK.$a[Nama]',TglJam='$TglJam' WHERE IdPasien='$fito' AND NoBukti='$NoBukti'");
	}else{
	$red = mysql_query("UPDATE  ket_hasil_lab2 SET Keterangan='$Keterangan',Opr='$a[Nama]',TglJam='$TglJam' WHERE IdPasien='$fito'
	AND NoBukti='$NoBukti'");
	}
		if($red){
?><html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ccc0xx.php?gundul=pacul&ff=2&NoBukti=<? echo $NoBukti; ?>&fito=<? echo $fito; ?>&IdPaket=<? echo $IdPaket; ?>&IdDetil=<? echo $IdDetil; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()">
	
	</body>
	</html><? 		}else{
		echo "PROSES SIMPAN DATA GAGAL,...<br>UPDATE  ket_hasil_lab2 SET Keterangan='$Keterangan',Opr='$a[Nama]',TglJam='$TglJam' WHERE IdPasien='$fito')";
		}
 
	}else{
	header("Location:../keluar2.php");
	}
 ?>