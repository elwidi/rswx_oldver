<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$kp = mysql_fetch_array($ada);
if(!$kp[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{ 
 $TglJam=date("d.m.Y-H:i:s");
$kela = mysql_query("INSERT INTO  
`cetak_lab` (`id`, `IdPasien`, `Awal`, `Akir`, `Opr`, `TglJam`) VALUES 
(NULL, '$id', '$awal', '$akir', '$a[User]', '$TglJam')");
//
$ip = mysql_query("UPDATE  `cetak_lab` SET `Awal` = '$awal',
`Akir` = '$akir',
`Opr` = '$a[User]',
`TglJam` = '$TglJam' WHERE `cetak_lab`.`IdPasien` =$id");
?><html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="mmj_0s.php?awal=<? echo $awal; ?>&akir=<? echo $akir; ?>&akan=<? echo $akan; ?>&id=<? echo $id; ?>&ak=<? echo $ak; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onLoad="win44()">
</body>
</html>
<?
}
?>