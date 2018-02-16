<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];

 
$skksksk = mysql_query("SELECT * FROM konco WHERE id='$id'");
$ye = mysql_fetch_array($skksksk);
if(!$ye[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==2){
$uduudj = mysql_query("UPDATE konco SET Pass='$ambil' WHERE id='$id'");
if($uduudj){
?>

<?php  
}
}?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c443345e.php";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>