<?
session_start();
include "../ceke.php";
 include "../konek.php";
///
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
//
$odfodi_Dfdfdl = mysql_query("SELECT * FROM datapasien WHERE NoPasien='$hh[NoPasien]'");
$ss = mysql_fetch_array($odfodi_Dfdfdl);
//
$ksjdskds_dsds = mysql_query("delete  FROM vaksin_pasien WHERE IdPasen='$id'");
 if($ksjdskds_dsds){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="sj_123.php?bln2=<? echo $bln2; ?>&bln1=<? echo $bln1; ?>&tgl1=<? echo $tgl1; ?>&tgl2=<? echo $tgl2; ?>&thn1=<? echo $thn1; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
<? }else{
echo "PROSES DATA GAGAL";
}
?>