<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$upda = mysql_query("UPDATE tabelbiayax SET Kelompok3='' WHERE id='$IdDetil'");
header("Location:./s_erre.php?id=$id");

?>