<?
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ujdjj = mysql_query("SELECT * FROM rwtjalan_btl WHERE id='$id'");
$un = mysql_fetch_array($ujdjj);
if(!$un[id]){
header("Location:../keluar2.php");
}else{
//
$kdkdkd = mysql_query("SELECT * FROM datapasien WHERE NoPasien='$un[NoPasien]'");
$aa = mysql_fetch_array($kdkdkd);
//
echo "INSERT INTO `rwtjalan` (`id`, `RegId`, `NoPasien`, `NamaPasien`, `TglMasuk`, 
	`BlnMasuk`, `ThnMasuk`, `JamMasuk`, `JamKeluar`, `Umur`, `BlnUmur`, `KodeBagian`, 
	`Bagian`, `KodeDokter`, `NamaDokter`, `KodePer`, `NamaPer`, `RujukanDari`, `Operator`,
	 `Txn`, `Obat`, `JenisKelamin`, `LB`, `TypeJam`)
	  VALUES (NULL, '$un[RegId]', '$un[NoPasien]', '$un[NamaPasien]', '$un[TglMasuk]', '$un[BlnMasuk]', '$un[ThnMasuk]',
	   '$un[JamMasuk]', '$un[JamKeluar]', '$un[Umur]', '$un[BlnUmur]', '$un[KodeBagian]', '$un[Bagian]', '$un[KodeDokter]', '$un[NamaDokter]',
	    '$un[KodePer]', '$un[NamaPer]', '$un[RujukanDari]', '$un[Operator]', '', '', '$aa[JenisKelamin]', '$un[LB]', '$un[TypeJam]')"; 
	$uj = mysql_query("INSERT INTO `rwtjalan` (`id`, `RegId`, `NoPasien`, `NamaPasien`, `TglMasuk`, 
	`BlnMasuk`, `ThnMasuk`, `JamMasuk`, `JamKeluar`, `Umur`, `BlnUmur`, `KodeBagian`, 
	`Bagian`, `KodeDokter`, `NamaDokter`, `KodePer`, `NamaPer`, `RujukanDari`, `Operator`,
	 `Txn`, `Obat`, `JenisKelamin`, `LB`, `TypeJam`)
	  VALUES (NULL, '$un[RegId]', '$un[NoPasien]', '$un[NamaPasien]', '$un[TglMasuk]', '$un[BlnMasuk]', '$un[ThnMasuk]',
	   '$un[JamMasuk]', '$un[JamKeluar]', '$un[Umur]', '$un[BlnUmur]', '$un[KodeBagian]', '$un[Bagian]', '$un[KodeDokter]', '$un[NamaDokter]',
	    '$un[KodePer]', '$un[NamaPer]', '$un[RujukanDari]', '$un[Operator]', '', '', '$aa[JenisKelamin]', '$un[LB]', '$un[TypeJam]')");
		if($uj){
		$del = mysql_query("DELETE FROM  rwtjalan_btl WHERE id='$id'");
$kdikd = mysql_query("SELECT id FROM rwtjalan WHERE RegId='$un[RegId]'");
$y = mysql_fetch_array($kdikd);
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="3e7.php?id=<? echo $y[id]; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
<?
		}
}
?> 