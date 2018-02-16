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
	$simp = mysql_query("UPDATE polog77 set NoPo='$NoPo' WHERE id='$id'");
	if($simp){
	?>
	<html>
	<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="b5_912.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
	<body onload="win44()"></body>
	</html>
	<?
	}
}
?>