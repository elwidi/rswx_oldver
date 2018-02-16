<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$TglJam=date("d.m.Y-H:i:s");
if($id>0){
$odapa  = mysql_query("UPDATE kecamatan SET NamaKec='$NamaKec' WHERE id='$id'");
}else{
$odapa  = mysql_query("INSERT INTO `kecamatan` (`id`, `NamaKec`, `Opr`, `TglJam`) VALUES
 (NULL, '$NamaKec', '$a[User]', '$TglJam')");
}
header("Location:./c3ws2.php?id=$id&mas=hari");

?>