<?
session_start();
include "../konek.php";
include "../salaman.php";
 $kdjkdfd_Dfdfd = mysql_query("SELECT * FROM racikembal WHERE id=1");
 $yapa = mysql_fetch_array($kdjkdfd_Dfdfd);
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
if($Mingo==1){
$Total=$HargaK*$Qty+$yapa[Embalase];;
}else{
$Total=$HargaK*$Qty;
}
 $upda = mysql_query("UPDATE  `jualobat_tmp` SET `Qty` = '$Qty',`HargaBeli` = '$HargaK',
 `JmlHargaBeli` = '$Total',
 `Total2` = '$Total',
`Operator` = '$a[Nama]' WHERE `jualobat_tmp`.`id` =$IdDetil"); 
  
//header("Location:./s_s30k.php?id=$id&IdDetil=$IdDetil&Rc=$Rc&NoResep=$NoResep");
}
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