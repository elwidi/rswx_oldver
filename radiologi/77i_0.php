<?
session_start();
 include "../konek.php";
 include "../ceke.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
$Bus = mysql_query("SELECT * FROM labumum WHERE id=$hari");  
 }else{
$Bus = mysql_query("SELECT * FROM txnrad WHERE id=$hari");
}
$x = mysql_fetch_array($Bus);
//
if($fila=='dimas'){
$kdjfkdjkdf = mysql_query("SELECT * FROM dokter WHERE id='$IdRujuk'");
}else{
$kdjfkdjkdf = mysql_query("SELECT * FROM rujukan WHERE id='$IdRujuk'");
}
$dapat = mysql_fetch_array($kdjfkdjkdf);

//
if(!$dapat[id]){
header("Location:../keluar2.php");
}elseif(!$x[id]){
header("Location:../keluar2.php");
}else{
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
	if($fila=='dimas'){
	$upda = mysql_query("UPDATE labumum  SET KodeDokter='$IdRujuk',NamaDokter='$dapat[NamaDokter]' WHERE id=$hari");
	}else{
	$upda = mysql_query("UPDATE labumum  SET KdRujukan='$IdRujuk',NamaPerujuk='$dapat[NamaRujukan]' WHERE id=$hari");
	} 	
}else{
	echo "dd $a[Level] -- $a[id]";
	if($fila=='dimas'){
	$upda = mysql_query("UPDATE txnrad  SET KodeDokter='$IdRujuk',NamaDokter='$dapat[NamaDokter]' WHERE id=$hari");
	}else{
	$upda = mysql_query("UPDATE txnrad  SET KdRujukan='$IdRujuk',NamaPerujuk='$dapat[NamaRujukan]' WHERE id=$hari");
	} 	
}
}

?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c4e_Dd.php?hari=<? echo $hari; ?>&xe=<? echo $xe; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>