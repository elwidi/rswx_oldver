<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];

$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
	  $kjkdfd_DFdfdf = mysql_query("DELETE  FROM  pj_rajal  Where IdRajal='$id'");
 header("Location:./ed_d.php?NoPasien=$uu[NoPasien]&ade=3");
?> 