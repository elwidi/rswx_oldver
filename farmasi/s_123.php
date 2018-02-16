<?
session_start();
include "../konek.php";
include "../salaman.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
if($kk[Stak]==2){
header("Location:./mana_d.php?id=$id");
}elseif(!$kk[id]){
header("Location:./index.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){
if($hari=='sabar'){
echo "UPDATE polog77 SET Materai=$Materai WHERE id='$id'"; 
	$upda = mysql_query("UPDATE polog77 SET Materai=$Materai WHERE id='$id'");
}else{
	$upda = mysql_query("UPDATE polog77 SET Ppn=$Ppn WHERE id='$id'");
}	
header("Location:./x23.php?id=$id");
}
?>