<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$iiiii = mysql_query("SELECT * FROM polog77 WHERE id='$IdPo'");
$uh = mysql_fetch_array($iiiii);
//
$dkjfkdjkfd= mysql_query("SELECT * FROM fakturpo WHERE IdPo='$IdPo'");
$ok = mysql_fetch_array($dkjfkdjkfd);
//
if(!$bln){
$bln=date("m");
$thn1=date("Y");
}else{
$bln=$Bln;
$thn1=$Thn;
}
if(!$uh[id]){
header("Location:../keluar2.php");
}else{
$TglJam=date("d.m.Y-H:i:s");
	$simp = mysql_query("INSERT INTO  `fakturpo` 
	(`id`, `IdPo`, `NoInv`, `NoFaktur`, `Opr`, `TglJam`, `TglFak`, `BlnFak`, `ThnFak`, `TglJt`, `BlnJt`, `ThnJt`) VALUES 
	(NULL, '$IdPo', '$NoInv', '$NoFaktur', '$a[Nama]', '$TglJam', '$TglFak',
	 '$BlnFax', '$ThnFax', '$TglJt', '$BlnJt', '$ThnJt')");
	 if(!$simp){
	 $sksdj  = mysql_query("UPDATE  `fakturpo` SET `NoInv` = '$NoInv',
`NoFaktur` = '$NoFaktur',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`TglFak` = '$TglFak',
`BlnFak` = '$BlnFak',
`ThnFak` = '$ThnFak',
`TglJt` = '$TglJt',
`BlnJt` = '$BlnJt',
`ThnJt` = '$ThnJt' WHERE `IdPo` ='$IdPo'");
	 }
}
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="c990.php?Bln=<? echo $Bln; ?>&Thn=<? echo $Thn; ?>&id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>