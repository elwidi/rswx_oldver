<?
session_start ();
include "konek.php";
include "ceke.php";
$Tgl=date("d");
$Bln=date("m");
$Thn=date("Y");
$Jam = date("dmy.H:i:s");
   session_destroy ();
 header("Location:./index.php");
?>