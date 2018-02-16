<?
session_start();
 include "../konek.php";
include "../ceke.php";
  
 $resekan = mysql_query("SELECT * FROM dataobat WHERE id='$id'");
 $ii = mysql_fetch_array($resekan);
 if(!$ii[id]){
 header("Location:./obat.php");
 }else{
 $dlfd = mysql_query("DELETE FROM dataobat WHERE id='$id'");
header("Location:../keluar2.php");
}