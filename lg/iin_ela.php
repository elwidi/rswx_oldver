<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$dfldkfd_Ffgff = mysql_query("SELECT * FROM oder_2 WHERE id='$id' AND Stat>=1");
$ok = mysql_fetch_array($dfldkfd_Ffgff);
 $upd = mysql_query("UPDATE oder_2 SET Stak=$Stak WHERE id='$id'");
 //
 $kdidk_Dfd = mysql_query("UPDATE oder_2detil SET Stak=$Stak WHERE IdTxn='$id'");
 //
 header("Location:./index.php?ukur=xes3&id=$id");
 ?>