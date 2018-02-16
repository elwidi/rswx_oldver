<?
session_start();
include "../konek.php";
include "../salaman.php";
include "../rake.php";
include "../hari.php";
$NoResep = $_GET["NoResep"];
 if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==9){
if($NoResep==''){
 header("Location:./susu_ayam_ada_dak.php");
 }else{
 $cddk = mysql_query("SELECT NoResep,id FROM rl_resep WHERE NoResep='$NoResep'");
 $yes = mysql_fetch_array($cddk);
 	 if(!$yes[id]){
	 echo "DATA TIDAK DIKETEMUKAN,...";
	 }else{
	 header("Location:./jangan_pacaran_mllu.php?RegId=$yes[NoResep]");
	 }
 } //end of noresep
}else{
header("Location:./keluar.php");
}
?>