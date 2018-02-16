<?php 
session_start();
include "../konek.php";
include "../ceke.php";
  $kjfgfgf_Fgfgfg0009 = mysql_query("SELECT * FROM akti_perawat WHERE id='$id'");
 $yam = mysql_fetch_array($kjfgfgf_Fgfgfg0009);
if(!$yam[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif($a[Level]==9){
$fgkfgfg_Fgf  = mysql_query("delete from akti_perawat WHERE id='$id'");
?><html>
<SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="a08_fgfg.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html><?
}?>