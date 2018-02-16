<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$IdSt = $_GET["IdSt"];
$IdStruk = $_GET["IdStruk"];
$MstKey = $_GET["MstKey"];
$id = $_GET["id"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==9 ||  $a[Level]==112 || $a[Level]==16){
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==16){
   $ambil = mysql_query("DELETE  FROM txninap WHERE id='$id'");
   }else{
   $ambil = mysql_query("DELETE  FROM txninap3 WHERE id='$id'");
   }
   header("Location:./txn_inap.php?MstKey=$MstKey&IdStruk=$IdStruk");
   }else{
   
   }
   ?>