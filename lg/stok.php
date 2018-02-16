<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$sdksjksjdsk = mysql_query("SELECT * FROM bagian WHERE id='$id'");
$uy = mysql_fetch_array($sdksjksjdsk);
//echo $IdObat;
$KeyID="$id-$IdObat";
   $kksjsksd_23232322223 = mysql_query("SELECT Pengali  FROM stok_opm WHERE KeyID='$KeyID'");
$g_66666666666666666666666666666666666666gg = mysql_fetch_array($kksjsksd_23232322223);
//////////////////////////
$u7767sds_oi9d89fdfkdkfkdmfdmfkdmfkd  = mysql_query("SELECT SUM(TotalQty) as ss FROM oder_1detil WHERE IdObat='$IdObat' AND IdUnit='$id' AND Stat=2");
$ua_9899hjhj_9898989sdsdsds = mysql_fetch_array($u7767sds_oi9d89fdfkdkfkdmfdmfkdmfkd);
//////////////////////
$ayo_mari_menghitung_jumlah_obat_yang_keluar_drawatjalan= mysql_query("SELECT SUM(Qty) AS jj FROM jualobat WHERE KodeObat='$IdObat' AND IdDepo='$id'");
$dapat_pertamaserere_9 = mysql_fetch_array($ayo_mari_menghitung_jumlah_obat_yang_keluar_drawatjalan);
/////////////////////////////
$Stok = $g_66666666666666666666666666666666666666gg[Pengali]+$ua_9899hjhj_9898989sdsdsds[ss]-$dapat_pertamaserere_9[jj];
 echo number_format($Stok);
 ?>