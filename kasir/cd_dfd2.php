<?
session_start();
include "../ceke.php";
 include "../konek.php";
///
$jdkj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
$kjdkd_ddfdfdf = mysql_query("SELECT * FROM datapasien WHERE NoPasien='$hh[NoPasien]'");
$lem = mysql_fetch_array($kjdkd_ddfdfdf);
header("Location:./a93.php?ad=23&id=$lem[id]&bebek=goreng&ap=4");
?>