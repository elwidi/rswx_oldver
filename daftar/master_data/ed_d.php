<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$Alasan  =$_GET["Alasan"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$TglJam=date("d.m.Y-H:i:s");
	$sum = mysql_query("INSERT INTO `AlasanBatal` (`id`, `Alasan`, `Opr`, `TglJam`)
	 VALUES (NULL, '$Alasan', '$a[Nama]', '$TglJam')");
	if($sum){
	header("Location:./2wv.php");
	}
}
?>