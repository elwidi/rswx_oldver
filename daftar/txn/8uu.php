<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$IdDetil = $_GET["IdDetil"];
$jdmj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$x = mysql_fetch_array($jdmj);
////////////////////
header("Location:./8u.php?id=$id");
?>