<?
session_start();
include "../konek.php";
include "../ceke.php";
 $dataa = mysql_query("SELECT * FROM rwtjalan WHERE id=$id");
$z = mysql_fetch_array($dataa);
 $kaylaIsnaAkmalian = mysql_query("SELECT id FROM kwitansirj WHERE RegId='$z[RegId]'");
 $h3 = mysql_fetch_array($kaylaIsnaAkmalian);
  $kju = mysql_query("SELECT * FROM cetak_hasil_lab  WHERE id='$oni'");
 $nn= mysql_fetch_array($kju);
 if(!$nn[id]){
 header("Location:../keluar2.php");
  }elseif($a[Level]==12 && !$h3[id]){ 
	$dele = mysql_query("DELETE  FROM cetak_hasil_lab  WHERE id='$oni'");
	header("Location:./fo_sk.php?id=$id");
}
?>