<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$JmlRacik = $_GET["JmlRacik"];
$id = $_GET["id"];
$aku = $_GET["aku"];
$Rc = $_GET["Rc"];
$NoResep = $_GET["NoResep"];
$Nama = $_GET["Nama"];

if($id!=''){
$umbu = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
// header("Location:./dodol.php");
}
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
$simp = mysql_query("INSERT INTO `racik` (`id`, `NoResep`, `IdPas`, `persen`, `Nama`) 
VALUES (NULL,'$NoResep', '$id', '$JmlRacik','$Nama')");
if($simp){
header("Location:./wahit.php?NoResep=$NoResep&id=$id&aku=$aku&Rc=$Rc");
}else{
echo "SIMPAN DATA GAGAL,.....INSERT INTO `racik` (`id`, `NoResep`, `IdPas`, `persen`) VALUES (NULL,'$NoResep', '$id', '$JmlRacik')<br>";
}
}else{
header("Location:./keluar.php");
}
 ?>
