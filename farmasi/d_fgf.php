<?
session_start();
include "../konek.php";
include "../salaman.php";
$kjdkdj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$mm = mysql_fetch_array($kjdkdj);
//
$KDJKJKDFJ= mysql_query("SELECT * FROM jualobat_tmp WHERE id='$IdDetil'");
$ye = mysql_fetch_array($KDJKJKDFJ);
if(!$ye[id]){
header("Location:../keluar2.php");
}elseif(!$mm[id]){
header("Location:../keluar2.php");
}else{
$KDJKJKDFJ= mysql_query("delete  FROM jualobat_tmp WHERE id='$IdDetil'");
 
 }
 //header("Location:../keluar2.php");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="s_s30k.php?id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>&Rc=<? echo $Rc; ?>&NoResep=<?  echo $NoResep; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html>