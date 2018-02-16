<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$IdDetil=$_GET["IdDetil"];
$dimas = $_GET["dimas"];
$NoBukti=$_GET["NoBukti"];
  $ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
  $ii = mysql_fetch_array($ujs);
if(!$ii[id]){
header("Location:../keluar2.php");
}else{
 	$dele = mysql_query("DELETE FROM txnjalan WHERE id='$IdDetil'");
	header("Location:../keluar2.php");
}
?>
