<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$id = $_GET["id"];
$NoResep = $_GET["NoResep"];
$IdAsli = $_GET["IdAsli"];
$Rc=$_GET["Rc"];
$aku = $_GET["aku"];
$JmlRacik = $_GET["JmlRacik"];
if($id!=''){
$umbu = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$ii = mysql_fetch_array($umbu);
if(!$ii[id]){
 header("Location:./dodol.php");
}
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
$simp = mysql_query("UPDATE racik SET persen='$JmlRacik',Nama='$Nama' WHERE id='$IdAsli'");
if($simp){
header("Location:./wahit.php?id=$id&aku=$aku&Rc=$Rc&NoResep=$NoResep");
}else{
echo "SIMPAN DATA GAGAL,.....<br>";
}
}else{
header("Location:./keluar.php");
}
 ?>
