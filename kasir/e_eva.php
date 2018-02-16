<?
session_start();
include "../ceke.php";
 include "../konek.php";
 $kjd_ddd = mysql_query("SELECT * FROM persalinan WHERE IdRj='$id'");
$ya = mysql_fetch_array($kjd_ddd);
if(!$ya[id]){
echo "RECORD SET DATA TIDAK LENGKAP";
}else{
 $kjd_ddxcxcxcxd = mysql_query("DELETE FROM  persalinan WHERE IdRj='$id'");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="cff_s.php";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
<?
}
?>