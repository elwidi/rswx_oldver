<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$iin = $_GET["iin"];
$id = $_GET [ "id" ];
  $IdDokter=$_GET["IdDokter"];
  $IdDept=$_GET["IdDept"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==16){
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
if(!$x[id]){
header("Location:./daftar.php");
}
$Daat = mysql_query("SELECT id,NamaDokter FROM dokter WHERE id='$IdDokter'");
$sx= mysql_fetch_array($Daat);
  $ddat = mysql_query("SELECT id,NamaBagian FROM bagian WHERE id='$IdDept'");
  $ds = mysql_fetch_array($ddat); 
 $Tgl=date("d");
	$Bln=date("m");
	$Thn=date("Y");
 	 
 		$simpan = mysql_query("INSERT INTO `datastruk` (`id`,`MstKey`, `Tgl`, `Bln`,
		 `Thn`, `NoPasien`, `NamaPasien`, `KodeDokter`, `NamaDokter`,`KodeBagian`,`NamaBagian`, `Kelas`, `Opr`) 
		 VALUES (NULL, '$x[MstKey]','$Tgl', '$Bln', '$Thn', '$x[NoPasien]', '$x[NamaPasien]',
		 '$sx[id]', '$sx[NamaDokter]','x','Radiologi','$x[Kelas]', '$a[Nama]')");
		if($simpan){
		header("Location:./sabar_itu_baik.php?id=$id");
		}else{
		echo "SIMPAN DATA GAGAL,.................<br>";
		?>
 		<? 
		} 
	 
}else{
//header("Location:./keluar.php"); 
}  
 ?>