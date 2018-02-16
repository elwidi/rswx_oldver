<?
session_start();
 include "../konek.php";
 include "../salaman.php";
 $NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
 
$gatr = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
$as = mysql_fetch_array($gatr);
if($as[id]!=$id){
 header("Location:./rambut_gondrong.php");
}
	if($NamaBiaya==''){
	echo "ANDA BELUM ISIKAN NAMA BIAYA,.................<br>";
	}elseif($Kelompok==''){
	echo "HARAP TENTUKAN KELOMPOKNYA ,.........................<br>";
	}else{
  $simpan = mysql_query("INSERT INTO `sublab_2` (`id`, `IdBiaya`, `Kelompok`, `NamaBiaya`,
	    `Hasil`, `Level`, `Satuan`, `NilaiNormal`, `MaxP`, `MaxW`, `MinP`, `MinW`) VALUES ('', 
		'$KeyIDX', '$Kelompok', '$NamaBiaya', '$Hasil', '$Level', '$Satuan', 
	   '$NilaiNormal', '$MaxP', '$MaxW', '$MinP', '$MinW')");
	 
	   if($simpan){
	  header("Location:./bahan_bakar_airx.php?id=$id");
	   }else{
		echo "SIMPAN DATA GAGAL,.............<br>";
	   }
	}
}else{
header("Location:./keluar..php");
}
?>