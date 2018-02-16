<?
session_start();
include "../konek.php";
include "../ceke.php";
 $jdkj = mysql_query("SELECT * FROM kwitansi_lab_rad WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
if(!$hh[id]){
 header("Location:./index.php");
}
$ceke_S = mysql_query("SELECT * FROM txnrad WHERE  id='$id'");
$ii = mysql_fetch_array($ceke_S);
if( $a[Level]==3){
$uosi = mysql_query("UPDATE  `kwitansi_lab_rad` SET `Tunai` = '$Tunai',
`Kk` = '$Kk',
`Db` = '$Db',
`Jam` = '$JamS',
`TglJam` = '$TglJam',
`Opr` = '$a[Nama]',
`Pembayar` = '$Pembayar' WHERE  `id` ='$id'");
}else{

}?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="njh90.php?pa=3&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">

</body>
</html>