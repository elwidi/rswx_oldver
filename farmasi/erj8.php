<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==4 || $a[Level]==11){

$sia = mysql_query("DELETE FROM settingsatuan WHERE id=$dimas");
if($sia){
header("Location:./yuy.php?id=$id");
}else{
echo "PROSES DATA GAGAL,...<br>";
}
}else{
header("Location:../keluar.php");
} ?>
