<?php 
session_start();
include "../konek.php";
include "../ceke.php";$NamaBiaya = $_GET["NamaBiaya"];
 $ikan  = $_GET["ikan"];
 if(s){    $dul= mysql_query("DELETE FROM sublab WHERE id='$del'");
if($dul){
 header("Location:./buah_melon_manis.php?id=$klw");
}else{
echo "SIMPAN DATA GAGAL,..............<br>";
}
}else{
header("Location:./keluar.php");
}
?>