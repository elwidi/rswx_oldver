<?
session_start();
include "../ceke.php";
include "../konek.php";
$jdkj = mysql_query("SELECT * FROM rwtjalan WHERE id='$id'");
$hh = mysql_fetch_array($jdkj);
///
$TglJam=date("d.m.Y-H:i:s");
$simp = mysql_query("INSERT INTO  `kb`
 (`id`, `IdPasien`, `NoPasien`, `NamaPasien`, `TglMasuk`, `BlnMasuk`, `ThnMasuk`, `JenisKb`, `Keterangan`, `TglKembali`, `BlnKembali`, `ThnKembali`, `Opr`, `TglJam`) VALUES 
 (NULL, '$id', '$hh[NoPasien]', '$hh[NamaPasien]', '$hh[TglMasuk]', '$hh[BlnMasuk]', 
 '$hh[ThnMasuk]', '$JenisKb', '$Keterangan', '$TglPeriksa2', '$BlnPeriksa2', '$ThnPeriksa2', '$a[Nama]', '$TglJam')");
 //
 $upda = mysql_query("UPDATE  `kb` SET `JenisKb` = '$JenisKb',
`Keterangan` = '$Keterangan',
`TglKembali` = '$TglPeriksa2',
`BlnKembali` = '$BlnPeriksa2',
`ThnKembali` = '$ThnPeriksa2',
`Opr` = '$a[Nama]',
`TglJam` = '$TglJam' WHERE `kb`.`IdPasien` =$id");
 //=====================================================================
 $TglJam=date("d.m.Y-H:i:s");
 	$impan = mysql_query("INSERT INTO `kb_2`
	 (`id`, `IdPasien`, `KbBaru`, `KbAktif`, `Kb4T`, `Anemia`, `Lila`, `PKronis`, `Ims`, `DoKb`, `Opr`, `TglJam`) VALUES 
	(NULL, '$id', '$KbBaru', '$KbAktif', '$Kb4T', '$Anemia', '$Lila', '$PKronis', '$Ims', '$DoKb', '$a[User]', '$TglJam')");
	//
	$kdikdidfd =  mysql_query("UPDATE  `kb_2` SET `KbBaru` = '$KbBaru',
`KbAktif` = '$KbAktif',
`Kb4T` = '$Kb4T',
`Anemia` = '$Anemia',
`Lila` = '$Lila',
`PKronis` = '$PKronis',
`Ims` = '$Ims',
`DoKb` = '$DoKb',
`Opr` = '$a[User]',
`TglJam` = '$TglJam' WHERE `IdPasien` ='$id'");
	
 ///////////===============================================================
 header("Location:./dimas4thn.php?id=$id");
?>