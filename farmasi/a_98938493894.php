<?
session_start();
include "../konek.php";
include "../salaman.php";
$umbu = mysql_query("SELECT * FROM keluarmasukpasien WHERE id=$id");
$ii = mysql_fetch_array($umbu);
//
$kdkfjdd_Dfdfd = mysql_query("SELECT * FROM ri_resep WHERE id='$IdDetil'");
$ya =  mysql_fetch_array($kdkfjdd_Dfdfd);
if(!$ya[id]){
echo "RECORD SET TIDAK LENGKAP";
}elseif(!$ii[id]){
echo "RECORD SET TIDAK LENGKAP";
}else{
 $udp  = mysql_query("UPDATE  `ri_resep` SET `Opr` = '$a[Nama]',
`Tg` = '$TglX',
`Bl` = '$Bln',
`Th` = '$Thn' WHERE  `id` ='$IdDetil'");
 
//
$duduyuf_Dfdf = mysql_query("UPDATE  `jualobat2` SET `Tgl` = '$TglX',
`Bln` = '$Bln',
`Thn` = '$Thn' WHERE `jualobat2`.`JamTran` ='$ya[NoResep]'");
//
}
if($udp){
?>
<html>
<head><SCRIPT language=JavaScript>
<!-- 
function win44(){
window.opener.location.href="x_ddd1223.php?id=<? echo $id; ?>";
self.close();
//-->
} 
</SCRIPT></head>
<body onload="win44()"></body>
</html>
<?
}
?>
