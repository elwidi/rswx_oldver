<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
$jdfd = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh= mysql_fetch_array($jdfd);
if(!$hh[id]){
header("Location:../keluar2.php");
}else{
	$dele = mysql_query("DELETE FROM txnugd WHERE id='$IdBiaya'");
	header("Location:./VGT.php?id=$id");
}
?>