<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$fito = $_GET["fito"];
include "../alamat.php";

$ada = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$kp = mysql_fetch_array($ada);
if(!$kp[id]){
echo "RECORD SET TIDAK LENGKAP,....<br>";
}else{
$TglJam=date("d.m.Y-H:i:s");
	$iik = mysql_query("INSERT INTO  
	`tambahan_lab`
(`id`, `IdPasien`, `Tgl`, `Bln`, `Thn`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tuju`, `delapan`, `sembilan`, `sepuluh`, `sebelas`, `duabelas`, `tigabelas`, `empatbelas`, `limabelas`, `enambelas`, `IdOpr`, `TglJam`, `Jenis`, `Kesan`, `Saran`) VALUES 
(NULL, '$id', '$kp[TglMasuk]', '$kp[BlnMasuk]', '$kp[ThnMasuk]', '$satu', '$dua', '$tiga', '$empat', '$lima', '$enam', 
'$tuju', '$delapan', 
'$sembilan', '$sepuluh', '$sebelas', '$duabelas', '$tigabelas', '$empatbelas', '$limabelas', '$enambelas', '$a[id]', '$TglJam', '$fas','$Kesan','$Saran')");
//
$upda = mysql_query("UPDATE  `tambahan_lab` SET `satu` = '$satu',
`dua` = '$dua',
`tiga` = '$tiga',
`empat` = '$empat',
`lima` = '$lima',
`enam` = '$enam',
`tuju` = '$tuju',
`delapan` = '$delapan',
`sembilan` = '$sembilan',
`sepuluh` = '$sepuluh',
`sebelas` = '$sebelas',
`duabelas` = '$duabelas',
`tigabelas` = '$tigabelas',
`empatbelas` = '$empatbelas',
`limabelas` = '$limabelas',
`enambelas` = '$enambelas',
`IdOpr` = '$a[id]',
`TglJam` = '$TglJam',
`Jenis` = '$Jenis',
`Kesan` = '$Kesan',
`Saran` = '$Saran' WHERE `IdPasien` ='$id'");
}
?>