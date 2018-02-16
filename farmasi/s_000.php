<?
session_start();
include "../konek.php";
include "../ceke.php";
  $datat = mysql_query("SELECT * FROM supplier2 WHERE id='$id'");
 $xs= mysql_fetch_array($datat);
if(!$xs[KodeSuplier]){
header("Location:../keluar2.php");
}else{
$dele = mysql_query("DELETE FROM bidang_usaha WHERE id='$IdUsaha'");
header("Location:./c_0a1.php?id=$id");

}
?>