<?
session_start();
 include "../konek.php";
 include "../ceke.php";
   $ikan  = $_GET["ikan"];
 if($a[Level]==12){
  $NamaBiaya  = $_GET["NamaBiaya"];
 $Level = $_GET["Level"];
 $Hasil = $_GET["Hasil"];
 $Satuan = $_GET["Satuan"];
 $NilaiNormal = $_GET["NilaiNormal"];
 $MaxP = $_GET["MaxP"];
 $MaxW = $_GET["MaxW"];
 $MinP = $_GET["MinP"];
 $MinW = $_GET["MinW"];
 $del = $_GET["del"];
 $Urt = $_GET["Urt"];
 $IdBiaya = $_GET["IdBiaya"];
	   $simpan = mysql_query("UPDATE `sublab_2` SET  `NamaBiaya` = '$NamaBiaya',`Hasil` = '$Hasil',
`Level` = '$Level',
`Satuan` = '$Satuan',
`NilaiNormal` = '$NilaiNormal',
`MaxP` = '$MaxP',
`MaxW` = '$MaxW',
`MinP` = '$MinP',
`MinW` = '$MinW'
,
`id` = '$Urt'
 WHERE `sublab_2`.`id` ='$del'");
	   if($simpan){
	   header("Location:./buah_melon_manis.php?id=$IdBiaya");
	   }else{
		echo "SIMPAN DATA GAGAL,.............<br>";
	   }
	 
}else{
header("Location:./keluar..php");
}
?>