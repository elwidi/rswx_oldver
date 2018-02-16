<?
session_start();
 include "../konek.php";
 include "../ceke.php";
include "../hari.php";
 $kdjfkdkfd  = mysql_query("SELECT * FROM txnrad WHERE id='$id'");
 $ya = mysql_fetch_array($kdjfkdkfd);
 if(!$ya[id]){
 header("Location:./minum_jamu_telor_bebek.php");
 }else{
 	$kj_kdjf = mysql_query("SELECT NamaBank FROM bank WHERE id='$TypeBayar'");
	$jop= mysql_fetch_array($kj_kdjf);
	$TglBayar = date("d"); $BlnBayar=date("m"); $ThnBayar = date("Y");
$TglJam=date("d.m.Y-H:i:s");
$JamBayar=date("H:i:s");
 if($Kk>0){
$crg = $Kk*3/100;
}
$Triger = date("H")-0;
if($Triger>=7 && $Triger<=14){
$Sif=1;
}elseif($Triger>=15 && $Triger<=21){
$Sif=2;
}else{
$Sif=3;
}
 
$hari="$a[id]-$Sif-$hari"; 
$budi = explode(".",$Tunai);
$Tunai = "$budi[0]"."$budi[1]"."$budi[2]"."$budi[3]"."$budi[4]$budi[5]$budi[6]$budi[7]$budi[8]$budi[9]";
///
$budi2 = explode(".",$Kk);
$Kk = "$budi2[0]"."$budi2[1]"."$budi2[2]"."$budi2[3]"."$budi2[4]$budi2[5]$budi2[6]$budi2[7]$budi2[8]$budi2[9]";
//
$budi3 = explode(".",$Db);
$Db = "$budi3[0]"."$budi3[1]"."$budi3[2]"."$budi3[3]"."$budi3[4]$budi3[5]$budi3[6]$budi3[7]$budi3[8]$budi3[9]";
////
$budi4 = explode(".",$JamE);
$JamE = "$budi4[0]"."$budi4[1]"."$budi4[2]"."$budi4[3]"."$budi4[4]$budi4[5]$budi4[6]$budi4[7]$budi4[8]$budi4[9]";
$simp = mysql_query("INSERT INTO `kwitansirj` (
`id` ,
`RegId` ,
`NoPasien` ,
`NamaPasien` ,
`Pembayar` ,
`NamaHari` ,
`TglBayar` ,
`BlnBayar` ,
`ThnBayar` ,
`JamBayar` ,
`Kasir` ,
`NoKartu` ,
`TypeBayar` ,
`NamaType` ,
`Tunai` ,
`Kk` ,
`Db` ,
`Jam` ,
`Asli` ,
`Bulat` ,
`Persen` ,
`KodePer` ,
`NamaPer` ,
`TxnJalan` ,
`Farmasi` ,
`Laborat` ,
`Stat` ,
`crg` ,
`KodeBagian` ,
`NamaBagian` ,
`Keterangan` ,
`IdPasien`
)
VALUES (
NULL , '$ya[RegId]' , 'RAL:$ya[id]' , '$ya[NamaPasien]' , '$Pembayar' , '$hari' , '$TglBayar' , 
'$BlnBayar' , '$ThnBayar' , '$JamBayar' , '$a[Nama]' , '' ,'$TypeBayar', '$jop[NamaBank]', '$Tunai', '$Kk' , '$Db' , '$JamE', '$Asli' , '$Asli', '$Persen', '$KodePer', '$NamaPer', '$TxnJalan', '$Farmasi', '$Laborat', '$Stat', '$crg', 'RL', 'Radiologi Luar', '$Keterangan', 'RL:$ya[id]'
)");
 if($simp){
 $upda = mysql_query("UPDATE txnrad SET Stat=1 WHERE id='$id'");
 }
 $kdjfkdfd = mysql_query("SELECT id FROM kwitansirj WHERE RegId='$ya[RegId]'");
 $dh = mysql_fetch_array($kdjfkdfd);
 header("Location:./s.php?id=$dh[id]");
}
?>