<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
if(!$uu[id]){
echo "RECORD SET TIDAK DIKENAL,....<br>";
}else{
$Jak = "$a[User]"."-".date("d.m.Y-H:i:s");
if($Sta==1){
 $uapas = mysql_query("UPDATE rwtjalan SET Sta='$Jak' WHERE id='$id'");
}else{
 $uapas = mysql_query("UPDATE rwtjalan SET Sta='' WHERE id='$id'");
}
 header("Location:./3wza.php?anak=lucu&id=$id");
}
?>