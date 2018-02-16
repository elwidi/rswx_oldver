<?php 
session_start();
include "../konek.php";
include "../ceke.php";
if($a[Level]==6){
$id=$a[KodeBagian];
}else{
$id= $id;
}
$sdksjksjdsk = mysql_query("SELECT * FROM bagian WHERE id='$id'");
$uy = mysql_fetch_array($sdksjksjdsk);
//echo $IdObat;
$KeyID="$id-$IdBarang";
   $kksjsksd_23232322223 = mysql_query("SELECT Qty  FROM stok_opm2 WHERE KeyID='$KeyID'");
$g_66666666666666666666666666666666666666gg = mysql_fetch_array($kksjsksd_23232322223);
////////////// 
 $u7767sds_oi9d89fdfkdkfkdmfdmfkdmfkd  = mysql_query("SELECT SUM(QtyBeri) as ss FROM oder_2detil WHERE IdBarang='$IdBarang' AND IdUnit!='34' AND Stat=2");
$ua_9899hjhj_9898989sdsdsds = mysql_fetch_array($u7767sds_oi9d89fdfkdkfkdmfdmfkdmfkd);
//////////////////////
 $u7767sds_oi9d89fdfkdkfkdmfdmfkdmfkd3  = mysql_query("SELECT SUM(Qty) as ss FROM podetil WHERE IdBarang='$IdBarang'  AND Stat=2");
$ua_9899hjhj_9898989sdsdsds3 = mysql_fetch_array($u7767sds_oi9d89fdfkdkfkdmfdmfkdmfkd3);
 /////////////////////////////
 $kdfkdjfkd_098_121323= mysql_query("SELECT SUM(Qty) as hh FROM returbeli2 WHERE IdBarang='$IdBarang'");
 $y01942q_k= mysql_fetch_array($kdfkdjfkd_098_121323);
 ///////////////////////////
$Stok = $g_66666666666666666666666666666666666666gg[Qty]-$ua_9899hjhj_9898989sdsdsds[ss]+$ua_9899hjhj_9898989sdsdsds3[ss]-$y01942q_k[hh];
 echo number_format($Stok);
 ?>