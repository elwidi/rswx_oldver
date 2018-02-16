<?php
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$PasieR = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$ii = mysql_fetch_array($PasieR);
$jdkdjdk = mysql_query("DELETE FROM penerimaandp WHERE id='$Detil'");
header("Location:./6f2.php?id=$id");
?>