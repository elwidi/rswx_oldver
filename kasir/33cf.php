<?php
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
$IdSt = $_GET["IdSt"];
$IdStruk = $_GET["IdStruk"];
$MstKey = $_GET["MstKey"];
$id = $_GET["id"];
 
   $ambil = mysql_query("DELETE  FROM txninap3 WHERE id='$IdBiaya'");
    header("Location:./txn_inap.php?MstKey=$MstKey&IdStruk=$IdStruk");
    ?>