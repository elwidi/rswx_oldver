<?
session_start();
include "../konek.php";
include "../salaman.php";
 
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
  $kk = mysql_fetch_array($KDJFKDJFKD); 
  $kdjfkdjkfdjkf = mysql_query("SELECT * FROM podetil77 WHERE id='$IdDetil'");
$ya = mysql_fetch_array($kdjfkdjkfdjkf);
if(!$ya[id]){
echo "DATA TIDAK DIKENAL";
}elseif(!$kk[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){

}?>