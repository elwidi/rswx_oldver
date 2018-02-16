<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ikan  = $_GET["ikan"];
$NamaBiaya  = $_GET["NamaBiaya"];
if($a[Level]==12 || $a[Level]==91){
$TglJam=date("d.m.Y-H:i:s");
$ldkldkfldklfd = mysql_query("SELECT * FROM paketlab WHERE id='$id'");
$ya = mysql_fetch_array($ldkldkfldklfd);
if($ya[id]){
$simp = mysql_query("UPDATE  `paketlab` SET `NamaPaket` = '$NamaPaket',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE `paketlab`.`id` =$id");
}else{
	$simp = mysql_query("INSERT INTO  `paketlab` (`id`, `NamaPaket`, `Opr`, `TglJam`) VALUES (NULL, '$NamaPaket','$a[Nama]','$TglJam')");
	}
	header("Location:./s_erre.php");

}
?>