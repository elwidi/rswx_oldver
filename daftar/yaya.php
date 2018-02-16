<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$TglJam=date("d.m.Y-H:i:s");
if($id>0){
$odapa  = mysql_query("UPDATE kelurahan SET NamaKel='$NamaKel' WHERE id='$id'");
}else{
$odapa  = mysql_query("INSERT INTO `kelurahan` (`id`, `NamaKel`, `Opr`, `TglJam`) VALUES
 (NULL, '$NamaKel', '$a[User]', '$TglJam')");
}
header("Location:./c3ws.php?id=$id&mas=hari");

?>