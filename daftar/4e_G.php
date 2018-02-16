<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$kdjkl = mysql_query("SELECT * FROM rwtjalan_pesan WHERE id='$id'");
$bb = mysql_fetch_array($kdjkl);
if(!$bb[id]){
header("Location:../keluar2.php");
}else{
$RegId= "P.$bb[RegId]";
$Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
$JamMasuk=date("H:i:s");
	$isi = mysql_query("INSERT INTO  `rwtjalan` (`id`, `RegId`, `NoPasien`, `NamaPasien`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`, 
	`JamMasuk`, `JamKeluar`, `Umur`, `BlnUmur`, `KodeBagian`, `Bagian`, `KodeDokter`, `NamaDokter`, `KodePer`, `NamaPer`, `RujukanDari`, `Operator`, `Txn`, `Obat`, `JenisKelamin`, `LB`, `TypeJam`) VALUES (NULL, '$RegId.', '$bb[NoPasien]', '$bb[NamaPasien]', '$Tgl', '$Bln', '$Thn', 
	'$JamMasuk', '0', '$bb[Umur]', '$bb[BlnUmur]', '$bb[KodeBagian]', '$bb[Bagian]', '$bb[KodeDokter]', '$bb[NamaDokter]', '$bb[KodePer]',
	 '$bb[NamaPer]', '$bb[RujukanDari]', '$bb[Operator]', ' ', ' ', '$bb[JenisKelamin]', '$bb[LB]', '$bb[TypeJam]')");
	 if($isi){
	 $jjj = mysql_query("DELETE FROM rwtjalan_pesan WHERE id='$id'");
	 if($jjj){
	 $ksksjk = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$RegId.'");
	 $ik = mysql_fetch_array($ksksjk);
	/// header("Location:./struk_pas.php?id=$ik[id]");
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="u7u.php?id=<? echo $ik[id]; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onLoad="win44()">
	 
	</body>
	</html>
	<? 
	 }
	 }
}?>
