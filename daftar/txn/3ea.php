<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
if(!$x[id]){
header("Location:../../keluar2.php");
}else{
	header("Location:./7nu.php?id=$id");
}
?>