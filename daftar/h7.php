<?
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
$Alasan = $_GET["Alasan"];
$pj = strlen($Alasan);
if($pj<6){
echo "ALASAN MINIMAL 6 KARAKTER,... ALASAN ANDA ADALAH $Alasan";
}elseif($a[Level]==2){
$JamBatal=date("d.m.Y-H:i:s");
	$sim = mysql_query("INSERT INTO 
	`rwtjalan_btl` (`id`, `RegId`, `NoPasien`, `NamaPasien`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`,
	`JamMasuk`, `JamKeluar`, `Umur`, `BlnUmur`, `KodeBagian`, `Bagian`, `KodeDokter`, `NamaDokter`,
	 `KodePer`, `NamaPer`, `RujukanDari`, `Operator`, `Pembatal`, `JamBatal`, `Alasan`)
	  VALUES (NULL, '$uu[RegId]', '$uu[NoPasien]', '$uu[NamaPasien]', '$uu[TglMasuk]', '$uu[BlnMasuk]', '$uu[ThnMasuk]',
	   '$uu[JamMasuk]', '$uu[JamKeluar]', '$uu[Umur]', '$uu[BlnUmur]', '$uu[KodeBagian]',
	    '$uu[Bagian]', '$uu[KodeDokter]', '$uu[NamaDokter]', '$uu[KodePer]', '$uu[NamaPer]', '$uu[RujukanDari]',
		 '$uu[Operator]', '$a[Nama]', '$JamBatal','$Alasan')");
		  
		 
		 
	if($sim){
	   $kksm = mysql_query("DELETE  FROM rwtjalan WHERE id='$id' ");
	   header("Location:./ed_d.php");
	}
}
?>