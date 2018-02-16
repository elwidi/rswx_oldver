<?
session_start();
include "../konek.php";
include "../ceke.php";
$kdjfkd_Dfdf = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$ya = mysql_fetch_array($kdjfkd_Dfdf);
$kdjkjdfD_dfmdlfld = mysql_query("SELECT * FROM rujukan where id='$IdRujuk'");
$ap = mysql_fetch_array($kdjkjdfD_dfmdlfld);
if(!$ya[id]){
echo "RECORD SET TIDAK DIKENAL";
}else{
if($mas=='haha'){
 $UPSD = mysql_query("UPDATE anc_2 SET Rujukan2='' WHERE id='$IdDetil'");
}elseif($mas=='sapa'){
 $UPSD = mysql_query("UPDATE anc_2 SET Rujukan1='' WHERE id='$IdDetil'");
}elseif($mas=='supran'){
 $UPSD = mysql_query("UPDATE anc_2 SET Rujukan2='$ap[NamaRujukan]' WHERE IdPasien='$id'");
}else{
 $UPSD = mysql_query("UPDATE anc_2 SET Rujukan1='$ap[NamaRujukan]' WHERE IdPasien='$id'");
}
}
header("Location:./anc.php?id=$id");
?>