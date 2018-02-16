<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$id  = $_GET["id"];

$jhsjdskdad  = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uu = mysql_fetch_array($jhsjdskdad);
	//  $kjkdfd_DFdfdf = mysql_query("DELETE  FROM  pj_rajal  Where IdRajal='$id'");
  //header("Location:./ed_d.php?NoPasien=$uu[NoPasien]&ade=3");
?> 
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="iin_istri_hari.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()">

</body>
</html>