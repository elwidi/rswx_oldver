<?
session_start();
include "../konek.php";
include "../salaman.php";
 $KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD); 
if(!$kk[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){

 
$dfd = mysql_query("DELETE FROM podetil77 WHERE id='$IdDetil'");
 		header("Location:./c233.php?id=$id&NamaBarang=$NamaBarang&asa=$asa&iin=$iin");

}?>
