<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $NamaBiaya = $_GET["NamaBiaya"];
$id = $_GET["id"];
$IdBiaya = $_GET["IdBiaya"];
$KodeDokter=$_GET["KodeDokter"];
$jam = date("H:i:s");
$KodeDokter = $_GET["KodeDokter"];
 
$DtPsn = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$a2 = mysql_fetch_array($DtPsn);
    $Biaya = mysql_query("SELECT * FROM tabelbiayax WHERE id='$IdBiaya'");
   $z = mysql_fetch_array($Biaya);
  $paket= "$re[KodeDokter]-$z[KodeKelompok]"; 
  if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
  $Qty=1;
$Total=$z[Tiga]*$Qty;
$TglJam=date("d.m.Y-H:i:s");
  $simpan = mysql_query("INSERT INTO  `txnjalan2` (`id`, `RegId`, `NoPasien`, `NamaPasien`, `IdDokter`, `NamaDokter`, `IdPoli`, `NamaPoli`, `IdBiaya`, `NamaBiaya`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`, `Qty`, `Harga`, `Total`,`JasaDokter`,`JasaRujukan`, `Insentif`,
   `JasaDrSpc`, `JasaPerawat`, `Listrik`, `JasaRs`, `TglJam`, `Opr`) 
  VALUES (NULL, '$a2[RegId]', '$a2[NoPasien]', '$a2[NamaPasien]',
   '$a2[KodeDokter]', '$a2[NamaDokter]', '$a2[KodeBagian]', '$a2[Bagian]', '$z[id]', '$z[NamaBiaya]', '$a2[TglMasuk]',
    '$a2[BlnMasuk]', '$a2[ThnMasuk]', '$Qty', '$z[Tiga]','$Total', '$z[JasaDokter]','$z[JasaRujukan]','$z[Insentif]', '$z[JasaDrSpc]', '$z[JasaPerawat]', '$z[Listrik]', '$z[JasaRs]',
	 '$TglJam', '$a[Nama]')");
	 
 //}
  
}else{
header("Location:../keluar2.php");
}
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="k0_00.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
