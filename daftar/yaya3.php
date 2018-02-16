<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$TglJam=date("d.m.Y-H:i:s");
if($id>0){
$odapa  = mysql_query("UPDATE kota SET NamaKot='$NamaKot' WHERE id='$id'");
}else{
$odapa  = mysql_query("INSERT INTO `kota` (`id`, `NamaKot`, `Opr`, `TglJam`) VALUES
 (NULL, '$NamaKot', '$a[User]', '$TglJam')");
}
header("Location:./c3ws3.php?id=$id&mas=sabar");

?>