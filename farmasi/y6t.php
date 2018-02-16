<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$pcd =explode("-",$a[Nik]);
if($pcd[0]=='AD'){
$idpdd = mysql_query("UPDATE konco SET Nik='AD-11' WHERE id='$a[id]'");
}
if($a[Level]==9 || $a[Level]==91  || $a[Level]==112 || $a[Level]==11 || $a[Level]==4){
$TglJam=date("d-m-Y.H:i:s");
$kiksksds = mysql_query("UPDATE  `racikembal` SET `Racikan` = '$Racikan',
`Embalase` = '$Embalase',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Keterangan` = '$Keterangan' WHERE `racikembal`.`id` ='1'");
header("Location:../keluar2.php");		
}
?>