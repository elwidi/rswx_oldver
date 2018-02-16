<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
$hajahajha = mysql_query("SELECT * FROM NoRadBaru WHERE NoRad='$Nomer'");
$gp = mysql_fetch_array($hajahajha);
if($gp[id]){
echo "Nomer Ini Sudah Terpakai";
}elseif(!$hh[id]){
echo "Record Set Tidak Dikenal";
}else{
$NoRad = $_GET["Nomer"];
$OprTglJam =$a[id]."-".date("d-m-Y.H:i:s");
	$oksk = mysql_query("INSERT INTO `NoRadBaru`
	 (`id`, `IdRj`, `NoRad`, `OprTglJam`) VALUES
	(NULL, '$id', '$NoRad', '$OprTglJam')");
	$jahajh = mysql_query("UPDATE `noradbaru` SET `NoRad`='$NoRad',`OprTglJam`='$SERT INTO `NoRadBaru`
	 (`id`, `IdRj`, `NoRad`, `OprTglJam' WHERE (`IdRj`='$id')");
	header("Location:./au.php?id=$id");
}
?>