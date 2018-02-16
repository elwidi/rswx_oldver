<?
session_start();
 include "../konek.php";
 include "../salaman.php";
include "../rake.php";
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==12){
  $Bus = mysql_query("SELECT * FROM labumum WHERE id=$hari");
$x = mysql_fetch_array($Bus);
if($anak=='ela'){
$upda = mysql_query("UPDATE labumum SET NamaDokter='$NamaDokter_1' WHERE id='$hari'");
}else{
$upda = mysql_query("UPDATE labumum SET NamaPerujuk='$NamaDokter_1' WHERE id='$hari'");
}
}else{ }
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="667676y_d.php?hari=<? echo $hari; ?>&fito=<? echo $fito; ?>&xe=<? echo $xe; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()">

</body>
</html>