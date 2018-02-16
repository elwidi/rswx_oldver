<?php 
if(!isset($_SESSION))
{
session_start();
}
include_once('register_globals.php');
register_globals();
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$used = $_SESSION[used];
$pas = $_SESSION[pas];
include "konek.php";
$IdOpppppppp=$_SESSION['IdOpppppppp'];
$waktu=$_SESSION['waktu'];
 $data = mysql_query("SELECT * FROM konco WHERE id='$IdOpppppppp' AND User='$used' AND Pass='$pas'");
$a= mysql_fetch_array($data); 
   $Tgl=date("d-m-Y"); $Jam=date("H:i:s");
$KeyID="$a[id]-".date("dmY");
      if(!$_SESSION['pas'] && !$_SESSION['use'] && !$_SESSION['waktu']){
   }elseif(!$a[id]){
header("Location:./keluar.php");
 } 
 date_default_timezone_set("Asia/Jakarta");?> 