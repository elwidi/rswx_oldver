<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
$fkgjfkjgkfjgkfjgf = mysql_query("select * FROM golobat where id='$id'");
$dd = mysql_fetch_array($fkgjfkjgkfjgkfjgf);
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==4 || $a[Level]==21 || $a[Level]==24){
$upda = mysql_query("UPDATE golobat sET Upper='$Upper'where id='$id'");
header("Location:./ioi_09_0.php");

 } ?>