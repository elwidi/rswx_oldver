<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11){
$teka = explode("-",$hh[Operator]);
$raka = "$teka[0]-$a[id]";
if($aka==2){
 $upda = mysql_query("UPDATE rwtjalan SET JamKeluar='0',Operator='$raka' WHERE id='$id'");
}else{
 $upda = mysql_query("UPDATE rwtjalan SET JamKeluar='y',Operator='$raka' WHERE id='$id'");
}
echo "UPDATE rwtjalan SET JamKeluar='0',Operator='$raka' WHERE id='$id' - $teka[0]";
if($upda){
 header("Location:./wahit.php?id=$id");
}else{
echo "PROSES DATA GAGAL,...<br>";
}
}else{
header("Location:../keluar.php");
}
?>