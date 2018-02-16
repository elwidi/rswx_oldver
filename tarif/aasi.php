<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$jahajh = mysql_query("UPDATE tabelrj SET Jns=1 WHERE id='$id'");
header("Location:./index.php?jaran=goyang");
?>