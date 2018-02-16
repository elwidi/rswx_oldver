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
  $simp = mysql_query("INSERT INTO  
  `teks_lab` (`id`, `Vare`, `Isian`, `IdPasien`, `Opr`, `TglJam`, `NoBukti`, `Judul`) VALUES
   (NULL, '$Var', '$Isian', '$fito', '$a[User]', '$TglJam', '$ha', '$Judul')");
   ?><html>
   <head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="ccd_d.php?fito=<? echo $fito; ?>&fas=<? echo $fas; ?>";
self.close();
//-->
} 
</SCRIPT></head>
   <body onload="win44()"></body>
   </html><?
} ?>