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
  $simp = mysql_query("UPDATE  `teks_lab` SET `Vare` = '$Var',
`Isian` = '$Isian',
`Opr` = '$a[User]',
`TglJam` = '$TglJam',
`Judul` = '$Judul' WHERE  `id` ='$Kunci'");
   ?><html>
   <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ccd_d.php?fito=<? echo $fito; ?>&fas=<? echo $fas; ?>";
self.close();
//-->
} 
</SCRIPT></head>
   <body onLoad="win44()"></body>
   </html><?
} ?>