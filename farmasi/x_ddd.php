 <?
session_start();
include "../konek.php";
include "../ceke.php";
 $KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$IdPo'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD);
 $lklfkfdl = mysql_query("SELECT * FROM fakturpo WHERE id='$dimas'"); 
$yh = mysql_fetch_array($lklfkfdl);
if(!$yh[id]){
echo "NOMER FAKTUR TIDAK DIKENAL,...<br>";
}elseif(!$kk[id]){
echo "DATA NOMER PO TIDAK DIKENAL,....<br>";
}else{
		 $kddk  = mysql_query("UPDATE fakturpo set Stak=0 WHERE id='$dimas'");
		 $dfdfdkddk  = mysql_query("UPDATE polog77x set Stak=0 WHERE id='$id'");
 				$uda  =  mysql_query("UPDATE podetil77x SET Stat=0 WHERE  IdFaktur 	='$dimas'");
  }		
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="xs09_s.php?id=<? echo $IdPo; ?>&dimas=<? echo $dima; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>