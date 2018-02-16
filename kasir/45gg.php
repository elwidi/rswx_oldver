<?
session_start();
include "../salaman.php";
include "../rake.php";
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM kwitansirj WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
 header("Location:./index.php");
}
$ceke_S = mysql_query("SELECT * FROM rwtjalan WHERE RegId='$hh[RegId]'");
$ii = mysql_fetch_array($ceke_S);
if($a[Level]==3){
$uosi = mysql_query("UPDATE kwitansirj SET Tunai='$Tunai',Db='$Db',Kk='$Kk',Jam='$JamS',Pembayar='$Pembayar',Kasir='$a[Nama]' WHERE id='$id'");
}else{

}?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="njh90.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>