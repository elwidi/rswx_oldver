<?
session_start();
include "../konek.php";
include "../ceke.php";
 $jdfd = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh= mysql_fetch_array($jdfd);
//
 
 $kdjfkdkdf = mysql_query("SELECT * FROM txnugd WHERE id='$Detil'");
 $vb = mysql_fetch_array($kdjfkdkdf);

$Harga = $vb[Harga];
//
$KeyID="$hh[KodeDokter]-$vb[IdBiaya]";
//echo "dfd $KeyID";
$jshdsjhjs_sds = mysql_query("SELECT * FROM pecah_jasa WHERE KeyID='$KeyID'");
$te =  mysql_fetch_array($jshdsjhjs_sds);
//
if($te[JasaRs]>0 && $TujuanDiskon==3){
$Tarif=  ($Harga *$Disk/100);
 $Total = $Harga-$Tarif;
 $update = mysql_query("UPDATE `txnugd` SET `disk` = '$Disk',
`rp_dis` = '$Tarif',
`TujuanDiskon` = '$TujuanDiskon' WHERE `id` ='$Detil'");

?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c2qq_9.php?x=<? echo $x; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body></html>
<?

}elseif($te[JasaDokter]>0 && $TujuanDiskon==2){
$Tarif= ($te[JasaDokter]*$Disk/100);
 $Total = $Harga-$Tarif;
 $update = mysql_query("UPDATE `txnugd` SET `disk` = '$Disk',
 `rp_dis` = '$Tarif',
 `TujuanDiskon` = '$TujuanDiskon' WHERE `id` ='$Detil'");

  ?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c2qq_9.php?x=<? echo $x; ?>&id=<? echo $id; ?>";
 self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body></html>
<?
}elseif($TujuanDiskon==4){
$Tarif= (($Harga)*$Disk/100);
 $Total = $Harga-$Tarif;
 $update = mysql_query("UPDATE `txnugd` SET `disk` = '$Disk',
`rp_dis` = '$Tarif',
`TujuanDiskon` = '$TujuanDiskon' WHERE `id` ='$Detil'");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c2qq_9.php?x=<? echo $x; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body></html>
<?

 }else{
echo "Settting Parameter Belum Valid "; 
} ?>

