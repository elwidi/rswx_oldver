<?
session_start();
include "../konek.php";
include "../salaman.php";
if($a[Level]==4 || $a[Level]==91 || $a[Level]==11){

$TglJam=date("d:m:Y-H:i:s");
	$sim = mysql_query("UPDATE  `Satuan` SET `NamaSatuan` = '$NamaSatuan',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE  `id` ='$id'");
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ce_Dd.php";
self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()">
	
	</body>
	</html>
	<?
}
?>