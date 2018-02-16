<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$Keterangan = $_GET["Keterangan"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
if(!$x[id]){
header("Location:../../keluar2.php");
}else{
$TglJam=date("d-m-Y.H:i:s");
  
	$sim = mysql_query("INSERT INTO  `materai` (`id`, `IdPasien`, `NoPasien`,  `NamaPasien`, `Keterangan`, `Opr`, `TglJam`) 
	VALUES (NULL,  '$x[id]', '$x[NoPasien]', '$x[NamaPasien]', '$Keterangan','$a[Nama]','$TglJam')");
	  
	if($sim){
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="3ea.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body  onload="win44()"></body>
	</html>
	<?
	}
}
?>
