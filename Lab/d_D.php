<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ikan  = $_GET["ikan"];
$NamaBiaya  = $_GET["NamaBiaya"];
$kdjdkjd  = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
$ok = mysql_fetch_array($kdjdkjd);
 if($ok[Kelompok3]==$iin){
     $mk = mysql_query("UPDATE  `tabelbiayax` SET `Kelompok3` = '' WHERE  `id` =$id");
}else{
    $mk = mysql_query("UPDATE  `tabelbiayax` SET `Kelompok3` = '$iin' WHERE  `id` =$id");
} 

	 header("Location:./makan_gemblong.php?NamaBiaya=$NamaBiaya&iin=$iin");
?>