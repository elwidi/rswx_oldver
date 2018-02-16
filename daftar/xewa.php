<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];
$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
if(!$uu[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$Up=date("d.m.Y-H:i:s");
$uspd =  mysql_query("UPDATE rwtjalan SET LB='$LB',Operator 	='$a[User]-$Up' WHERE id='$id'");
 header("Location:./3wza.php?makan=enak&id=$id");
}
?>