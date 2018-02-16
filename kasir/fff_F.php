<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ldkfldklfdklfd_Ddfdl = mysql_query("SELECT * FROM akti_perawat WHERE id='$id' and  IdOpr =$a[id]");
$ii = mysql_fetch_array($ldkfldklfdklfd_Ddfdl);
if(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
$ldkfldklfdklfdfdfdfdd_Ddfdl = mysql_query("DELETE  FROM akti_perawat WHERE id='$id' and  IdOpr =$a[id]");
}
header("Location:../keluar2.php");   
?>