<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($NamaKot==''){
echo "HARAP TENTUKAN NAMA KOTA,....";
}elseif($NamaKec==''){
echo "HARAP TENTUKAN NAMA KECAMATAN,...";
}elseif($NamaKel==''){
echo "HARAP TENTUKAN NAMA KELURAHAN";
}elseif($Pro==0){
echo "HARAP TENTUKAN NAMA PROPINSI";
}else{
$kkjkdd  = mysql_query("SELECT NamaProp FROM prop WHERE id='$Pro'");
$bv = mysql_fetch_array($kkjkdd);
//echo $bv[NamaProp];
$TglJam=date("d.m.Y-H:i:s");
	$sisi = mysql_query("INSERT INTO 
	`kota` (`id`, `Propinsi`, `Kota`, `Kecamatan`, `Kelurahan`, `KodePos`, `Rw`, `Rt`, `Jalan`, `Opr`, `TglJam`)
	 VALUES (NULL, '$bv[NamaProp]', '$NamaKot', '$NamaKec', '$NamaKel', '$KodePos', '$Rw','$Rt', '$Jalan', '$a[User]', '$TglJam')");
	header("Location:../keluar2.php");
}
 ?>
