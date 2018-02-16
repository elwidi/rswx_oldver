<?php 
session_start();
include "../../konek.php";
include "../../ceke.php";
$id = $_GET["id"];
$jdjdjd = mysql_query("SELECT * FROM dokter WHERE id='$id'");
$uu = mysql_fetch_array($jdjdjd);
$TglJam=date("d.m.Y-H:i:s");
if(!$uu[id]){
echo "RECORD SET TIDAK DIKENAL";
}else{
if($uu[Stap]==0){
$upa = mysql_query("UPDATE dokter SET Stap=1 WHERE id='$id'");
}else{
$upa = mysql_query("UPDATE dokter SET Stap=0,Opr='$a[User]',TglJam='$TglJam' WHERE id='$id'");
} 
}?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ddd_dd.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()"></body>
</html>