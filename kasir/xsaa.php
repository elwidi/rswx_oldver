<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[User2]=='admin'){
if($as==4){
$udd_00 = mysql_query("UPDATE konco SET Level=112,KodeBagian=35 WHERE id='$a[id]' AND User='admin'");
header("Location:../fisio/index.php");
}elseif($as==3){
$udd_00 = mysql_query("UPDATE konco SET Level=98,KodeBagian=9 WHERE id='$a[id]' AND User2='admin'");
header("Location:../boga/index.php");
}elseif($as==230){
$udd_00 = mysql_query("UPDATE konco SET Level=7,KodeBagian=25 WHERE id='$a[id]' AND User2='admin'");
header("Location:../Akuntansi/index.php?depan=1");
}elseif($as==39){
$udd_00 = mysql_query("UPDATE konco SET Level=6,KodeBagian=34 WHERE id='$a[id]' AND User2='admin'");
header("Location:../logistik/index.php");
}elseif($as==787){
$udd_00 = mysql_query("UPDATE konco SET Level=22,KodeBagian=26 WHERE id='$a[id]' AND User2='admin'");
header("Location:../keuangan/index.php");
}elseif($as==32){
$udd_00 = mysql_query("UPDATE konco SET Level=16,KodeBagian=12 WHERE id='$a[id]' AND User2='admin'");
header("Location:../Radiologi/index.php");
}elseif($as==5){
$udd_00 = mysql_query("UPDATE konco SET Level=94 WHERE id='$a[id]' AND User2='admin'");
header("Location:../hrd/index.php");
}elseif($as==7){
$udd_00 = mysql_query("UPDATE konco SET Level=1,KodeBagian=20 WHERE id='$a[id]' AND User2='admin'");
header("Location:../Daftar/index.php");
}elseif($as==72){
$udd_00 = mysql_query("UPDATE konco SET Level=1,KodeBagian=22 WHERE id='$a[id]' AND User2='admin'");
header("Location:../Daftar/index.php");
}elseif($as==73){
$udd_00 = mysql_query("UPDATE konco SET Level=11,KodeBagian=23 WHERE id='$a[id]' AND User2='admin'");
header("Location:../Farmasi/index.php");
}elseif($as==75){
$udd_00 = mysql_query("UPDATE konco SET Level=11,KodeBagian=33 WHERE id='$a[id]' AND User2='admin'");
header("Location:../Farmasi/index.php");
}elseif($as==8){
$udd_00 = mysql_query("UPDATE konco SET Level=12,KodeBagian=19 WHERE id='$a[id]' AND User2='admin'");
header("Location:../Lab/index.php");
}elseif($as==9){
$udd_00 = mysql_query("UPDATE konco SET Level=9,KodeBagian=1 WHERE id='$a[id]' AND User2='admin'");
header("Location:../Kasir/a93.php");
}else{
$udd_00 = mysql_query("UPDATE konco SET Level=9,KodeBagian=24 WHERE id='$a[id]' AND User2='admin'");
header("Location:./index.php");
}
}
?>