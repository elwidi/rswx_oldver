<?
session_start();
include "../konek.php";
include "../ceke.php";
$kjfkdjfkdjfdkj = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'");
$ha  =  mysql_fetch_array($kjfkdjfkdjfdkj);
if(!$ha[id]){
echo "DATA TIDAK LENGKAP";
}else{
$jksjsks  = mysql_query("UPDATE fakturpo SET TglTukar='$Tgl',BlnTukar='$BlnTukar',
ThnTukar='$ThnTukar' WHERE id='$dimas'");
header("Location:../keluar2.php");
} ?>