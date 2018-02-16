<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
$del=mysql_query("DELETE FROM txnjalan WHERE id='$iin'");
if($del){
header("Location:./milimeter.php?RegId=$RegId");
}else{
echo "HAPUS DATA GAGAL,......................<br>";
}
}else{
header("Location:./keluar.php");
} 
?>