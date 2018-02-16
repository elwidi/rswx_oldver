<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$TglJam=date("d.m.Y-H:i:s");
$lkdjfd_dfdfd=  mysql_query("update dokter_lab set NamaDokter='$NamaDokter',Opr='$a[Nama]',TglJam='$TglJam'
 where id=1");
 header("Location:../keluar2.php");
?>