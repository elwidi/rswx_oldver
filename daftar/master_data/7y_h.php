<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$ICD_CODE = $_GET["ICD_CODE"];
$TERMINAL_CODE = $_GET["TERMINAL_CODE"];
$TERJEMAHAN = $_GET["TERJEMAHAN"];
$KATEGORI = $_GET["KATEGORI"];
$NamaICD = $_GET["NamaICD"];
$DESCRIPTION = $_GET["DESCRIPTION"];
$id = $_GET["id"];
$jksksjs = mysql_query("SELECT * FROM icdx WHERE id='$id'");
$xx = mysql_fetch_array($jksksjs);
if(!$xx[id]){
header("Location:../../keluar2.php");
}elseif($a[Level]==9 || $a[Level]==91  || $a[Level]==212 || $a[Level]==2){
$Jam=date("H:i:s");
$Tgl=date("d-m-Y");
	$upda = mysql_query("UPDATE  `icdx` SET `ICD_CODE` = '$ICD_CODE',
`TERMINAL_CODE` = '$TERMINAL_CODE',
`DESCRIPTION` = '$DESCRIPTION',
`TERJEMAHAN` = '$TERJEMAHAN',
`KATEGORI` = '$KATEGORI',
`Opr` = '$a[Nama]',
`Tgl` = '$Tgl',
`Jam` = '$Jam' WHERE `icdx`.`id` ='$id'");
if($upda){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ed_00000.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()">

</body>
</html>
<?
}
} ?>
