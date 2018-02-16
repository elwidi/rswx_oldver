<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$id = $_GET["id"];
$Tarif = $_GET["Tarif"];
$Kel = $_GET["Kel"];
$KodeKelas = $_GET["KodeKelas"];
$Keterangan = $_GET["Keterangan"];
$Lantai = $_GET["Lantai"];
$iki = $_GET["iki"];
$ela = $_GET["ela"];
$KodeKelompok = $_GET["IdKel"];

$pes = explode("/",$Keterangan);
$Ket = $pes[0]."/"."LAST UPDATE ".date("d.m.Y.H:i:s")." - OLEH : $a[Nama]"; 
$NamaRuangan = $_GET["NamaRuangan"];
$jshdjshdjsdds898898_ksjdksjd = mysql_query("SELECT NamaKelas,KodeKelas FROM kelas WHERE KodeKelas='$Kel'");
$eve = mysql_fetch_array($jshdjshdjsdds898898_ksjdksjd);
$bubu = date("d-m-Y.H:i:s");
$upda = mysql_query("UPDATE ruangan SET Lantai='$Lantai',NoRuangan='$NoRuangan', NamaRuangan='$NamaRuangan',KodeKelas='$eve[KodeKelas]',NamaKelas='$eve[NamaKelas]', Opr='$a[Nama]',TglJam='$bubu',RpHari='$Tarif',Keterangan='$Keterangan',NoBed='$NoBed'
,KodeKelompok='$KodeKelompok' WHERE id='$id' ");
//$ksik = mysql_query("UPDATE kelas SET Tarif='$Tarif' WHERE KodeKelas='$KodeKelas'");
     
	 header("Location:./bisa_saja_ya.php?iki=&makan=&ela=$id");
}else{
echo "MAAF ADA ADALAH $a[Nama] TIDAK BERHAK MENGUPDATE,...";
}
?>