<?
session_start();
include "../konek.php";
include "../salaman.php";
$kjdkdj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$mm = mysql_fetch_array($kjdkdj);
//
$KDJKJKDFJ= mysql_query("SELECT * FROM jualobat_tmp2 WHERE id='$IdDetil'");
$ye = mysql_fetch_array($KDJKJKDFJ);
if(!$ye[id]){
header("Location:../keluar2.php");
}elseif(!$mm[id]){
header("Location:../keluar2.php");
}else{
$Total=$ye[HargaBeli]*$Qty;
 $upda = mysql_query("UPDATE  `jualobat_tmp2` SET `Qty` = '$Qty',
 `JmlHargaBeli` = '$Total',
`Operator` = '$a[Nama]' WHERE `jualobat_tmp2`.`id` =$IdDetil"); 
header("Location:../keluar2.php");
}
?>