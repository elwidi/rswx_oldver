<?
session_start();
include "../konek.php";
include "../ceke.php";
 //////////////////////
$KDJFKDJFKD2 = mysql_query("SELECT * FROM polog77 WHERE id='$id'"); 
$kk2 = mysql_fetch_array($KDJFKDJFKD2); 
 $KDJFKDJF_090kdjfkdjfdfkdfdKD = mysql_query("SELECT * FROM polog77x WHERE id='$IdPo'");
$ss = mysql_fetch_array($KDJFKDJF_090kdjfkdjfdfkdfdKD);
if(!$ss[id]){
echo "RECORD TUJUAN TIDAK DIKENAL";
 }elseif(!$kk2[id]){
echo "RECORD ASAL TIDAK LENGKAP";
}else{
header("Location:./dimas_mau_tk.php?id=$IdPo&anak=desa");

if($jajaja=='343434'){
?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xx_x.php?id=<? echo $IdPo; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
<div align="left">
 </div>
</body>
</html><?
}
} 
?>
