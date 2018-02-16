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
$ksjdskds_dsdfdfdfdds = mysql_query("delete  FROM bacth_vaksin WHERE IdRj='$id'");
if($ksjdskds_dsds){
header("Location:../keluar2.php");
}else{
echo "PROSES DATA GAGAL";
}
?>