<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 if($FiLaDim[Duabelas]=='on' && $a[Level]==9){
 $TglJam=date("dmy.His");
 	$uda = mysql_query("UPDATE kwita_gab SET TglJam='$TglJam' WHERE IdOpr='$a[id]' AND Stat=0");
	header("Location:./x01_2.php?TglJam=$TglJam");
 }
 ?>