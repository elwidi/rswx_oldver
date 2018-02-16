<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $dfdfd_FDddgatr = mysql_query("SELECT * FROM tabelbiayax WHERE id='$id'");
 $ii = mysql_fetch_array($dfdfd_FDddgatr);
 //
 $kdjfkdjfkdjfkd = mysql_query("SELECT * FROM anak_labe WHERE id='$IdDetil'");
$hh = mysql_fetch_array($kdjfkdjfkdjfkd);
if(!$hh[id]){
echo "RECORD DETAIL TIDAK DIKENAL,.....";
}elseif(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP............";
}elseif($a[Level]==12){
$KDKDK = mysql_query("DELETE FROM anak_labe WHERE id='$IdDetil'");
header("Location:./pasar_kucing_ga_ada.php?id=$id");
}
?>