<?php 
session_start();
include "../konek.php";
include "../ceke.php";
 $ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$fito'");
$ss = mysql_fetch_array($ada);
$kjdkdfd_Dfdfdf = mysql_query("SELECT * FROM urutanlab where id='$fas'");
$dapa = mysql_fetch_array($kjdkdfd_Dfdfdf);
if(!$dapa[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif(!$ss[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
$TglJam=date("d.m.Y-H:i:s");
$ha = "$dapa[id]-$dapa[KeyID]";
   $simp = mysql_query("DELETE FROM teks_lab WHERE id='$del'");
   header("Location:./bioskop_dganti_vcd.php?fas=$fas&fito=$fito");
   ?> <?
} ?>