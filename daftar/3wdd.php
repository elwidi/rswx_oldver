<?php 
session_start();
include "../konek.php";
include "../ceke.php";
$kdidkdikd = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$uh = mysql_fetch_array($kdidkdikd);
if(!$uh[id]){
echo "RECORD SET TIDAK DIKENAL,....<br>";
}else{
$TglJam=date("d.m.Y-H:i:s");
if($Ket==12){
$uj  = mysql_query("DELETE FROM ket_pas_pul WHERE IdPasien='$id'");
}else{
$simp = mysql_query("INSERT INTO 
`ket_pas_pul` (`id`, `IdPasien`, `NoPasien`, `NamaPasien`, `JenisRawat`, `Keterangan`, `Opr`, `TglJam`, `Tgl`, `Bln`, `Thn`) 
VALUES (NULL, '$id', '$uh[NoPasien]', '$uh[NamaPasien]', 'Rwt Jalan', '$Ket', '$a[User]', '$TglJam', '$uh[TglMasuk]', '$uh[BlnMasuk]', '$uh[ThnMasuk]')");
//
$U = mysql_query("UPDATE  `ket_pas_pul` SET `Keterangan` = '$Ket',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam',
`Tgl` = '$uh[TglMasuk]',
`Bln` = '$uh[BlnMasuk]',
`Thn` = '$uh[ThnMasuk]' WHERE `ket_pas_pul`.`IdPasien` ='$id'");
}
header("Location:./7w.php?doa=baik&id=$id");

}?>