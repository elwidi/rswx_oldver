<?
$NamaDokter = $_GET["NamaDokter"];
$hari= $_GET["hari"];
if($hari=='sabar'){
header("Location:./3zsx.php?nas=4&NamaDokter=$NamaDokter");
}else{
header("Location:./bg_m.php?nas=4&NamaDokter=$NamaDokter");
}
?>