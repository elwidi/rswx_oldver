<?
session_start();
 include "../konek.php";
 include "../ceke.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12 ){
header("Location:../Lab/nasi_kucing.php?fito=ok&xe=$xe&hari=$hari");
}else{
header("Location:./nasi_kucing.php?hari=$hari");
}
?>