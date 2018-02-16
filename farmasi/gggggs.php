<?
session_start();
include "../konek.php";
include "../salaman.php";
$KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$IdPo'"); 
$kk = mysql_fetch_array($KDJFKDJFKD); 
if($kk[Stak]==2){
header("Location:./mana_d.php?id=$id");
}elseif(!$kk[id]){
header("Location:./index.php");
}elseif($a[Level]==4 || $a[Level]==91 || $a[Level]==11){
if($hari=='sabar'){
 	$upda = mysql_query("UPDATE polog77x SET Materai=$Materai WHERE id='$IdPo'");
}else{
	$upda = mysql_query("UPDATE polog77x SET Ppn=$Ppn WHERE id='$IdPo'");
}	
header("Location:./a10_m.php?ubah=ok&id=$id&IdPo=$IdPo");
}
?>