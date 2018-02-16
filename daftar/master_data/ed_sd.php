<?
session_start();
include "../../konek.php";
include "../../ceke.php";
$Alasan  =$_GET["Alasan"];
if($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$id= $_GET["id"];
$TglJam=date("d.m.Y-H:i:s");
	$sum = mysql_query("UPDATE  `AlasanBatal` SET `Alasan` = '$Alasan',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE `id` ='$id'");
	if($sum){
	header("Location:./2wv.php");
	}
}
?>