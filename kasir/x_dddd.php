<?php 
session_start();
include "../konek.php";
include "../ceke.php";
  $kjfgfgf_Fgfgfg0009 = mysql_query("SELECT * FROM akti_perawat WHERE id='$id'");
 $yam = mysql_fetch_array($kjfgfgf_Fgfgfg0009);
if(!$yam[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif($a[Level]==9){
 //akti_perawat
 $TglJam=date("d.m.Y-H:i:s");
 $upda = mysql_query("UPDATE `akti_perawat` SET `Tgl` = '$TglX',
`Bln` = '$Bln',
`Thn` = '$Thn',
 `Keterangan` = '$Keterangan',
 `TglJam` = '$TglJam',
`Jenis` = '$Jenis' WHERE  `id` ='$id'");
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ccc90.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()">

</body>
</html>
<?
 }
?>