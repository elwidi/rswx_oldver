<?
session_start();
include "../konek.php";
include "../salaman.php";
$TglJam=date("d.m.Y-H:i:s");
 $KDJFKDJFKD = mysql_query("SELECT * FROM polog77x WHERE id='$id'"); 
 $kk = mysql_fetch_array($KDJFKDJFKD); 
if(!$kk[id]){
header("Location:../keluar2.php");
}else{ 
if(!$dimas){ 
 	$simp = mysql_query("INSERT INTO  
	`fakturpo` (`id`, `IdPo`, `NoInv`, `NoFaktur`, `Tgl`, `Opr`, `TglJam`, `TglJt`, `BlnJt`, `ThnJt`, `NoSo`, `NoDn`, `Diskon`
	, `TglDtgl`, `BlnDtg`, `ThnDtg`) 
	VALUES (NULL, '$id', '$NoInv', '$NoFak', '$Tglx', '$a[Nama]', '$TglJam','$TglJt','$BlnJt','$ThnJt','$NoSo','$NoDn','$Diskon','$TglDtgl',
	'$BlnDtg','$ThnDtg')");
	}
 $upd = mysql_query("UPDATE  `fakturpo` SET `NoInv` = '$NoInv',
`NoFaktur` = '$NoFak',
`Tgl` = '$Tglx',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`TglJt` = '$TglJt',
`BlnJt` = '$BlnJt',
`ThnJt` = '$ThnJt',
`NoSo` = '$NoSo',
`NoDn` = '$NoDn',
`Diskon` = '$Diskon',
`TglDtgl` = '$TglDtgl',
`BlnDtg` = '$BlnDtg',
`ThnDtg` = '$ThnDtg' WHERE  `id` =$dimas");
 
    if($simp || $upd){
   header("Location:./cX3.php?dimas=$dimas&kembang=$kembang&id=$id");
	}
	 

}
?>
