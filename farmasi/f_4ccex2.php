<?
session_start();
include "../konek.php";
include "../salaman.php";
$kjdkdj = mysql_query("SELECT * FROM keluarmasukpasien WHERE id='$id'");
$mm = mysql_fetch_array($kjdkdj);
//
$KDJKJKDFJ= mysql_query("SELECT * FROM jualobat_tmp2 WHERE id='$IdDetil'");
$ye = mysql_fetch_array($KDJKJKDFJ);
if(!$ye[id]){
header("Location:../keluar2.php");
}elseif(!$mm[id]){
header("Location:../keluar2.php");
}else{
$Total=$ye[HargaBeli]*$Qty;
 $upda = mysql_query("UPDATE  `jualobat_tmp2` SET `Qty` = '$Qty',
 `JmlHargaBeli` = '$Total',
`Operator` = '$a[Nama]',
`stat` = '$RacKe' WHERE  `id` =$IdDetil"); 
//header("Location:./s_s30k.php?id=$id&IdDetil=$IdDetil&Rc=$Rc&NoResep=$NoResep");
}
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="s_s30x_23cccck.php?id=<? echo $id; ?>&IdDetil=<? echo $IdDetil; ?>&Rc=<? echo $Rc; ?>&NoResep=<?  echo $NoResep; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html>