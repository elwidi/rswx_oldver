<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id = $_GET["id"];

 
$skksksk = mysql_query("SELECT * FROM konco WHERE id='$id'");
$ye = mysql_fetch_array($skksksk);
if(!$ye[id]){
header("Location:../keluar2.php");
}elseif($a[Level]==1){
  $awal=0;
$pj = strlen($PasW);

while($awal<$pj){
$ambil .=ord(substr($PasW,$awal,1));
$awal++; } 
//echo "$ambil";
 $uduudj = mysql_query("UPDATE konco SET Pass='$ambil' WHERE id='$id'");
if($uduudj){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c445e.php";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>
<?php  
}
}?>