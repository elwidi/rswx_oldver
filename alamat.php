<?php 
session_start();
include "konek.php";
include "ceke.php";
 $kepan = mysql_query("SELECT * FROM alamat WHERE id=1");
$fkd =  mysql_fetch_array($kepan);

 ?>