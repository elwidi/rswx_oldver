<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];
$ada = $_GET["ada"];
$bala = $_GET["bala"];
$NamaBiaya = $_GET["NamaBiaya"];
$ujs = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ii = mysql_fetch_array($ujs);
if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
$kjdkjdkfdkjfkd = mysql_query("DELETE FROM tampil_lab WHERE IdPasien='$ii[id]'");
}
header("Location:./4e.php?ada=hehe&id=$id");
?>