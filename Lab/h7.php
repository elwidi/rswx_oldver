<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ada = $_GET["ada"];
$NoBukti = $_GET["Dus"];
$bala = $_GET["bala"];
$NamaBiaya = $_GET["NamaBiaya"];
$ujs = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
	$sim = mysql_query("INSERT INTO `nolabinap` (`id`, `NoLab`, `IdPasien`) VALUES (NULL, '$NoBukti','$id')");
	if($sim){
	
	$kjk = mysql_query("SELECT * FROM nolabinap WHERE  	NoLab='$NoBukti'");
	$ya = mysql_fetch_array($kjk);
 	 header("Location:./h.php?id=$id&NoBukti=$ya[id]");
	}
}
?>
