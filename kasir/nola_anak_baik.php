<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$id = $_GET [ "id" ];
  $IdDokter=$_GET["IdDokter"];
  $IdDept=$_GET["IdDept"];
 if( $a[Level]==3|| $a[Level]==91  || $a[Level]==112 ||  $a[Level]==3||  $a[Level]==112 || $a[Level]==16){
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($PasieR);
$splo = explode("-",$x[transferKe]);
$Ruan = mysql_query("SELECT * FROM ruangan WHERE id='$splo[0]'");
$j = mysql_fetch_array($Ruan);

$Daat = mysql_query("SELECT id,NamaDokter,IdBagian FROM dokter WHERE id='$IdDokter'");
$sx= mysql_fetch_array($Daat);
  $ddat = mysql_query("SELECT id,NamaBagian FROM bagian WHERE id='$sx[IdBagian]'");
  $ds = mysql_fetch_array($ddat); 
 $Tgl=date("d");
	$Bln=date("m");
	$Thn=date("Y");
 	 
 		$simpan = mysql_query("INSERT INTO `datastruk` (`id`,`MstKey`, `Tgl`, `Bln`,
		 `Thn`, `NoPasien`, `NamaPasien`, `KodeDokter`, `NamaDokter`,`KodeBagian`,`NamaBagian`, `Kelas`, `Opr`) 
		 VALUES (NULL, '$x[MstKey]','$Tgl', '$Bln', '$Thn', '$x[NoPasien]', '$x[NamaPasien]',
		 '$sx[id]', '$sx[NamaDokter]','$ds[id]','$ds[NamaBagian]','$j[NamaRuangan]', '$a[Nama]')");
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